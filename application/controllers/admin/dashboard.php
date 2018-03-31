<?php

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->admin = $this->session->userdata('is_admin_login');
        if (empty($this->admin)) {
            redirect('admin/login');
        }
    }

    function index() {
        $data = array();
        $data['active'] = 15;
        $data['user'] = $this->session->userdata('user_logged_in');
        $this->load->view("admin/dashboard", $data);
    }

}

?>