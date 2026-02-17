<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WhyChooseModel extends CI_Model
{
     public function __construct()
     {
          parent::__construct();
     }
     var $table = "why_choose_us";
     var $select_column = array("id", "title","content");
     var $order_column = array(null, "title", null, null);
     function make_query()
     {
          $this->db->select($this->select_column);
          $this->db->from($this->table);
          if (isset($_POST["search"]["value"])) {
               $this->db->like("title", $_POST["search"]["value"]);
                  $this->db->or_like("content", $_POST["search"]["value"]);  
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
          $title = $this->input->post('title');
          $content = $this->input->post('content');
          $data = array(
               'title' => $title,
               'content' => $content
          );
          if ($id == 0) {
               $this->db->insert('why_choose_us', $data);
          } else {
               $this->db->where('id', $id);
               $this->db->update('why_choose_us', $data);
          }
          redirect(base_url() . 'why_choose_us/WhyChooseController/index');
     }
     public function delete($id)
     {
          $qry = "Delete from why_choose_us where id=" . $id;
          $this->db->query($qry);
          redirect(base_url() . 'why_choose_us/WhyChooseController/index');
     }
     public function getsing($id)
     {
          $qry = "select * from why_choose_us where id=" .$id;
          $result = $this->db->query($qry);
          echo json_encode($result->row_array());
     }
}
