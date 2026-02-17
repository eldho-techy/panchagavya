<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('WelcomeModel','welcome');
	}

	public function index()
	{
		$data['get_about'] = $this->welcome->get_about();
		$data['why_choose_us'] = $this->welcome->why_choose_us();
		$data['category'] = $this->welcome->get_category();
		$data['items'] = $this->welcome->get_items();
		$data['special'] = $this->welcome->get_special();
		$data['admin'] = $this->welcome->get_admin();
		$data['sayings'] = $this->welcome->get_sayings();
		$data['events'] = $this->welcome->get_events();
		$data['gallery'] = $this->welcome->get_gallery();
		$data['active'] = $this->welcome->get_active();
		$data['bg_image_1'] = $this->welcome->get_bgimage_1();
		$data['bg_image_2'] = $this->welcome->get_bgimage_2();
		$data['bg_image_3'] = $this->welcome->get_bgimage_3();
		$data['bg_image_4'] = $this->welcome->get_bgimage_4();
		$this->load->view('index',$data);
	}
}
