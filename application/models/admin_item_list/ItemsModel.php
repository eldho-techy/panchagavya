<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ItemsModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    var $table = "items";
    var $select_column = array("*,case when special=1 then 'yes' when special=0 then 'no' end as special_item");
    var $order_column = array(null, "item_name", null, null);
    function make_query()
    {
        $this->db->select($this->select_column);
        $this->db->from($this->table);
        if (isset($_POST["search"]["value"])) {
            $this->db->like("item_name", $_POST["search"]["value"]);
            $this->db->or_like("price", $_POST["search"]["value"]);
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
        $item_name = $this->input->post('item_name');
        $price = $this->input->post('price');
        $ingredients = $this->input->post('ingredients');
        $sub_title = $this->input->post('sub_title');
        $about_item = $this->input->post('about_item');
        $category_id = $this->input->post('category_id');
        $special = $this->input->post('special');


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
                'item_name' => $item_name,
                'price' => $price,
                'ingredients' => $ingredients,
                'sub_title' => $sub_title,
                'about_item' => $about_item,
                'category_id' => $category_id,
                'special' => $special,
                'image' => $file_name,
            );
        }
        if ($id == 0) {
            $this->db->insert('items', $data);
        } else {
            $this->db->where('id', $id);
            $this->db->update('items', $data);
        }

        redirect(base_url() . 'admin_item_list/ItemsController/index');
    }
    public function delete($id)
    {
        $qry = "Delete from items where id=" . $id;
        $this->db->query($qry);
        redirect(base_url() . 'admin_item_list/ItemsController/index');
    }
    public function getsing($id)
    {
        $qry = "select * from items where id=" . $id;
        $result = $this->db->query($qry);
        echo json_encode($result->row_array());
    }

    public function get_category()
    {
        $qry = "select * from item_category order by id asc";
        $exs = $this->db->query($qry);
        $result = $exs->result_array();
        $option = '';
        $no = 0;
        foreach ($result as $row) {
            $option .= '<option value="' . $row["id"] . '">' . $row["category_name"] . '</option>';
            $no++;
        }
        print_r($option);
    }
}
