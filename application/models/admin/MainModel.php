<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainModel extends CI_Model
{
     public function __construct()
     {
          parent::__construct();
     }
     var $table = "item_category";
     var $select_column = array("id", "category_name");
     var $order_column = array(null, "category_name", null, null);
     function make_query()
     {
          $this->db->select($this->select_column);
          $this->db->from($this->table);
          if (isset($_POST["search"]["value"])) {
               $this->db->like("category_name", $_POST["search"]["value"]);
               //   $this->db->or_like("last_name", $_POST["search"]["value"]);  
          }
          if (isset($_POST["order"])) {
               $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
          } else {
               $this->db->order_by('id', 'DESC');
          }
     }
     function make_datatables()
     {
          $this->make_query();
          if ($_POST["length"] != -1) {
               $this->db->limit($_POST['length'], $_POST['start']);
          }
          $query = $this->db->get();
          return $query->result();
     }
     function get_filtered_data()
     {
          $this->make_query();
          $query = $this->db->get();
          return $query->num_rows();
     }
     function get_all_data()
     {
          $this->db->select("*");
          $this->db->from($this->table);
          return $this->db->count_all_results();
     }
     public function save()
     {
          $id = $this->input->post('id');
          $item_category = $this->input->post('item_category');
          $data = array(
               'category_name' => $item_category
          );
          if ($id == 0) {
               $this->db->insert('item_category', $data);
          } else {
               $this->db->where('id', $id);
               $this->db->update('item_category', $data);
          }
          redirect(base_url() . 'admin/MainController/index');
     }
     public function delete($id)
     {
          $qry = "Delete from item_category where id=" . $id;
          $this->db->query($qry);
          redirect(base_url() . 'admin/MainController/index');
     }
     public function getsing($id)
     {
          $qry = "select * from item_category where id=" .$id;
          $result = $this->db->query($qry);
          echo json_encode($result->row_array());
     }
}
