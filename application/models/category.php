<?php
/**
 * Created by PhpStorm.
 * User: upix
 * Date: 5/22/2015
 * Time: 9:49 PM
 */

class Category extends CI_Model {
    function get($id)
    {
        $this->db->where("id",$id);
        $query = $this->db->get("category");
        return $query->row();
    }
    function getAll()
    {
        $query = $this->db->get("category");
        return $query->result();
    }
}