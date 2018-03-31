<?php

class gallery_video extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->admin = $this->session->userdata('is_admin_login');
        if (empty($this->admin)) {
            redirect('admin/login');
        }
    }

    function index() {

        $data = array();
        $data['active'] = 9;
        $data['list'] = $this->db->get('video')->result_array();
        $this->load->view('admin/video_list', $data);
    }

    function save() {
        $data = array();
        $data['active'] = 9;


        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_rules('title', 'subject', 'required|trim|xss_clean');

        $this->form_validation->set_rules('url', 'URL', 'trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/video_form", $data);
        } else {
            $insert = array('title','status','url');
            foreach ($insert as $val) {
                $data1[$val] = $_POST[$val];
            }

            //  $data1['images'] = json_encode($_POST['temp_file']);

          //  $data1['images'] = $_POST['temp_file'];
            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $id = $_POST['id'];
                $this->db->where('id', $id);
                $this->db->update('video', $data1);
            } else {
                $this->db->insert('video', $data1);
            }
            $this->session->set_flashdata('msg', 'Data Saved');
            redirect("admin/gallery_video");
        }
    }

    function edit() {
        $id = $_GET['id'];
        $data = array();
        $data['active'] = 9;
        $data['edit'] = (array) $this->db->where('id', $id)->get('video')->row();
        $this->load->view('admin/video_form', $data);
    }

    function delete() {
        $id = $_GET['id'];
        $data = array();
        $data['active'] = 9;
        $data = $this->db->where('id', $id);
        $this->db->delete('video');

        $this->session->set_flashdata('msg', 'data has been deleted');
        redirect('admin/gallery_videos');
    }

   
   

}

?>