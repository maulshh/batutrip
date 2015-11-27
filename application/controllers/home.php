<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends B_Controller {

    public function __construct() {
        parent::__construct();
        $this->_loadmodel(array('user', 'post', 'trip'));
    }

    public function _loaddata($module, $permission, $bol=false){
        if(!($this->data = $this->user->check_permission($this->session->userdata('role_id'), $module, $permission))){
            if($bol) return false;
            redirect(base_url('no_permission'));
        }
        return true;
	}
	
    public function index(){
        $this->_loaddata('front-end', 'read');
        $this->data['pages'] = 'Home';
        $this->data['cul_post'] = $this->post->get_many(array('where' => array('posts.post_type_id' => '7', 'nodes.status' => 'published'),
            'group' => 'nodes.created', 'limit' => 5));
        $this->data['event_post'] = $this->post->get_many(array('where' => array('posts.post_type_id' => '3', 'nodes.status' => 'published'),
            'group' => 'nodes.created', 'limit' => 4));
        $this->data['dest_post'] = $this->post->get_many(array('where' => array('posts.post_type_id' => '2', 'nodes.status' => 'published'),
            'group' => 'nodes.created', 'limit' => 5));
        $this->data['content'] = $this->load->view('front/home', $this->data, true);
        $this->data['footer'] = $this->load->view('front/footer', array('side_menu' => $this->data['site_menus']), true);
        $this->load->view('front/template', $this->data);
    }

    public function read_post(){
        $this->_loaddata('front-end', 'read');
        $this->data['content'] = $this->load->view('front/view_post', '', true);
        $this->load->view('front/template', $this->data);
    }
}