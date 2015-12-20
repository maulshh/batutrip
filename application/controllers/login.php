<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 *
 */
class Login extends B_Controller {

    public function __construct() {
        parent::__construct();
        $this->_loadmodel(array('user'));
    }

    public function _loaddata($module, $permission, $bol=false){
        if(!($this->data = $this->user->check_permission($this->session->userdata('role_id'), $module, $permission))){
            if($bol) return false;
            redirect(base_url('no_permission'));
        }
        return true;
	}

    public function index(){
		$this->_loaddata('login', 'read');
        if(!$error = $this->input->get('error'))
        	$error = '';        
        else if($_GET['error'] == 1)
	       	$error = '<code>Password atau username tidak valid.</code><br><br>';
        else
	       	$error = '<code>Anda tidak punya hak akses untuk halaman tersebut.</code><br><br>';
        $this->data['notice'] = $error;
        $this->load->view('login', $this->data);
    }

    public function login_auth($bol = false) {
        if(!$this->_loaddata('login', 'read', $bol)){
            echo "Anda telah login!";
            return;
        }
        $usr = $this->input->post('email');
        $pass = $this->input->post('pass');
        $query = $this->user->auth($usr, $pass);
        if($query) {
            $arryauser = array(
                'user_id'=>$query->user_id,
                'role_id' => $query->role_id,
                'role_name' => $query->role_name,
                'username' => $query->username,
                'pict' => $query->pict,
                'name' => $query->name);
            $this->session->set_userdata($arryauser);
            if($bol) {
                echo "Anda telah masuk kedalam sistem<br><br>";
                return;
            }
            redirect(base_url());
        }
        if($bol){
            echo "<code>Password atau username tidak valid.</code><br><br>";
            return;
        }
        redirect(base_url('login?error=1'));
    }

    public function signup()
    {
        $this->_loaddata('login', 'read');
        $data['notice'] = '';
        if ($email = $this->input->post('email')) {
            $this->data["data"] = $this->input->post(NULL);
            $name = $this->input->post("username");
            $pass = $this->input->post('password');
            $correct = true;

            $data['notice'] = 'Terdapat kesalahan pada input anda:';
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //invalid email
                $data['notice'] .= '<br><code>Alamat email tidak valid!</code>';
                $correct = false;
            }
            if ($this->musers->get(array('email' => $email))) {
                //invalid email
                $data['notice'] .= '<br><code>Alamat email telah digunakan!</code>';
                $correct = false;
            }
            if ($email != $this->input->post('re_email')) {
                $data['notice'] .= '<br><code>Konfirmasi email tidak sesuai!</code>';
                $correct = false;
            }
            if (empty($name)) {
                //name empty
                $data['notice'] .= '<br><code>Nama Tidak boleh kosong!</code>';
                $correct = false;
            }
            if ($this->musers->get(array('username' => $name))) {
                $data['notice'] .= '<br><code>NIM telah terdaftar!</code>';
                $correct = false;
            }
            if ($pass != $this->input->post('re_password')) {
                $data['notice'] .= '<br><code>Konfirmasi password tidak sesuai!</code>';
                $correct = false;
            }
            if (strlen($pass) < 8) {
                $data['notice'] .= '<br><code>Password terlalu pendek! Minimal menggunakan 8 karakter.</code>';
                $correct = false;
            }
            if (!preg_match("#[0-9]+#", $pass)) {
                $data['notice'] .= '<br><code>Password harus mengandung angka!</code>';
                $correct = false;
            }
            if (!preg_match("#[a-z]+#", $pass)) {
                $data['notice'] .= '<br><code>Password harus mengandung minimal satu huruf kecil!</code>';
                $correct = false;
            }
            if (!preg_match("#[A-Z]+#", $pass)) {
                $data['notice'] .= '<br><code>Password harus mengandung minimal satu huruf besar!</code>';
                $correct = false;
            }
            if ($correct) {
                //all valid!
                $data['notice'] = '<code class="text-green">Akun anda telah dibuat, <br /> lakukan verifikasi dengan link yang telah dikirimkan pada email anda.</code>';
                $hash = md5(rand(0, 10000));
                if ($this->musers->add(array(
                    'username' => $name,
                    'email' => $email,
                    'name' => $this->input->post('name'),
                    'pass' => md5($pass),
                    'status' => 'active',
                    'uri' => 'users/profile/' . $name,
                    'pict' => 'assets/images/users/default.jpg',
                    'role_id' => '5'
                ))
                ) {
                    $to = $email; // Send email to our user
                    $subject = 'Verifikasi Registrasi ' . $this->data['sites']->site_title; // Give the email a subject
                    $message = '

Anda telah terdaftar pada situs pembelajaran ' . $this->data['sites']->site_title . '.
Akun anda telah dibuat, klik tautan dibawah ini untuk verifikasi email dan mengaktifkan akun anda:
' .
                        base_url('login/verify?email=' . $email . '&hash=' . $hash) . '
_____________________________________________________________________
Jika anda tidak melakukan pendaftaran pada situs ' . $this->data['sites']->site_url . ' harap hiraukan email ini.'; // Our message above including the link

                    $headers = 'From:' . $this->data['sites']->site_title . ' noreply@' . end(explode('/', $this->data['sites']->site_url)) . "\r\n"; // Set from headers
                    mail($to, $subject, $message, $headers); // Send our email
                    echo "<script> 	setTimeout(function(){window.location = '" . base_url("login?r=r") . "'}, 4000);</script>";
                }
            }
        }
        $this->data['notice'] = $data['notice'];
        $this->load->view('register', $this->data);
    }
}
?>

