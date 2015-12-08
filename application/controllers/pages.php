<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends B_Controller {

    public function __construct() {
        parent::__construct();
        $this->_loadmodel(array('user', 'post', 'page'));
    }

    public function _loaddata($module, $permission, $bol=false){
        if(!($this->data = $this->user->check_permission($this->session->userdata('role_id'), $module, $permission))){
            if($bol) return false;
//            redirect(base_url('no_permission'));
        }
        return true;
    }

    public function view($id){
        $this->_loaddata('front-end', 'read');
        $this->data['page'] = $this->page->get(array('where' => array('nodes.uri'=>$id)));
        $this->data['pages'] = $this->data['page']->note;
//        print_r($this->data['page']);
        if(!$this->data['page'])
            redirect(base_url('not-found'));
        if($this->data['page']->status != 'published' && $this->data['page']->user_id != $this->session->userdata('user_id'))
            redirect(base_url('no_permission'));
        if($this->data['page']->post_category != NULL){
            $this->data['posts'] = $this->post->get_many(array(
                'where' => array(
                    'posts.post_type_id' => $this->data['page']->post_category,
                    'nodes.status' => 'published',
                    'public' => 1
                ))
            );
            $this->data['featured'] = $this->post->get_many(array(
                'where' => array(
                    'featured' => 1,
                    'nodes.status' => 'published',
                    'public' => 1
                ), 'limit' => 5)
            );
        }
        $this->data['loginmodal'] = $this->load->view('modal/login', array('sites'=>$this->data['sites']), true);
        $this->data['content'] = $this->load->view($this->data['page']->view, $this->data, true);
        $this->load->view('front/template', $this->data);
    }

    public function get_ajax($id){
        echo json_encode($this->page->get(array('where' => $id,
            'select' => array("title, nodes.uri as uri, content, commentable, view, nodes.status as status, cover, post_category",false))));
    }
}