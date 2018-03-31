<?php

class current_openings extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->admin = $this->session->userdata('is_admin_login');
        if (empty($this->admin)) {
            redirect('admin/login');
        }
    }

    function index() {

        $data = array();
        $data['active'] = 3;
        $data['list'] = $this->db->get('current_openings')->result_array();
        $this->load->view('admin/current_openings_list', $data);
    }

    function save() {
        $data = array();
        $data['active'] = 3;


        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_rules('title', 'subject', 'required|trim|xss_clean');
         $this->form_validation->set_rules('description', 'Dsecription', 'trim|xss_clean');
         $this->form_validation->set_rules('status', 'Status', 'trim|xss_clean');
         $this->form_validation->set_rules('salary', 'Salary', 'trim|xss_clean');
         $this->form_validation->set_rules('profile', 'Profile', 'trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/current_openings_form", $data);
        } else {
            $insert = array('title','description','status','salary','profile');
            foreach ($insert as $val) {
                $data1[$val] = $_POST[$val];
            }

            //  $data1['images'] = json_encode($_POST['temp_file']);

           // $data1['images'] = $_POST['temp_file'];
            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $id = $_POST['id'];
                $this->db->where('id', $id);
                $this->db->update('current_openings', $data1);
            } else {
                $this->db->insert('current_openings', $data1);
            }
            $this->session->set_flashdata('msg', 'Data Saved');
            redirect("admin/current_openings");
        }
    }

    function edit() {
        $id = $_GET['id'];
        $data = array();
        $data['active'] = 3;
        $data['edit'] = (array) $this->db->where('id', $id)->get('current_openings')->row();
        $this->load->view('admin/current_openings_form', $data);
    }

    function delete() {
        $id = $_GET['id'];
        $data = array();
        $data['active'] = 3;
        $data = $this->db->where('id', $id);
        $this->db->delete('current_openings');

        $this->session->set_flashdata('msg', 'data has been deleted');
        redirect('admin/current_openings');
    }

}

?>