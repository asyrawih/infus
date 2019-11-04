<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{

    public function __construct()
    {

        parent::__construct() ; 
        $this->load->model('Login_model' , 'login');
        // if ($this->session->userdata('status') != "login") {
        //     redirect(base_url("dashboard"));
        // }

    }

    public function index()
    {
        return  $this->render('auth/login');
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->login->cek_login("tb_admin", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("dashboard"));
        } else {
            echo "Username dan password salah !";
        }
    }

    public function logout() { 
        session_destroy();
        redirect('auth');
    }
}
        
    /* End of file  auth.php */
