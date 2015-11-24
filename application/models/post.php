<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends B_Model {

	public function __construct(){
        parent::__construct();
        $this->set_table('posts');
    }

    public function get($data){ //overrides parent method get
        if($data['where'] && !is_array($data['where']))
            $data['where'] = array('nodes.node_id' => $data['where']); // when where is not false and only a single id
        $this->db->join('nodes', 'nodes.node_id = posts.post_id');
        $this->db->join('users', 'users.user_id = nodes.user_id');
        $data['where'] = array_merge(array('module' => 'post'), $data['where']);
        return parent::get_many($data);}

    public function get_many($data){ //overrides parent method get_many
        $this->db->join('nodes', 'nodes.node_id = posts.post_id');
        $this->db->join('users', 'users.user_id = nodes.user_id');
        $data['where'] = array_merge(array('module' => 'post'), $data['where']);
        return parent::get_many($data);
    }

    public function create($data){ //overrides parent method add
        $data = array_merge($data, array('module' => 'post'));
        $array = array(
            'user_id' => $data['user_id'],
            'module' => $data['module'],
            'uri' => isset($data['uri'])?$data['uri']:'',
            'title' => $data['title'],
            'content' => $data['content'],
            'note' => isset($data['note'])?$data['note']:'',
            'status' => $data['status']
        );
        $data[$array['module'].'_id'] = parent::add($array, 'nodes');
        $data = array_diff_assoc($data, $array);
        parent::add($data);
        $this->edit(
            array('post_id'=>$data['post_id'], 'uri'=>''),
            array('uri'=>'posts/view/'.$data['post_id']),
            'nodes'
        );
        return $data['post_id'];
    }

    public function edit($where, $data){ //overrides parent method set
        if ($where && !is_array($where))
            $where = array('node_id' => $where);
        if (isset($where['post_id'])) {
            $where['node_id'] = $where['post_id'];
            unset($where['post_id']);
        }

        $array = array(
            'node_id' => '',
            'user_id' => '',
            'module' => '',
            'created' => '',
            'uri' => '',
            'title' => '',
            'content' => '',
            'note' => '',
            'status' => ''
        );
        $array = array_intersect_key($data, $array);
        $array['modified'] = date('Y-m-d H:i:s');
        parent::edit($where, $array, 'nodes');
        $data = array_diff_assoc($data, $array);

        if ($data != array()) {
            if (isset($where['node_id'])) {
                $where['post_id'] = $where['node_id'];
                unset($where['node_id']);
            }
            return parent::edit($where, $data);
        }
        return true;
    }

    public function fav($id, $minus=false){
        if($minus)
            $this->db->edit('rateup', 'rateup-1', false);
        else
            $this->db->edit('rateup', 'rateup+1', false);
        return parent::edit(array('post_id' => $id), array());
    }
}