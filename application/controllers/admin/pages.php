<?php

class Pages extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->admin = $this->session->userdata('is_admin_login');
        if (empty($this->admin)) {
            redirect('admin/login');
        }
    }

    function index() {

        $data = array();
 $data['active'] = 13;
        $data['list'] = $this->db->get('pages')->result_array();
        $this->load->view('admin/pages_list', $data);
    }

    function save() {
        $data = array();
 $data['active'] = 13;
        
        
        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_rules('title', 'title', 'required|trim|xss_clean');
        $this->form_validation->set_rules('description', 'description', 'trim|xss_clean');
       
        if ($this->form_validation->run() == false) {
            $this->load->view("admin/pages_form", $data);
        } else {
            $insert = array('title', 'description');
            foreach ($insert as $val) {
                $data1[$val] = $_POST[$val];
            }
           
            


            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $id = $_POST['id'];
                $this->db->where('id', $id);
                $this->db->update('pages', $data1);
            } else {
                $this->db->insert('pages', $data1);
            }
            $this->session->set_flashdata('msg', 'Data Saved');
            redirect("admin/pages");
        }
    }

    function edit() {
        $id = $_GET['id'];
        $data = array();
 $data['active'] = 13;

        $data['edit'] = (array) $this->db->where('id', $id)->get('pages')->row();
        

        $this->load->view('admin/pages_form', $data);
    }

    function delete() {
        $id = $_GET['id'];
        $data = array();
 $data['active'] = 13;
        $data = $this->db->where('id', $id);
        $this->db->delete('pages');

        $this->session->set_flashdata('msg', 'data has been deleted');
        redirect('admin/pages');
    }
       
}

?>