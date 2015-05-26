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

    function del_cat($id)
    {
        $this->db->where("id",$id);
        $query = $this->db->delete("category");
        return $query;
    }

    function update_category($id,$name)
    {
        $this->db->where("id",$id);
        $query = $this->db->update("category",array("name"=>$name));
        return $query;
    }

    function new_cat($name)
    {
        $query = $this->db->insert("category",array("name"=>$name));
        return $query;
    }
}