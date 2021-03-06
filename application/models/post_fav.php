<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post_fav extends B_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mnodes');
        $this->set_table('comments');
    }

    public function get($where = false, $like = false, $order = false, $group = false, $select = false)
    { //overrides parent method get
        if ($where && !is_array($where))
            $where = array('node_id' => $where); // when where is not false and only a single id
        $this->db->join('nodes', 'nodes.node_id = comments.comment_id');
        $this->db->join('users', 'nodes.user_id = users.user_id');
        return parent::get(array_merge(array('module' => 'comment'), $where), $like, $order, $group, $select!=''?$select:'users.uri as uri_user, users.*, nodes.*, comments.*');
    }

    public function get_many($where = false, $like = false, $order = false, $group = false, $select = false, $limit = false, $array = false)
    { //overrides parent method get_many
        $this->db->join('nodes', 'nodes.node_id = comments.comment_id');
        $this->db->join('users', 'nodes.user_id = users.user_id');
        return parent::get_many(array_merge(array('module' => 'comment'), $where), $like, $order, $group, $select!=''?$select:'users.uri as uri_user, users.*, nodes.*, comments.*', $limit, $array);
    }

    public function get_all()
    {
        return $this->get_many(NULL);
    }

    public function add($data)
    { //overrides parent method add
        $data = array_merge($data, array('module' => 'comment'));
        $data = $this->mnodes->add($data);
        parent::add($data);
        $this->edit(array('comment_id' => $data['comment_id'], 'uri' => ''), array('uri' => 'comments/view/' . $data['comment_id']));
        return $data['comment_id'];
    }

    public function edit($where, $data)
    { //overrides parent method set
        if ($where && !is_array($where))
            $where = array('node_id' => $where);
        if (isset($where['comment_id'])) {
            $where['node_id'] = $where['comment_id'];
            unset($where['comment_id']);
        }
        $data = $this->mnodes->edit($where, $data);

        if ($data != array()) {
            if (isset($where['node_id'])) {
                $where['comment_id'] = $where['node_id'];
                unset($where['node_id']);
            }
            $this->db->join('nodes', 'nodes.node_id = comments.comment_id');
            return parent::edit($where, $data);
        }
        return true;
    }
}
