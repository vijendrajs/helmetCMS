<?php

class Customer extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->admin = $this->session->userdata('is_admin_login');
        if (empty($this->admin)) {
            redirect('admin/login');
        }
    }

    function index() {
        $this->load->view("admin/customer_form");
       $data['active'] = 1;
        // $data1['category'] =getdata('customer');
        //$this->load->view('customer_form', $data);
        /*
          $data= array();
          $data['email'] = '';
          if (isset($_GET['email']) && !empty($_GET['email'])) {
          $this->db->like('c.customer_name', $_GET['customer_name']);
          $data['customer_name'] = $_GET['customer_name'];
          }
         */
    }

    function views() {
        $data = array();
        $data['active'] = 2;
        $data['list'] = $this->db->get('customer1')->result_array();
        $this->load->view('admin/customer_list', $data);
    }

    function submit() {
        $data = array();
$data['active'] = 1;
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        } else {
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[customer1.email.id]');
        }


//        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|xss_clean|required');
        $this->form_validation->set_rules('first_name', 'firstname', 'trim|xss_clean|required');
        $this->form_validation->set_rules('last_name', 'lastname', 'trim|xss_clean|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/customer_form', $data);
        } else {

            $insert = array('email', 'password', 'first_name', 'last_name');
            foreach ($insert as $val) {
                $data1[$val] = $_POST[$val];
            }

            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $id = $_POST['id'];
                $this->db->where('id', $id);
                $this->db->update('customer1', $data1);
            } else {
                $this->db->insert('customer1', $data1);
            }

            $this->session->set_flashdata('msg', 'Data saved!!!');
            redirect("admin/customer/views");
        }
    }

    function checkemail() {

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $user = $this->db
                            ->where('email', $email)
                            ->get('customer1')->row();
            if (!empty($user)) {
                $status=0;
                $msg="exist";
            } else {
                $status=1;
                $msg="Not exist";
            }
            $xyz['status']=$status;
            $xyz['msg']=$msg;
            echo json_encode($xyz);
        }
    }

    function edit() {
        $id = $_GET['id'];
        $data = array();
$data['active'] = 1;
        $data['edit'] = (array) $this->db->where('id', $id)->get('customer1')->row();

        $this->load->view('admin/customer_form', $data);
    }

    function delete() {
        $id = $_GET['id'];
        $data = array();
$data['active'] = 1;
        $data = $this->db->where('id', $id);
        $this->db->delete('customer1');

        $this->session->set_flashdata('msg', 'data has been deleted');
        redirect('admin/customer/views');
    }

}
