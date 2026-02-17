<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemsController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_item_list/ItemsModel','items');
    }

	public function index()
	{
        $data['title'] = 'Item List';
        $this->load->view('admin/_header');
		$this->load->view('admin_item_list/list',$data);
        $this->load->view('admin/_footer');
	}
    public function create($id=0,$type="Create")
    {
        $data['id'] = $id;
        $data['title'] = $type;
        $this->load->view('admin/_header');
		$this->load->view('admin_item_list/create',$data);
        $this->load->view('admin/_footer');
    }
    public function save()
    {
        $this->items->save();
    }
    public function fetch_user()
    {  
        // $this->load->model("crud_model");  
        $fetch_data = $this->items->make_datatables();  
        $data = array();  
        $no = 0;
        foreach($fetch_data as $row)  
        {  
             $no++;
             $sub_array = array(); 
             $sub_array[] = $no; 
             $sub_array[] = $row->item_name; 
             $sub_array[] = $row->price;
             $sub_array[] = $row->ingredients; 
             $sub_array[] = $row->sub_title;
             $sub_array[] = $row->about_item;
             $sub_array[] = $row->special_item;
             $sub_array[] = '<img src="'.base_url().'uploads/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
             $act = '<a href="'.base_url().'admin_item_list/itemsController/create/' .$row->id.'/Edit" type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-xs">Update</a>';  
             $act = $act . '&nbsp;<a href="'.base_url().'admin_item_list/itemsController/delete/' .$row->id.'" type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs">Delete</a>';  
             $sub_array[] = $act;
             $data[] = $sub_array;  
        }  
        $output = array(  
             "draw"                    =>     intval($_POST["draw"]),  
             "recordsTotal"          =>      $this->items->get_all_data(),  
             "recordsFiltered"     =>     $this->items->get_filtered_data(),  
             "data"                    =>     $data  
        );  
        echo json_encode($output);  
   }  
   public function delete($id)
   {
       $this->items->delete($id);
   }
   public function getsing($id)
   {
       $this->items->getsing($id);
   }
   public function get_category()
   {
       $this->items->get_category();
   }
}
