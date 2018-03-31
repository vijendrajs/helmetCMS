<?php

class clients extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->admin = $this->session->userdata('is_admin_login');
        if (empty($this->admin)) {
            redirect('admin/login');
        }
    }

    function index() {

        $data = array();
        $data['active'] = 2;
        $data['list'] = $this->db->get('clients')->result_array();
        $this->load->view('admin/clients_list', $data);
    }

    function save() {
        $data = array();
        $data['active'] = 2;


        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_rules('title', 'subject', 'required|trim|xss_clean');
        $this->form_validation->set_rules('description', 'Description', 'required|trim|xss_clean');
        $this->form_validation->set_rules('status', 'Status', 'required|trim|xss_clean');
        $this->form_validation->set_rules('temp_file', 'Images', 'trim|xss_clean');
        $this->form_validation->set_rules('footer', 'Images', 'trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/clients_form", $data);
        } else {
            $insert = array('title', 'description','status','footer');
            foreach ($insert as $val) {
                $data1[$val] = $_POST[$val];
            }

            //  $data1['images'] = json_encode($_POST['temp_file']);

            $data1['images'] = $_POST['temp_file'];
            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $id = $_POST['id'];
                $this->db->where('id', $id);
                $this->db->update('clients', $data1);
            } else {
                $this->db->insert('clients', $data1);
            }
            $this->session->set_flashdata('msg', 'Data Saved');
            redirect("admin/clients");
        }
    }

    function edit() {
        $id = $_GET['id'];
        $data = array();
        $data['active'] = 2;
        $data['edit'] = (array) $this->db->where('id', $id)->get('clients')->row();
        $this->load->view('admin/clients_form', $data);
    }

    function delete() {
        $id = $_GET['id'];
        $data = array();
        $data['active'] = 2;
        $data = $this->db->where('id', $id);
        $this->db->delete('clients');

        $this->session->set_flashdata('msg', 'data has been deleted');
        redirect('admin/clients');
    }

    function upload() {
        $path = 'uploads/clients';
        $files = $_FILES['images'];
        $title = "";
        $images = $this->upload_files($path, $title, $files);
        echo json_encode($images);
    }

    function upload_files($path, $title, $files) {
        $config = array(
            'upload_path' => $path,
            'allowed_types' => 'jpg|gif|png',
            'overwrite' => 1,
            'remove_spaces' => 1
        );

        $this->load->library('upload', $config);

        $images = array();
        $data['active'] = 2;
        foreach ($files['name'] as $key => $image) {
            $_FILES['image']['name'] = $files['name'][$key];
            $_FILES['image']['type'] = $files['type'][$key];
            $_FILES['image']['tmp_name'] = $files['tmp_name'][$key];
            $_FILES['image']['error'] = $files['error'][$key];
            $_FILES['image']['size'] = $files['size'][$key];

            $fileName = time() . '_' . str_replace(' ', '_', $image);

            $images[] = $fileName;

            $config['file_name'] = $fileName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $this->upload->data();
            } else {
                return false;
            }
        }

        return $images;
    }

}

?>