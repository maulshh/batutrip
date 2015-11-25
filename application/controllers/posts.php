<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends B_Controller {

    public function __construct() {
        parent::__construct();
        $this->_loadmodel(array('user', 'post', 'trip'));
    }

    public function _loaddata($module, $permission, $bol=false){
        if(!($this->data = $this->user->check_permission($this->session->userdata('role_id'), $module, $permission))){
            if($bol) return false;
            redirect(base_url('login?error=k'));
        }
        return true;
    }

    public function _loaddata_user($module, $permission, $bol=false){
        if(!($this->data = $this->user->check_permission($this->session->userdata('role_id'), $module, $permission))){
            if($bol) return false;
            redirect(base_url('no_permission'));
        }
        return true;
    }

//    -----------------------------------------------------------------------------------------------

    public function index(){
        $this->_loaddata_user('front-end', 'read');
        $this->data['pages'] = 'Posts';
        $this->data['all'] = $this->post->get_many(array('where' => array('public'=>1)));
        $this->data['content'] = $this->load->view('front/posts', $this->data, true);
        $this->load->view('front/template', $this->data);
    }

    public function permalink($id){
        $this->data['post'] = $this->post->get(array('where' => array('permalink'=>$id)));
        $this->data['pages'] = $this->data['post']->title;
        $this->_loaddata_user('front-end', 'read');
        $this->data['featured'] = $this->post->get_many(array(
            'where' => array(
                'featured' => 1,
                'nodes.status' => 'published',
                'public' => 1
            ), 'limit' => 5)
        );
        if(!$this->data['post'])
            redirect(base_url('not_found'));
        if((!$this->data['post']->public || $this->data['post']->status != 'published') && $this->data['post']->user_id != $this->session->userdata('user_id'))
            redirect(base_url('no_permission'));
        $this->data['editable'] = $this->data['post']->user_id == $this->session->userdata('user_id') ||
            $this->user->check_permission($this->session->userdata('role_id'), 'post', 'update-all-delete-all');
        $this->data['content'] = $this->load->view($this->data['post']->view, $this->data, true);
        $this->load->view('front/template', $this->data);
    }

    public function manage($type){
        $this->_loaddata('post', 'read');
        $type = str_replace('-', ' ', $type);
        if($this->user->check_permission($this->session->userdata('role_id'), 'post', 'read-all'))
            $this->data['all'] = $this->post->get_many(array('where' => array('post_type'=>$type)));
        else
            $this->data['all'] = $this->post->get_many(array('where' => array('post_type'=>$type, 'user_id'=>$this->session->userdata('user_id'))));
        $this->data['post_type'] = $this->post->get_post_type(array('post_type'=>$type));
        $this->data['pages'] = isset($this->data['all'][0]->post_type)?$this->data['all'][0]->post_type:$type;
        $this->data['upload'] = $this->load->view('modal/upload', array('types' => 'gif|jpg|jpeg|png', 'path' => 'assets/images/posts'), true);
        $this->data['content'] = $this->load->view('posts', $this->data, true);
        $this->load->view('template', $this->data);
    }

    public function add(){
        $array = $this->input->post(NULL);
        if($array['permalink'] != '')
            $array['uri'] = 'permalink/'.$array['permalink'];
        else
            unset($array['permalink']);
        $stat = $this->input->post('status')=='Publish'?'published':'draft';
        $this->post->add(array_merge($array,
            array(
                'cover'=>create_uri($array['cover']),
                'thumbnail'=>create_uri($array['thumbnail']),
                'commentable'=>$array['commentable'],
                'user_id' => $this->session->userdata['user_id'],
                'status' => $stat,
            )
        ));
        redirect(base_url($array['uri']));
    }

    public function edit($id){
        $this->_loaddata('post', 'update');
        $data = $this->input->post(NULL);
        $post = $this->post->get(array('where' => $id));
        if($this->user->check_permission($this->session->userdata('role_id'), 'post', 'update-all')
            || $post->user_id == $this->session->userdata('user_id')){
            if($data['permalink'] != '')
                $data['uri'] = 'permalink/'.$data['permalink'];
            else{
                unset($data['permalink']);
                $data['uri'] = 'posts/view/'.$id;
            }
            $data['status'] = $this->input->post('status')=='Publish'?'published':'draft';
            $this->post->edit($id, array_merge($data,
                array('commentable'=>$data['commentable'])));
            redirect(base_url($data['uri']));
        } else {
            echo "You don't have enough permission to do that!";
        }
    }

    public function delete($id){
        $this->_loaddata('post', 'delete');
        $post = $this->post->get(array('where' => $id));
        if($this->user->check_permission($this->session->userdata('role_id'), 'post', 'delete-all')
            || $post->user_id == $this->session->userdata('user_id')){
            $this->post->delete(array('post_id' => $id));
            $type = str_replace('-', ' ', $post->post_type);
            redirect(base_url('posts/manage/'.$type));
        } else {
            echo "You don't have enough permission to do that!";
        }
    }

    public function get_ajax($id){
        $this->db->join('tags', 'tags.post_id = posts.post_id', 'left');
        echo json_encode($this->post->get(array('where' => $id, 'group' => 'posts.post_id',
            'select' => array("title, permalink, content, preview, posts.commentable, public, status,
            GROUP_CONCAT(`tags`.`tag` SEPARATOR ', ') as tags, thumbnail, cover, featured, note"))));
    }
}