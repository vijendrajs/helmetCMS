<?php

class my_profile extends CI_Controller {

    function __construct() {
        parent:: __construct();
        
        $this->admin = $this->session->userdata('is_admin_login');
        
        if (empty($this->admin)) {
            redirect('admin/login');
        }
    }

    function index() {
        $data = array();
        
        $data['edit'] = $this->admin;
        
       
        
        $this->load->view('admin/my_profile', $data);
    }

    function update() {
       $data1=array();
        $insert = array('password', 'first_name', 'last_name');
        foreach ($insert as $val) {
            $data1[$val] = $_POST[$val];
            
        }
       
        $this->db->where('id', $this->admin['id'])->update('customer1', $data1);
        $this->session->set_flashdata('msg', 'Data has been saved');
        
        $admin = (array) $this->db->where('id', $this->admin['id'])->get('customer1')->row();
       
        $this->session->set_userdata('is_admin_login',$admin);
        redirect("admin/my_profile");
        
    }

}
?>

