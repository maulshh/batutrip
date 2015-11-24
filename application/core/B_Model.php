<?php
class B_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function set_table($t){
        $this->table = $t;
    }

    public function add($data, $table = false) {
        //do insert data into database
        if($this->db->insert($table?$table:$this->table, $data)){
            if($id = $this->db->insert_id())
                return $id;
            return true;
        }
        return false;
    }

    public function get($data = false, $table = false) {
        //do get data into database
        if(isset($data['where']))
            $this->db->where($data['where']);
        if(isset($data['like']))
            $this->db->like($data['like']);
        if(isset($data['order']))
            $this->db->order_by($data['order']);
        if(isset($data['group']))
            $this->db->group_by($data['group']);
        if(isset($data['limit'])){
            if( is_array($data['limit']))
                $this->db->limit($data['limit'][0], $data['limit'][1]);
            else if($data['limit'])
                $this->db->limit($data['limit']);
        }
        if(isset($data['select'])){
            if(is_array($data['select']))
                $this->db->select($data['select'][0], $data['select'][1]);
            else if($data['select'])
                $this->db->select($data['select']);
        }
        $query = $this->db->get($table?$table:$this->table);
        if($query)
            return $query->row();
        else
            return false;
    }

    public function get_many($data = false, $table = false) {
        //do get data into database
        if(isset($data['where']))
            $this->db->where($data['where']);
        if(isset($data['like']))
            $this->db->like($data['like']);
        if(isset($data['order']))
            $this->db->order_by($data['order']);
        if(isset($data['group']))
            $this->db->group_by($data['group']);
        if(isset($data['limit'])){
            if( is_array($data['limit']))
                $this->db->limit($data['limit'][0], $data['limit'][1]);
            else if($data['limit'])
                $this->db->limit($data['limit']);
        }
        if(isset($data['select'])){
            if(is_array($data['select']))
                $this->db->select($data['select'][0], $data['select'][1]);
            else if($data['select'])
                $this->db->select($data['select']);
        }
        $query = $this->db->get($table?$table:$this->table);
        if($query){
            if(isset($data['array']))
                return $query->result_array();
            else
                return $query->result();
        } else
            return false;
    }

    public function edit($where, $data, $table = false) {
        //do update data into database
        if ($where) {
            $this->db->where($where);
            return $this->db->update($table?$table:$this->table, $data);
        }
    }

    public function delete($where, $table = false) {
        //do delete data from database
        return $this->db->delete($table?$table:$this->table, $where);
    }
}