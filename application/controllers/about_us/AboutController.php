<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('about_us/AboutModel','about');
    }

	public function index()
	{
        $data['title'] = 'About Us';
        $this->load->view('admin/_header');
		$this->load->view('about_us/list',$data);
        $this->load->view('admin/_footer');
	}
    public function create($id=0,$type="Create")
    {
        $data['id'] = $id;
        $data['title'] = $type;
        $this->load->view('admin/_header');
		$this->load->view('about_us/create',$data);
        $this->load->view('admin/_footer');
    }
    public function save()
    {
        $this->about->save();
    }
    public function fetch_user()
    {  
        // $this->load->model("crud_model");  
        $fetch_data = $this->about->make_datatables();  
        $data = array();  
        $no = 0;
        foreach($fetch_data as $row)  
        {  
             $no++;
             $sub_array = array(); 
             $sub_array[] = $no; 
             $sub_array[] = $row->header; 
             $sub_array[] = $row->body;  
            //  $sub_array[] = '<img src="'.base_url().'upload/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
             $act = '<a href="'.base_url().'about_us/AboutController/create/' .$row->id.'/Edit" type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-xs">Update</a>';  
            //  $act = $act . '&nbsp;<a href="'.base_url().'about_us/AboutController/delete/' .$row->id.'/Delete" type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs">Delete</a>';  
             $sub_array[] = $act;
             $data[] = $sub_array;  
        }  
        $output = array(  
             "draw"                    =>     intval($_POST["draw"]),  
             "recordsTotal"          =>      $this->about->get_all_data(),  
             "recordsFiltered"     =>     $this->about->get_filtered_data(),  
             "data"                    =>     $data  
        );  
        echo json_encode($output);  
   }  
   public function delete($id)
   {
       $this->about->delete($id);
   }
   public function getsing($id)
   {
       $this->about->getsing($id);
   }
}
