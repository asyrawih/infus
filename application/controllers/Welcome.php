<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("auth"));
        }
    }

    public function index()
    {

       
    }
}
        
    /* End of file  Welcome.php */
