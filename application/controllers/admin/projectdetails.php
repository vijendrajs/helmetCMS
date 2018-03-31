<?php

class projectdetails extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->admin = $this->session->userdata('is_admin_login');
        if (empty($this->admin)) {
            redirect('admin/login');
        }
    }

    function index() {
        $data = array();
        $data['id'] = '';

        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $data['id'] = $_GET['id'];
            $this->db->where('pdftbl.projects_table', $_GET['id']);
        }

        $data['list'] = $this->db->select('pdftbl.*,ptbl.project_name,pinfo.project_dtls,pdtel.details')
                        ->join('projects_table as ptbl', 'pdftbl.projects_table=ptbl.id', 'left')
                        ->join('project_info as pinfo', 'pdftbl.project_info=pinfo.id', 'left')
                        ->join('project_details as pdtel', 'pdftbl.project_details=pdtel.id', 'left')
                        ->get('p_details_form as pdftbl')->result_array();



        $data['features'] = $this->db
                        ->where('projects_table', $_GET['id'])
                        ->get('features')->result_array();
        $data['pn_name'] = $this->db->select('id,project_name')->get('projects_table')->result_array();
        $this->load->view('admin/projectdetails_list', $data);
    }

    function features() {
        $data = array();
        $data['pn_name'] = $this->db->select('id,project_name')->get('projects_table')->result_array();

        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_rules('projects_table', 'project_typ', 'trim|xss_clean');
        $this->form_validation->set_rules('title', 'Title', 'trim|xss_clean');
        $this->form_validation->set_rules('desc', 'project_nme', 'trim|xss_clean');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/features_form', $data);
        } else {

            $insert = array('projects_table', 'title', 'desc');
            foreach ($insert as $val) {
                $data1[$val] = $_POST[$val];
            }

            if (isset($_POST['temp_file']) && !empty($_POST['temp_file'])) {
                $data1['images'] = implode(',', $_POST['temp_file']);
            }

            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $id = $_POST['id'];
                $this->db->where('id', $id);
                $this->db->update('features', $data1);
            } else {
                $this->db->insert('features', $data1);
            }
            redirect('admin/projectdetails?id=' . $data1['projects_table']);
        }
    }

    function save() {
        $data = array();
        $data['type_array'] = $this->db->select('id,details')->get('project_details')->result_array();
        $data['info'] = $this->db->get('project_info')->result_array();
        $data['pn_name'] = $this->db->select('id,project_name')->get('projects_table')->result_array();

        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_rules('project_details', 'project_typ', 'trim|xss_clean');
        $this->form_validation->set_rules('project_info', 'project_dtls', 'trim|xss_clean');
        $this->form_validation->set_rules('projects_table', 'project_nme', 'trim|xss_clean');
        $this->form_validation->set_rules('size', 'size', 'trim|xss_clean');
        $this->form_validation->set_rules('description', 'description', 'trim|xss_clean');
        if ($this->form_validation->run() == false) {
            $this->load->view("admin/projectdetailsview", $data);
        } else {

            if (isset($_POST['temp_file']) && !empty($_POST['temp_file'])) {
                $data1['images'] = implode(',', $_POST['temp_file']);
            }

            $data1['projects_table'] = $_POST['projects_table'];
            $data1['project_info'] = $_POST['project_info'];
            $data1['project_details'] = $_POST['project_details'];
            $data1['size'] = $_POST['size'];
            $data1['description'] = $_POST['descriptn'];
            $data1['available'] = $_POST['availableno'];
            $data1['addby'] = $this->admin['id'];
            $data1['addate'] = date('Y-m-d');
            $data1['title_new'] = $_POST['title_new'];
            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $id = $_POST['id'];
                $this->db->where('id', $id);
                $this->db->update('p_details_form', $data1);
            } else {
                $this->db->insert('p_details_form', $data1);
            }
            $this->session->set_flashdata('msg', 'Data Saved !!');
            redirect('admin/projectdetails?id=' . $data1['projects_table']);
        }
    }

    function delete() {
        $id = $_GET['id'];
        $projects_table = $_GET['projects_table'];
        $data = array();
        $data = $this->db->where('id', $id);
        $this->db->delete('p_details_form');
        $this->session->set_flashdata('msg', 'Data Deleted !!');
        redirect('admin/projectdetails?id='.$projects_table);
    }

    function delete_feature() {
        $id = $_GET['id'];
        $projects_table = $_GET['projects_table'];
        $data = array();
        $data = $this->db->where('id', $id);
        $this->db->delete('features');
        $this->session->set_flashdata('msg', 'Data Deleted !!');
        redirect('admin/projectdetails?id='.$projects_table);
    }

    function edit() {
        $id = $_GET['id'];
        $data = array();       
        $data['type_array'] = $this->db->select('id,details')->get('project_details')->result_array();
        $data['info'] = $this->db->get('project_info')->result_array();
        $data['pn_name'] = $this->db->select('id,project_name')->get('projects_table')->result_array();
        $data['edit'] = (array) $this->db->where('id', $id)->get('p_details_form')->row();
        $this->load->view('admin/projectdetailsview', $data);
    }

    function edit_feature() {
        $id = $_GET['id'];
        $data = array();
        $data['pn_name'] = $this->db->select('id,project_name')->get('projects_table')->result_array();
        $data['edit'] = (array) $this->db->where('id', $id)->get('features')->row();
        $this->load->view('admin/features_form', $data);
    }

    function upload1() {
        $path = 'uploads/featuresimg';
        $files = $_FILES['images'];
        $title = "";
        $images = $this->upload_files($path, $title, $files);

        echo json_encode($images);
    }

    function upload() {
        $path = 'uploads/projectdetailsimg';
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

?>
