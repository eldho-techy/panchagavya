<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    var $table = "admin";
    var $select_column = array("*");
    var $order_column = array(null, "name", null, null);
    function make_query()
    {
        $this->db->select($this->select_column);
        $this->db->from($this->table);
        if (isset($_POST["search"]["value"])) {
            $this->db->like("name", $_POST["search"]["value"]);
            $this->db->or_like("email", $_POST["search"]["value"]);
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
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $youtube = $this->input->post('youtube');
        $time = $this->input->post('time');
        $address = $this->input->post('address');
        $password = $this->input->post('password');
        $location = $this->input->post('location');
        $facebook = $this->input->post('facebook');
        $insta = $this->input->post('insta');
        $twitter = $this->input->post('twitter');
        $job = $this->input->post('job');






        $config['upload_path'] = './uploads/admin';
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
                'email' => $email,
                'phone' => $phone,
                'youtube' => $youtube,
                'time' => $time,
                'address' => $address,
                'image' => $file_name,
                'job' => $job,
                'password' => $password,
                'location' => $location,
                'facebook' => $facebook,
                'insta' => $insta,
                'twitter' => $twitter
            );
        }
        if ($id == 0) {
            $this->db->insert('admin', $data);
        } else {
            $this->db->where('id', $id);
            $this->db->update('admin', $data);
        }
        redirect(base_url() . 'admin_main/AdminController/index');
    }
    public function delete($id)
    {
        $qry = "Delete from admin where id=" . $id;
        $this->db->query($qry);
        redirect(base_url() . 'admin_main/AdminController/index');
    }
    public function getsing($id)
    {
        $qry = "select * from admin where id=" . $id;
        $result = $this->db->query($qry);
        echo json_encode($result->row_array());
    }
}
