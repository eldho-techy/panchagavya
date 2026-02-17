<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SayingsModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    var $table = "peoples_sayings";
    var $select_column = array("*");
    var $order_column = array(null, "name", null, null);
    function make_query()
    {
        $this->db->select($this->select_column);
        $this->db->from($this->table);
        if (isset($_POST["search"]["value"])) {
            $this->db->like("name", $_POST["search"]["value"]);
            $this->db->or_like("job", $_POST["search"]["value"]);
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
        $name = $this->input->post('name');
        $job = $this->input->post('job');
        $sayings = $this->input->post('sayings');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|';
        $config['max_size'] = 30000;
        $config['max_width'] = 15000;
        $config['max_height'] = 15000;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            echo $this->upload->display_errors();
        } else {
            $up_data = $this->upload->data();
            $file_name = $up_data['file_name'];
            $data = array(
                'name' => $name,
                'job' => $job,
                'sayings' => $sayings,
                'image' => $file_name
            );
        }
        if ($id == 0) {
            $this->db->insert('peoples_sayings', $data);
        } else {
            $this->db->where('id', $id);
            $this->db->update('peoples_sayings', $data);
        }
        redirect(base_url() . 'people_sayings/SayingsController/index');
    }
    public function delete($id)
    {
        $qry = "Delete from peoples_sayings where id=" . $id;
        $this->db->query($qry);
        redirect(base_url() . 'people_sayings/SayingsController/index');
    }
    public function getsing($id)
    {
        $qry = "select * from peoples_sayings where id=" . $id;
        $result = $this->db->query($qry);
        echo json_encode($result->row_array());
    }
}
