<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_main/AdminModel','main');
    }

	public function index()
	{
        $data['title'] = 'Admin Details';
        $this->load->view('admin/_header');
		$this->load->view('admin_main/list',$data);
        $this->load->view('admin/_footer');
	}
    public function create($id=0,$type="Create")
    {
        $data['id'] = $id;
        $data['title'] = $type;
        $this->load->view('admin/_header');
		$this->load->view('admin_main/create',$data);
        $this->load->view('admin/_footer');
    }
    public function save()
    {
        $this->main->save();
    }
    public function fetch_user()
    {  
        // $this->load->model("crud_model");  
        $fetch_data = $this->main->make_datatables();  
        $data = array();  
        $no = 0;
        foreach($fetch_data as $row)  
        {  
             $no++;
             $sub_array = array(); 
             $sub_array[] = $no;  
             $sub_array[] = $row->name;
             $sub_array[] = $row->email;
             $sub_array[] = $row->phone;
             $sub_array[] = $row->time;
             $sub_array[] = $row->address;
             $sub_array[] = $row->youtube;
             $sub_array[] = '<img src="'.base_url().'uploads/admin/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
             $act = '<a href="'.base_url().'admin_main/AdminController/create/' .$row->id.'/Edit" type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-xs">Update</a>';  
             $act = $act . '&nbsp;<a href="'.base_url().'admin_main/AdminController/delete/' .$row->id.'/Delete" type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs">Delete</a>';  
             $sub_array[] = $act;
             $data[] = $sub_array;  
        }  
        $output = array(  
             "draw"                    =>     intval($_POST["draw"]),  
             "recordsTotal"          =>      $this->main->get_all_data(),  
             "recordsFiltered"     =>     $this->main->get_filtered_data(),  
             "data"                    =>     $data  
        );  
        echo json_encode($output);  
   }  
   public function delete($id)
   {
       $this->main->delete($id);
   }
   public function getsing($id)
   {
       $this->main->getsing($id);
   }
}
