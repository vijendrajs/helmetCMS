<?php

class products extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->admin = $this->session->userdata('is_admin_login');
        if (empty($this->admin)) {
            redirect('admin/login');
        }
    }

    function index() {

        $data = array();
        $data['active'] = 16;
        $data['id'] = '';

        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $data['id'] = $_GET['id'];
            $this->db->where('ptp.id', $_GET['id']);
        }

        $this->db->select('pt.*,ptp.project_type');
        $this->db->from('projects_table as pt');
        $this->db->join('project_type as ptp', 'pt.type=ptp.id', 'left');
        $data['list'] = $this->db->get()->result_array();
        
        $data['type_array'] = $this->db->get('project_type')->result_array(); //to show value in search box
        $this->load->view('admin/project_list', $data);
    }

    function save() {
        $data = array();

        $data['type_array'] = $this->db->get('project_type')->result_array();

        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');

        $this->form_validation->set_rules('project_name', 'title', 'trim|xss_clean');
        $this->form_validation->set_rules('project_type', 'project_type', 'trim|xss_clean');
        $this->form_validation->set_rules('size', 'size', 'trim|xss_clean');
        $this->form_validation->set_rules('description', 'description', 'trim|xss_clean');
         $this->form_validation->set_rules('price', 'price', 'trim|xss_clean');
        $this->form_validation->set_rules('available', 'available', 'trim|xss_clean');
        $this->form_validation->set_rules('description', 'description', 'trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/project_form", $data);
        } else {


            if (isset($_POST['temp_file']) && !empty($_POST['temp_file'])) {
                $data1['images'] = implode(',', $_POST['temp_file']);
            }
            $data1['project_name'] = $_POST['project_name'];
            $data1['type'] = $_POST['project_type'];
            $data1['size'] = $_POST['size'];
            $data1['description'] = $_POST['description'];
            $data1['available'] = $_POST['availableno'];
            $data1['price'] = $_POST['price'];
            $data1['addby'] = $this->admin['id'];
            $data1['adddate'] = date('Y-m-d H:i:s');


            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $id = $_POST['id'];
                $this->db->where('id', $id);
                $this->db->update('projects_table', $data1);
            } else {
                $this->db->insert('projects_table', $data1);
            }

            $this->session->set_flashdata('msg', 'Data Saved');
            redirect("admin/products");
        }
    }

    function edit() {
        $id = $_GET['id'];
        $data = array();
        $data['type_array'] = $this->db->get('project_type')->result_array();
        $data['edit'] = (array) $this->db->where('id', $id)->get('projects_table')->row();
        $this->load->view('admin/project_form', $data);
    }

    function delete() {
        $id = $_GET['id'];
        $data = array();
        $data['active'] = 16;
        $data = $this->db->where('id', $id);
        $this->db->delete('projects_table');
        $this->session->set_flashdata('msg', 'Project has been deleted');
        redirect('admin/products');
    }

    function upload() {
        $path = 'uploads/projectimg';
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
        $data['active'] = 16;
        foreach ($files['name'] as $key => $image) {
            $_FILES['image']['name'] = $files['name'][$key]; //second parameters in all are predifine n 1st one is image form name
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
