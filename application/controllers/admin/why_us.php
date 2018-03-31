<?php

class why_us extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->admin = $this->session->userdata('is_admin_login');
        if (empty($this->admin)) {
            redirect('admin/login');
        }
    }

    function save() {
        $data = array();
        $data['active'] = 3;


        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_rules('description', 'Description', 'required|trim|xss_clean');


        if ($this->form_validation->run() == false) {
            $this->load->view("admin/why_us_form", $data);
        } else {
            $insert = array('description');
            foreach ($insert as $val) {
                $data1[$val] = $_POST[$val];
            }

            //  $data1['images'] = json_encode($_POST['temp_file']);
            // $data1['images'] = $_POST['temp_file'];
            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $id = $_POST['id'];
                $this->db->where('id', $id);
                $this->db->update('why_us', $data1);
            } else {
                $this->db->insert('why_us', $data1);
            }
            $this->session->set_flashdata('msg', 'Data Saved');
            redirect("admin/why_us/edit");
        }
    }

    function edit() {
        $data = array();
        $data['active'] = 3;
        $data['edit'] = (array) $this->db->where('id', 1)->get('why_us')->row();

        $this->load->view('admin/why_us_form', $data);
    }

}

?>