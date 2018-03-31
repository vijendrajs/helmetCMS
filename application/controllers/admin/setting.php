<?php

class Setting extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->admin = $this->session->userdata('is_admin_login');
        if (empty($this->admin)) {
            redirect('admin/login');
        }
    }

    function index() {

        $data = array();
        $data['active'] = 17;
        $data['list'] = $this->db->get('setting')->result_array();
        $this->load->view('admin/setting_list', $data);
    }

    function save() {
        $data = array();
        $data['active'] = 17;


        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_rules('facebook', 'facebook', 'trim|xss_clean');
        $this->form_validation->set_rules('google', 'google', 'trim|xss_clean');
        $this->form_validation->set_rules('twitter', 'twitter', 'trim|xss_clean');
        $this->form_validation->set_rules('linkedin', 'linkedin', 'trim|xss_clean');
        $this->form_validation->set_rules('youtube', 'youtube', 'trim|xss_clean');
        $this->form_validation->set_rules('whatsapp', 'whatsapp', 'trim|xss_clean');



        if ($this->form_validation->run() == false) {
            $this->load->view("admin/setting_form", $data);
        } else {
            $insert = array('facebook', 'google', 'twitter', 'linkedin', 'youtube','whatsapp');
            foreach ($insert as $val) {
                $data1[$val] = $_POST[$val];
            }




            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $id = $_POST['id'];
                $this->db->where('id', $id);
                $this->db->update('setting', $data1);
            } else {
                $this->db->insert('setting', $data1);
            }
            $this->session->set_flashdata('msg', 'Data Saved');
            redirect("admin/setting/edit");
        }
    }

    function edit() {
        $data = array();
        $data['active'] = 17;
        $data['edit'] = (array) $this->db->where('id', 1)->get('setting')->row();
        $this->load->view('admin/setting_form', $data);
    }

    function delete() {
        $id = $_GET['id'];
        $data = array();
        $data['active'] = 17;
        $data = $this->db->where('id', $id);
        $this->db->delete('setting');

        $this->session->set_flashdata('msg', 'data has been deleted');
        redirect('admin/setting');
    }

}

?>