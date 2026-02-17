<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SigninController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SigninModel','sign');
    }

	public function sign_in()
	{
		$this->load->view('sign_in');
	}
    public function account_access()
    {
        $this->sign->account_access();
    }
   
    public function logout()  
    {  
           $this->session->unset_userdata('name');  
           redirect(base_url() . 'Welcome/index');  
    } 
}
