<?php
/**
 * Created by PhpStorm.
 * User: upix
 * Date: 5/22/2015
 * Time: 10:20 PM
 */
class Post_model extends CI_Model
{
    function new_post($data)
    {
        $query = $this->db->insert("post",$data);
        return $query;
    }

    function edit_post($id,$data)
    {
        $this->db->where("id",$id);
        $query = $this->db->update("post",$data);
        return $query;
    }

    function getAll()
    {
        $query = $this->db->get("post");
        return $query->result();
    }

    function get($id)
    {
        $this->db->where("id",$id);
        $query = $this->db->get("post");
        return $query->row();
    }

    function getLim($limit,$offset,$published = null,$cat = null)
    {
        if ($published != null)
            $this->db->where("published",$published);
        if ($cat != null)
            $this->db->where("category",$cat);
        $this->db->limit($limit,$offset);
        $query = $this->db->get("post");
        return $query->result();
    }

    function getNumAll($published = null,$cat = null)
    {
        if ($published != null)
            $this->db->where("published",$published);
        if ($cat != null)
            $this->db->where("category",$cat);
        $query = $this->db->get("post");
        return $query->num_rows;
    }

    function getNumPublished()
    {
        $this->db->where("published",1);
        $query = $this->db->get("post");
        return $query->num_rows;
    }

    function getNumDraft()
    {
        $this->db->where("published",0);
        $query = $this->db->get("post");
        return $query->num_rows;
    }

    function del_post($id)
    {
        $this->db->where("id",$id);
        $query = $this->db->delete("post");
        return $query;
    }
}