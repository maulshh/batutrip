<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends B_Controller {

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
		$this->_loaddata('admin-page', 'read');
		$this->data['pages'] = 'Dashboard';
		$this->data['content'] = $this->load->view('dashboard', $this->data, true);
		$this->load->view('template', $this->data);
	}
}