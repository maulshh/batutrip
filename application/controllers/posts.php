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
//    -----------------------------------------------------------------------------------------------

    public function index(){
        $this->_loaddata('front-end', 'read');
        $this->data['pages'] = 'Posts';
        $this->data['all'] = $this->post->get_many(array('where' => array('public'=>1)));
        $this->data['content'] = $this->load->view('front/posts', $this->data, true);
        $this->load->view('front/template', $this->data);
    }

    public function permalink($id){
        $this->_loaddata('front-end', 'read');
        $this->data['post'] = $this->post->get(array('where' => array('permalink'=>$id)));
        $this->data['pages'] = $this->data['post']->title;
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

    public function view($id){
        $this->_loaddata('front-end', 'read');
        $this->data['post'] = $this->post->get(array('where' => array('posts.post_id'=>$id)));
        $this->data['pages'] = $this->data['post']->title;
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
        $this->_loaddata('post', 'create');
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
            $this->post->edit($id, $data);
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

    public function cari($posttype, $query = ''){
        $this->_loaddata('front-end', 'read');
        $this->data['pages'] = 'Hasil Pencarian';
        $like = array('content' => $query);
        if($posttype == 'all')
            $where = array();
        else
            $where = array('post_type' => $posttype);
        $this->data['posts'] = $this->post->get_many(array(
                'where' => array_merge($where, array(
                    'nodes.status' => 'published',
                    'public' => 1
                )),
                'like'=>$like
                )
        );
        $this->data['featured'] = $this->post->get_many(array(
                'where' => array(
                    'featured' => 1,
                    'nodes.status' => 'published',
                    'public' => 1
                ), 'limit' => 5)
        );
        $this->data['content'] = $this->load->view('front/cari_post', $this->data, true);
        $this->load->view('front/template', $this->data);
    }

    public function get_ajax($id){
        echo json_encode($this->post->get(array('where' => $id, 'group' => 'posts.post_id',
            'select' => array("nodes.*, posts.*"))));
    }

    public function favs($id){
        if(!$this->post->fav($id)){
            $this->post->unfav($id);
        }
        redirect(base_url('posts/view/'.$id));
    }

    public function get_posts(){
        $data['table'] = 'posts';
        $data['primaryKey'] = 'post_id';
        $data['columns'] = array(
            array( 'db' => "`n`.`title`",
                'dt' => 0, 'field' => 'title', 'as'=>'title'),
            array( 'db' => '`p`.`preview`',
                'dt' => 1, 'field' => 'preview'),
            array( 'db' => '`u`.`username`',
                'dt' => 2, 'field' => 'username'),
            array( 'db' => "location",
                'dt' => 3, 'field' => 'location'),
            array( 'db' => '`p`.`coordinate`',
                'dt' => 4, 'field' => 'coordinate'),
            array( 'db' => "CONCAT_WS(',',`n`.`modified`,`n`.`created`)",
                'dt' => 5, 'field' => 'date', 'as'=>'date'),
            array( 'db' => "`n`.`status`",
                'dt' => 6, 'field' => 'status'),
            array( 'db' => "`u`.`uri`",
                'dt' => 7, 'field' => 'uri'),
            array( 'db' => "`n`.`uri`",
                'dt' => 8, 'field' => 'link', 'as'=>'link'),
            array( 'db' => "`p`.`post_id`",
                'dt' => 9, 'field' => 'post_id'),
            array( 'db' => "`p`.`public`",
                'dt' => 10, 'field' => 'public')
        );
        $data['joinQuery'] = 'FROM `posts` AS `p` JOIN `post_types` AS `pt` ON (`p`.`post_type_id` = `pt`.`post_type_id`) JOIN `nodes` AS `n` ON (`p`.`post_id` = `n`.`node_id`) JOIN `users` AS `u` ON (`u`.`user_id` = `n`.`user_id`)';
        if($this->_loaddata('post', 'access-all'))
            $data['extraWhere'] = "`n`.`module` = 'post' AND `pt`.`post_type_id` = '".$_GET['post']."' GROUP BY `p`.`post_id`";
        else
            $data['extraWhere'] = "`n`.`module` = 'post' AND `pt`.`post_type_id` = '".$_GET['post']."' GROUP BY `p`.`post_id` AND n.user_id = ".$this->session->userdata('user_id');
        $this->load->view('datatable/base', $data);
    }
}