<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MailController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
    }
    public function send_mail()
    {
        
        $from = '*******@gmail.com';
        $name = $this->input->post('name');
        $to = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

            $config['protocol'] = 'smtp'; // 'mail', 'sendmail', or 'smtp'
            $config['smtp_host'] = 'ssl://smtp.gmail.com'; //'smtp.gmail.com'; 
            $config['smtp_port'] = 465; //465;80;587

            $config['smtp_user' ]= '*******@gmail.com';
            $config['smtp_pass'] = '*******';
           // $config['smtp_crypto'] = 'tls'; //can be 'ssl' or 'tls' for example
            $config['mailtype'] = 'html'; //plaintext 'text' mails or 'html'
            $config['smtp_timeout'] = '4'; //in seconds
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;

         $this->email->initialize($config);
         $this->email->set_mailtype('html');
         $this->email->set_newline("\r\n");
         $this->email->from($from);
         $this->email->to($to);
         $this->email->subject($subject);
         $this->email->message($message);
         $this->email->send();

            $this->session->set_flashdata('msg', 'Your Email has successfully been sent.');
            $this->session->set_flashdata('msg_class','alert-success');

            redirect('Welcome/INDEX');
    }

}