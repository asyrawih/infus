<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Monitor extends MY_Controller
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

        return $this->render('monitor/index');

    }
}
        
    /* End of file  Monitor.php */
