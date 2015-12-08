<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trips extends B_Controller {

    public function __construct() {
        parent::__construct();
        $this->_loadmodel(array('user', 'trip', 'post'));
    }

    public function _loaddata($module, $permission, $bol=false){
        if(!($this->data = $this->user->check_permission($this->session->userdata('role_id'), $module, $permission))){
            if($bol) return false;
            redirect(base_url('login?error=k'));
        }
        return true;
    }

    public function index(){
        $this->_loaddata('trips', 'read-all');
        $this->data['pages'] = 'Trips';
        $this->data['all'] = $this->trip->get_many(array('where' => array()));
        $this->data['content'] = $this->load->view('trip', $this->data, true);
        $this->load->view('template', $this->data);
    }

    public function history(){
        $this->_loaddata('front-end', 'read');
        $this->data['pages'] = 'Riwayat Trip';
        $this->data['all'] = $this->trip->get_many(array('where' => array('nodes.user_id' => $this->session->userdata('user_id'))));
        $this->data['featured'] = $this->post->get_many(array(
                'where' => array(
                    'featured' => 1,
                    'nodes.status' => 'published',
                    'public' => 1
                ), 'limit' => 5)
        );
        $this->data['content'] = $this->load->view('front/daftar_trip', $this->data, true);
        $this->load->view('front/template', $this->data);
    }

    public function view($id = false){
        $this->_loaddata('front-end', 'read');
        $this->data['pages'] = 'My Trip';
        if(!$id || !($id = $this->session->userdata('trip_id'))){
            if($this->session->userdata('role_id') != 4){
                redirect(base_url('trips/history'));
            } else {
                $this->data['content'] = '<p>Anda belum memiliki rencana perjalanan, silahkan menambahkan destinasi untuk merencanakan trip anda!</p>';
            }
        } else {
            $this->data['trip'] = $this->trip->get($id);
            $this->data['posts'] = $this->post->get_many(array(
                'where' => array('trip_id' => $id)
            ));
            $this->data['pages'] = $this->data['trip']->title;
            if(!$this->data['trip'])
                redirect(base_url('not_found'));
            if($this->data['trip']->status != 'published' && $this->data['trip']->user_id != $this->session->userdata('user_id'))
                redirect(base_url('no_permission'));
            $this->data['loginmodal'] = $this->load->view('modal/login', array('sites'=>$this->data['sites']), true);
            $this->data['content'] = $this->load->view('front/trip', $this->data, true);
        }
        $this->load->view('front/template', $this->data);
    }

    public function add_post($id){
        $this->_loaddata('trip', 'create');
        if(!$this->session->userdata('trip_id')){ //create trip
            //jika user msih belum punya trip
            $trip_id = $this->trip->create(array(
                'user_id' => $this->session->userdata('user_id'),
                'title' => 'My Trip',
                'content' => '',
                'status' => 'draft-anon'
            ));
            $this->session->set_userdata(array('trip_id' => $trip_id));
        }
        $this->trip->add_post(
            array(
                'trip_id' => $this->session->userdata('trip_id'),
                'post_id' => $id
        ));
        redirect(base_url('[posts/view/'.$id));
    }

    public function checkout($id){
        $this->_loaddata('trip', 'update');
        $data = $this->input->post(NULL);
        $stat = $this->input->post('status')=='Publish'?'published':'saved';
        $this->trip->edit($id, array_merge($data,array(
            'status' => $stat
        )));
        redirect(base_url('trips/view/'.$id));
    }

    public function delete_post($id){
        $this->_loaddata('trip', 'delete');
        $this->trip->delete_post(array('post_id' => $id, 'trip_id' => $this->session->userdata('trip_id')));
        redirect(base_url('trips/view'));
    }
}