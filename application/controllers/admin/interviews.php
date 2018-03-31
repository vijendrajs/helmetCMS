<?php

class interviews extends CI_controller {

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
        $data['list'] = $this->db->get('interviews')->result_array();
        $this->load->view('admin/interviews_list', $data);
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
         $this->form_validation->set_rules('date', 'Date', 'trim|xss_clean');
          $this->form_validation->set_rules('time', 'Time', 'trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/interviews_form", $data);
        } else {
            $insert = array('title', 'description', 'status','profile','salary','time');
            foreach ($insert as $val) {
                $data1[$val] = $_POST[$val];
            }
            $data1['date']= date('Y-m-d', strtotime($_POST['date']));

          // $data1['images'] = json_encode($_POST['temp_file']);
            // $data1['images'] = $_POST['temp_file'];
            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $id = $_POST['id'];
                $this->db->where('id', $id);
                $this->db->update('interviews', $data1);
            } else {
                $this->db->insert('interviews', $data1);
            }
            $this->session->set_flashdata('msg', 'Data Saved');
            redirect("admin/interviews");
        }
    }

    function edit() {
        $id = $_GET['id'];
        $data = array();
        $data['active'] = 3;
        $data['edit'] = (array) $this->db->where('id', $id)->get('interviews')->row();
        $this->load->view('admin/interviews_form', $data);
    }

    function delete() {
        $id = $_GET['id'];
        $data = array();
        $data['active'] = 3;
        $data = $this->db->where('id', $id);
        $this->db->delete('interviews');

        $this->session->set_flashdata('msg', 'data has been deleted');
        redirect('admin/interviews');
    }

}

?>