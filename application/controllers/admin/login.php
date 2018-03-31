<?php

class Login extends CI_Controller {

    function _construct() {
        parent::_construct();
    }

    function index() {


        $this->admin = $this->session->userdata('is_admin_login');
        if (!empty($this->admin)) {
            redirect('admin/dashboard');
        }
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|xss_clean|required');

        if ($this->form_validation->run() == true) {
            $login = (array) $this->db// array casting
                            ->where('email', $_POST['email'])
                            ->where('password', $_POST['password'])
                            ->get('customer1')->row(); //it produces object  so we have to convert  IT into array by casting
            if ($login) {
                $this->session->set_userdata('is_admin_login', $login);
                redirect('admin/dashboard');
            } else {

                $data['error'] = "Authenticatio failed";
                $this->load->view('admin/login', $data);
            }
        } else {
            $data['error'] = validation_errors();
            $this->load->view('admin/login', $data);
        }
    }

    function logout() {

        $this->session->unset_userdata('is_admin_login');
        redirect('admin/login');
    }

}

?>