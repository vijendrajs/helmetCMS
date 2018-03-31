<?php

class Contact_Us extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->admin = $this->session->userdata('is_admin_login');
        if (empty($this->admin)) {
            redirect('admin/login');
        }
    }

//    function index() {
//
//        $data = array();
// $data['active'] = 14;
//        $data['list'] = $this->db->get('contact_us')->result_array();
//        $this->load->view('admin/contact_us_list', $data);
//    }

    function save() {
        $data = array();
        $data['active'] = 14;


        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_rules('address', 'address', 'required|trim|xss_clean');
        $this->form_validation->set_rules('phone_no', 'phone_no', 'required|trim|xss_clean');
        $this->form_validation->set_rules('email', 'email', 'required|trim|xss_clean|valid_email');
        $this->form_validation->set_rules('text', 'text', 'required|trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/contact_us_form", $data);
        } else {
            $insert = array('address', 'phone_no', 'email','text');
            foreach ($insert as $val) {
                $data1[$val] = $_POST[$val];
            }
            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $id = $_POST['id'];
                $this->db->where('id', $id);
                $this->db->update('contact_us', $data1);
            } else {
                $this->db->insert('contact_us', $data1);
            }
            $this->session->set_flashdata('msg', 'Data Saved');
            redirect("admin/contact_us/edit");
        }
    }

    function edit() {

        $data = array();
        $data['active'] = 14;
        $data['edit'] = (array) $this->db->where('id', 3)->get('contact_us')->row();
        $this->load->view('admin/contact_us_form', $data);
    }

    function delete() {
        $id = $_GET['id'];
        $data = array();
        $data['active'] = 13;
        $data = $this->db->where('id', $id);
        $this->db->delete('contact_us');

        $this->session->set_flashdata('msg', 'data has been deleted');
        redirect('admin/contact_us');
    }

}

?>