<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class B_Controller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $role = $this->session->userdata('role_id');
        if(empty($role)){
        	$this->session->set_userdata(array('role_id' => '4', 'trip_id' => 0));
        }
        date_default_timezone_set("Asia/Jakarta");
    }

    public function _formatdate($val){
        if(is_int($val)){
            return date($this->data['sites']->date_format, $val);
        } else{
            if(substr($this->data['sites']->date_format, 0, 1) == 'm'){
                return mktime(23,59,59, substr($val, 0, 2), substr($val, 3, 2), substr($val, 6, 4));
            } else {
                return mktime(23,59,59, substr($val, 3, 2), substr($val, 0, 2), substr($val, 6, 4));
            }
        }
    }

	public function _loadmodel($models){
		foreach($models as $model)
			$this->load->model($model);	
	}

    public abstract function _loaddata($module, $permission, $bol);
}