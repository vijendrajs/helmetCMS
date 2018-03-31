<?php

class home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data = array();
        $data['active'] = 1;
        $data['setting'] = $this->db->get('setting')->result_array();
        $data['banner'] = $this->db->get('banner')->result_array();
        $data['products'] = $this->db->order_by('id', 'DESC')->get('projects_table')->result_array();
        $data['clients'] = $this->db->where('status', 1)->order_by('id', 'DESC')->limit(1)->get('clients')->result_array();
        $this->load->view('web/home', $data);
    }

    function company() {
        $data = array();
        $data['profile'] = $this->db->get('our_profile')->result_array();
        $data['vision'] = $this->db->get('our_vision')->result_array();
        $data['promoters'] = $this->db->where('status', 1)->limit(3)->get('promoters')->result_array();
        $data['director'] = $this->db->where('status', 1)->limit(3)->get('managing_director')->result_array();
        $data['core_team'] = $this->db->where('status', 1)->limit(4)->get('core_team')->result_array();
        $data['mission'] = $this->db->get('mission')->result_array();
        $this->load->view('web/company', $data);
    }

    function services() {
        $data = array();
        $data['services'] = $this->db->get('our_services')->result_array();
        $this->load->view('web/services', $data);
    }

    function products($id = 0) {
        $data = array();

        $data['project_array'] = $this->db->select(' ptbl.*,ptyp.project_type')
                        ->where('type', $id)
                        ->join('project_type as ptyp', 'ptbl.type=ptyp.id', 'left')
                        ->get('projects_table as ptbl')->result_array();

        $data['project_type_name'] = (array) $this->db->select('*')
                        ->where('id', $id)
                        ->get('project_type')->row();
        $this->load->view('web/products', $data);
    }

    function product($product_id = 0) {
        $data = array();

        $data['product'] = (array) $this->db->where('id', $product_id)->get('projects_table')->row();

        $id = $data['product']['type'];

        $data['related_product'] = $this->db->select(' ptbl.*')
                        ->where('type', $id)
                        ->where('id != ', $product_id)
                        ->limit(4)
                        ->get('projects_table as ptbl')->result_array();

        $data['project_type_name'] = (array) $this->db->select('*')
                        ->where('id', $id)
                        ->get('project_type')->row();

        $this->load->view('web/product', $data);
    }

    function about_us() {
        $data = array();
        $data['about_us'] = (array) $this->db->get('our_profile')->row();
        $this->load->view('web/about_us', $data);
    }

    function gallery_videos() {
        $data = array();
        $data['video'] = $this->db->get('video')->result_array();

        $this->load->view('web/video', $data);
    }

    function career() {
        $data = array();
        $data['why_us'] = $this->db->get('why_us')->result_array();
        $data['openings'] = $this->db->where('status', 1)->get('current_openings')->result_array();
        $data['interviews'] = $this->db->get('interviews')->result_array();
        $this->load->view('web/career', $data);
    }

    function testimonials() {
        $data = array();
        $data['testimonials'] = $this->db->get('testimonials')->result_array();
        $this->load->view('web/testimonials', $data);
    }

    function contact_us() {
        $data = array();
        $data['contact'] = $this->db->get('contact_us')->result_array();
        $this->load->view('web/contact_us', $data);
    }

    function contact_info() {
        $data = array();
        if (isset($_POST)) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $message = $_POST['message'];

            if (!empty($name) && !empty($email) && !empty($mobile) && !empty($message)) {

                $insert = array('name', 'email', 'mobile', 'message');
                foreach ($insert as $val) {
                    $data1[$val] = $_POST[$val];
                }
                $this->db->insert('contact_info', $data1);
                $subject = "Enquiry On ".COMPANY;
                $msg = "";
                $arr_mail_data = array("IP address" => $_SERVER['REMOTE_ADDR'],
                    "Name" => $name,
                    "Email" => $email,
                    "Mobile No. " => $mobile,
                    "Message" => $message);

                $msg .= '<!DOCTYPE html>
                <html lang="en">
                <head>
                <meta charset="utf-8" />
                <title></title>
                <!--[if IE]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
                <meta name="description" content="" />
                <meta name="keywords" content="" />
                <meta name="rating" content="general" />
                <meta name="copyright" content="2013," />
                <meta name="revisit-after" content="31 Days" />
                <meta name="expires" content="never"> 
                <meta name="distribution" content="global" /> 
                <meta name="robots" content="index,follow" />
                </head>
                <body>
                <div class="wrapper" style="margin: 0 auto; width: 590px; background: #333;">
                <div class="wrapper-float" style="float: left; margin: 0; width: 590px; ">
                <div class="sub-wrapper" style="float: left; width: 570px; background: #f7f7f7; margin: 10px; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">
                <div class="logo" style="float: left; margin:6px 33%;"><a href="#">
                <img src="' . base_url() . '/web_theme/images/logo.png" style="width:200px;"></a>
                </div>
                <h3>Contact Enquiry :</h3>
                <div class="cont-wrapper" style="float: left; width: 549px; margin:10px;">
                <table style="width:100%;">';
                foreach ($arr_mail_data as $var5 => $val5) {
                    $msg .='<tr>
                <td style="padding:10px; font-family:Verdana, Geneva, sans-serif; font-size:14px; border:solid 1px #ddd;">
                    <strong>' . $var5 . '</strong>
                </td>
                <td style="padding:10px; font-family:Verdana, Geneva, sans-serif; font-size:14px; border:solid 1px #ddd;">' . $val5 . '</td>
                </tr>';
                }
                $msg .='</table><br>

                <p style="margin:0; font-family:Verdana, Geneva, sans-serif; line-height:28px;">Warm Regards,<br>
                <span><strong style="color:#900;">' . site_url() . '</strong></span> Team</p>
                </div>

                </div>
                </div>
                </div>
                </body>
                </html>';

                $to[] = EMAIL;
                email_send($to, '', $subject, $msg);

                echo "Successfully sent the Contact enquiry !!";
            }
        }
    }

    function enquiry_info() {
        $data = array();
        if (isset($_POST)) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $message = $_POST['message'];

            if (!empty($name) && !empty($email) && !empty($mobile) && !empty($message)) {

                $insert = array('name', 'email', 'mobile', 'message');
                foreach ($insert as $val) {
                    $data1[$val] = $_POST[$val];
                }
                $this->db->insert('enquiry', $data1);

                $data1['url'] = $_POST['url'];

                $subject = "Enquiry On " . COMPANY;
                $msg = "";
                $arr_mail_data = array("IP address" => $_SERVER['REMOTE_ADDR'],
                    "Product" => $_POST['product'],
                    "Link" => $_POST['url'],
                    "Name" => $name,
                    "Email" => $email,
                    "Mobile No. " => $mobile,
                    "Message" => $message
                );

                $msg .= '<!DOCTYPE html>
                <html lang="en">
                <head>
                <meta charset="utf-8" />
                <title></title>
                <!--[if IE]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
                <meta name="description" content="" />
                <meta name="keywords" content="" />
                <meta name="rating" content="general" />
                <meta name="copyright" content="2013," />
                <meta name="revisit-after" content="31 Days" />
                <meta name="expires" content="never"> 
                <meta name="distribution" content="global" /> 
                <meta name="robots" content="index,follow" />
                </head>
                <body>
                <div class="wrapper" style="margin: 0 auto; width: 590px; background: #333;">
                <div class="wrapper-float" style="float: left; margin: 0; width: 590px; ">
                <div class="sub-wrapper" style="float: left; width: 570px; background: #f7f7f7; margin: 10px; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">
                <div class="logo" style="float: left; margin:6px 33%;"><a href="#">
                <img src="' . base_url() . 'web_theme/images/logo.png" style="width:200px;"></a>
                </div>
                <h3>' . COMPANY . ' Enquiry :</h3>
                <div class="cont-wrapper" style="float: left; width: 549px; margin:10px;">
                <table style="width:100%;">';
                foreach ($arr_mail_data as $var5 => $val5) {
                    $msg .='<tr>
                <td style="padding:10px; font-family:Verdana, Geneva, sans-serif; font-size:14px; border:solid 1px #ddd;">
                    <strong>' . $var5 . '</strong>
                </td>
                <td style="padding:10px; font-family:Verdana, Geneva, sans-serif; font-size:14px; border:solid 1px #ddd;">' . $val5 . '</td>
                </tr>';
                }
                $msg .='</table><br>

                <p style="margin:0; font-family:Verdana, Geneva, sans-serif; line-height:28px;">Warm Regards,<br>
                <span><strong style="color:#900;">' . site_url() . '</strong></span> Team</p>
                </div>

                </div>
                </div>
                </div>
                </body>
                </html>';

                $to[] = EMAIL;
                email_send($to, '', $subject, $msg);
                echo "Enquiry submitted !!";
            }
        }
    }

    function disclaimer() {
        $data = array();
        $data['disclaimer'] = $this->db->get('disclaimer')->result_array();
        $this->load->view('web/disclaimer', $data);
    }

    function enquiry() {
        $this->load->view('web/enquiry');
    }
}
