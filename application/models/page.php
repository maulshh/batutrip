<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends B_Model {

    public function __construct(){
        parent::__construct();
        $this->set_table('pages');
    }

    public function get($data){ //overrides parent method get
        if($data['where'] && !is_array($data['where']))
            $data['where'] = array('nodes.node_id' => $data['where']); // when where is not false and only a single id
        $this->db->join('nodes', 'nodes.node_id = pages.page_id');
        $this->db->join('users', 'users.user_id = nodes.user_id');
        $data['where'] = array_merge(array('module' => 'page'), $data['where']);
        $data['select'] = "users.*, pages.*, nodes.*";
        return parent::get($data);
    }
}

