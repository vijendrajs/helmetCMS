<?php

function custome_sub_string($string = '', $start = 0, $length = 0) {
    $return_string = '';
    if (!empty($string)) {
        $string_length = strlen($string);
        if ($string_length > $length) {
            $return_string = substr($string, $start, $length) . '..';
        } else {
            $return_string = $string;
        }
    }
    return $return_string;
}

function email_send($to = '', $from = '', $sub = '', $msg = '', $cc = '', $bcc = '', $attach = '') {
    $CI = get_instance();    
    $smtp = $CI->db->where('active',1)->get('email_config')->result_array();
    $CI->load->library('email');
    if (count($smtp) == 0) {
        $smtp = 0;
        $from = 0;
    } else {
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = $smtp[0]['Host'];
        $config['smtp_port'] = $smtp[0]['Port'];
        $config['smtp_user'] = $smtp[0]['Username'];
        $config['smtp_pass'] = $smtp[0]['Password'];
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'html'; // text or html
        $config['validation'] = TRUE; // bool whether to validate email or not
        $CI->email->initialize($config);
        $from = $smtp[0]['From'];
        $bcc = $smtp[0]['bcc'];
        $from_name = $smtp[0]['From_Name'];
        $smtp = 1;
    }
    if (empty($from)) {
        $from = 'tessori@goyalinfotech.pw';
    }
    $CI = get_instance();
    $CI->email->from($from, $from_name);
    $CI->email->to($to);
    $CI->email->subject($sub);
    $CI->email->message($msg);

    if ($attach != "") {
        $CI->email->attach($attach);
    }
    if ($cc != "") {
        $CI->email->cc($cc);
    }
    if ($bcc != "") {
        $CI->email->bcc($bcc);
    }

    if ($smtp == 1) {
        if ($CI->email->send()) {
//            echo "Mail sent";
        } else {
//            echo $this->email->print_debugger();
        }
    } else {
//        echo "No SMTP";
    }
}
