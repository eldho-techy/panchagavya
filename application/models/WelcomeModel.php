<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WelcomeModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_about()
    {
        $qry = "SELECT header,body FROM `about_us` ORDER by id DESC limit 1";
        return $this->db->query($qry)->result();
    }
    public function why_choose_us()
    {
        $qry = "SELECT title,content FROM `why_choose_us` order by id asc";
        return $this->db->query($qry)->result();
    }
    public function get_category()
    {
        $qry = "SELECT id,category_name FROM `item_category` order by id asc";
        return $this->db->query($qry)->result();
    }
    public function get_items()
    {
        $qry = "SELECT *,item_category.id as item_id FROM items  left join item_category  on items.category_id=item_category.id ORDER by items.id asc";
        return $this->db->query($qry)->result();
    }
    public function get_special()
    {
        $qry = "SELECT * FROM items as i where i.special=1 order by id asc";
        return $this->db->query($qry)->result();
    }
    public function get_admin()
    {
        $qry = "SELECT * FROM admin order by id asc";
        return $this->db->query($qry)->result();
    }
    public function get_sayings()
    {
        $qry = "SELECT * FROM `peoples_sayings` order by id asc";
        return $this->db->query($qry)->result();
    }
    public function get_events()
    {
        $qry = "SELECT * FROM items as i where i.special=1 order by id asc";
        return $this->db->query($qry)->result();
    }
    public function get_gallery()
    {
        $qry = "SELECT * FROM `gallery` order by id desc limit 8";
        return $this->db->query($qry)->result();
    }
    public function get_active()
    {
        $qry = "SELECT * FROM `items` WHERE active=1 limit 1";
        return $this->db->query($qry)->result();
    }
    public function get_bgimage_1()
    {
        $qry = "SELECT * FROM background_img where id =1 ";
        return $this->db->query($qry)->result();
    }
    public function get_bgimage_2()
    {
        $qry = "SELECT * FROM background_img  where id =2 ";
        return $this->db->query($qry)->result();
    }
    public function get_bgimage_3()
    {
        $qry = "SELECT * FROM background_img  where id =3 ";
        return $this->db->query($qry)->result();
    }
    public function get_bgimage_4()
    {
        $qry = "SELECT * FROM background_img  where id =4 ";
        return $this->db->query($qry)->result();
    }
}
