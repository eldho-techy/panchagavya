<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AboutModel extends CI_Model
{
     public function __construct()
     {
          parent::__construct();
     }
     var $table = "about_us";
     var $select_column = array("id", "header","body");
     var $order_column = array(null, "header", null, null);
     function make_query()
     {
          $this->db->select($this->select_column);
          $this->db->from($this->table);
          if (isset($_POST["search"]["value"])) {
               $this->db->like("header", $_POST["search"]["value"]);
                  $this->db->or_like("body", $_POST["search"]["value"]);  
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
          $header = $this->input->post('header');
          $body = $this->input->post('body');
          $data = array(
               'header' => $header,
               'body' => $body
          );
          if ($id == 0) {
               $this->db->insert('about_us', $data);
          } else {
               $this->db->where('id', $id);
               $this->db->update('about_us', $data);
          }
          redirect(base_url() . 'about_us/AboutController/index');
     }
     public function delete($id)
     {
          $qry = "Delete from about_us where id=" . $id;
          $this->db->query($qry);
          redirect(base_url() . 'about_us/AboutController/index');
     }
     public function getsing($id)
     {
          $qry = "select * from about_us where id=" .$id;
          $result = $this->db->query($qry);
          echo json_encode($result->row_array());
     }
}
