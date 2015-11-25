<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends B_Model {

    public function __construct(){
        parent::__construct();
        $this->set_table('users');
    }

    public function auth($email, $pass){
        $this->db->join('roles', "roles.role_id = users.role_id");
        $this->db->where(array('pass' => md5($pass), 'status' => 'active', 'username' => $email));
        $this->db->or_where(array('email' => $email));
        return parent::get(array('pass' => md5($pass), 'status' => 'active'));
    }

    public function check_permission($role, $module, $permission){
        $data['where'] = array('roles.role_id' => $role,
            'module' => $module);
        $this->db->join('roles', 'roles.role_id = role_permissions.role_id');
        $this->db->like('permission','-'.$permission.'-');
        $res = false;
        if(parent::get($data, 'role_permissions')){
            $this->db->join('nodes', 'nodes.node_id = menus.menu_id');
            $res['site_menus'] = parent::get_many(
                array(
                    'where' => array('module_target'=>'site-menu'),
                    'like' => array('role_id'=>"-$role-")
                ), 'menus');
            $this->db->join('nodes', 'nodes.node_id = menus.menu_id');
            $res['menus'] = parent::get_many(
                array(
                    'where' => array('module_target'=>'front-end'),
                    'like' => array('role_id'=>"-$role-")
                ), 'menus');
            $this->db->join('nodes', 'nodes.node_id = menus.menu_id');
            $res['back_menus'] = parent::get_many(
                array(
                    'where' => array('module_target'=>'admin-page'),
                    'like' => array('role_id'=>"-$role-")
                ), 'menus');
            $res['sites'] = parent::get(
                array(
                    'where' => array('primary'=>'1')
                ), 'sites');
        }
        return $res;
    }

    public function logout(){

    }

    public function get($data){ //overrides parent method get
        if($data['where'] && !is_array($data['where']))
            $data['where'] = array('user_id' => $data['where']); // when where is not false and only a single id
        $this->db->join('roles', 'roles.role_id = users.role_id');
        return parent::get($data);
    }

    public function get_many($data){ //overrides parent method get_many
        $this->db->join('roles', 'roles.role_id = users.role_id');
        return parent::get_many($data);
    }

    public function edit($where, $data){ //overrides parent method set
        if($where && !is_array($where))
            $where = array('user_id' => $where);
        $this->db->join('roles', 'roles.role_id = users.role_id');
        return parent::edit($where, $data);
    }
}