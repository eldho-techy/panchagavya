<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SigninModel extends CI_Model {
    public function __construct()
    {
        parent::__construct();
       
    }
    public function account_access()
    {
        $name = $this->input->post('name');
        $password = $this->input->post('password');

        $this->db->where('name', $name);
        $this->db->where('password', $password);
       $query = $this->db->get('admin');
       
      
        if ($query->num_rows() > 0) {
            $session_data = array(
                'name'     =>     $name
            );
            $this->session->set_userdata($session_data);
            redirect(base_url() . 'admin/MainController/index');
        } else {
            $this->session->set_flashdata('error', 'Invalid Username and Password');
            redirect(base_url() . 'SigninController/logout');
        }
    }
}