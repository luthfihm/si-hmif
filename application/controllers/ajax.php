<?php
/**
 * Created by PhpStorm.
 * User: luthfi
 * Date: 19/05/2015
 * Time: 17:37
 */

class Ajax extends CI_Controller
{
    function index()
    {
        echo dirname(__FILE__);
    }

    function login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        if ($this->user_model->validate($user, $pass)) {
            echo "true";
        } else {
            echo "false";
        }
    }

    function new_post()
    {
        if ($this->user_model->is_logged_in()){
            $excerpt = $this->input->post("excerpt");
            if ($excerpt == "")
            {
                $content = strip_tags($this->input->post("content"));
                if (strlen($content) < 200)
                {
                    $excerpt = $content;
                }
                else
                {
                    $excerpt = substr($content,0,200);
                }
            }
            $data = array(
                "title" => $this->input->post("title"),
                "content" => $this->input->post("content"),
                "excerpt" => $excerpt,
                "attachment" => $this->input->post("attachment"),
                "featured_image" => $this->input->post("featured_image"),
                "category" => $this->input->post("category"),
                "date" => $this->input->post("date"),
                "start_time" => $this->input->post("start_time").":00",
                "end_time" => $this->input->post("end_time").":00",
                "location" => $this->input->post("location"),
                "contact_name" => $this->input->post("contact_name"),
                "contact" => $this->input->post("contact"),
                "created_at" => date("Y-m-d"),
                "modified_at" => date("Y-m-d"),
                "published" => $this->input->post("published")
            );
            if ($this->post_model->new_post($data))
            {
                echo "true";
            }
            else
            {
                echo "false";
            }
        }else{
            echo "false";
        }
    }

    function edit_post()
    {
        if ($this->user_model->is_logged_in()){
            $excerpt = $this->input->post("excerpt");
            if ($excerpt == "")
            {
                $content = strip_tags($this->input->post("content"));
                if (strlen($content) < 200)
                {
                    $excerpt = $content;
                }
                else
                {
                    $excerpt = substr($content,0,200);
                }
            }
            $id = $this->input->post("id");
            $data = array(
                "title" => $this->input->post("title"),
                "content" => $this->input->post("content"),
                "excerpt" => $excerpt,
                "attachment" => $this->input->post("attachment"),
                "featured_image" => $this->input->post("featured_image"),
                "category" => $this->input->post("category"),
                "date" => $this->input->post("date"),
                "start_time" => $this->input->post("start_time").":00",
                "end_time" => $this->input->post("end_time").":00",
                "location" => $this->input->post("location"),
                "contact_name" => $this->input->post("contact_name"),
                "contact" => $this->input->post("contact"),
                "modified_at" => date("Y-m-d"),
                "published" => $this->input->post("published")
            );
            if ($this->post_model->edit_post($id,$data))
            {
                echo "true";
            }
            else
            {
                echo "false";
            }
        }else{
            echo "false";
        }
    }

    function list_post()
    {
        $limit = $this->input->get('jtPageSize');
        $offset = intval($this->input->get('jtStartIndex'))*intval($limit);
        $published = $this->input->post("published");
        $cat = $this->input->post("category");
        if ($cat!=null)
        {
            if  ($cat == "")
                $cat = null;
        }
        $posts = $this->post_model->getLim($limit,$offset,$published,$cat);
        $rows = array();
        foreach ($posts as $post)
        {
            $statuses = ["Draft","Published"];
            $status = $statuses[$post->published];
            $row = array(
                "id" => $post->id,
                "Title" => $post->title,
                "Status" => $status,
                "Category" => $this->category->get($post->category)->name,
                "Date" => $post->date
            );
            $rows[] = $row;
        }
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Records'] = $rows;
        $jTableResult['TotalRecordCount'] = $this->post_model->getNumAll($published,$cat);
        echo json_encode($jTableResult);
    }

    function delete_post()
    {
        $id =  $this->input->post('id');
        $jTableResult = array();
        if ($this->post_model->del_post($id))
        {
            $jTableResult['Result'] = "OK";
        }
        else
        {
            $jTableResult['Result'] = "ERROR";
            $jTableResult['Message'] = "Gagal menghapus!";
        }
        echo json_encode($jTableResult);
    }

    function list_category()
    {
        $categories = $this->category->getAll();
        $rows = array();
        foreach ($categories as $category)
        {
            $row = array();
            $row["id"] = $category->id;
            $row["name"] = $category->name;
            $rows[] = $row;
        }
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Records'] = $rows;
        echo json_encode($jTableResult);
    }

    function delete_category()
    {
        $id =  $this->input->post('id');
        $jTableResult = array();
        if ($this->category->del_cat($id))
        {
            $jTableResult['Result'] = "OK";
        }
        else
        {
            $jTableResult['Result'] = "ERROR";
            $jTableResult['Message'] = "Gagal menghapus!";
        }
        echo json_encode($jTableResult);
    }

    function edit_category()
    {
        $id =  $this->input->post('id');
        $name =  $this->input->post('name');
        $jTableResult = array();
        if ($this->category->update_category($id,$name))
        {
            $jTableResult['Result'] = "OK";
        }
        else
        {
            $jTableResult['Result'] = "ERROR";
            $jTableResult['Message'] = "Gagal update!";
        }
        echo json_encode($jTableResult);
    }

    function new_category()
    {
        $name = $this->input->post('name');
        $jTableResult = array();
        if ($this->category->new_cat($name))
        {
            $jTableResult['Result'] = "OK";
        }
        else
        {
            $jTableResult['Result'] = "ERROR";
            $jTableResult['Message'] = "Gagal!";
        }
        echo json_encode($jTableResult);
    }

    function change_pass()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $query = $this->user_model->change_pass($user,$pass);
        if ($query){
            echo "true";
        }else{
            echo "false";
        }
    }
    function cek_pass(){
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $query = $this->user_model->validate($user,$pass);
        if($query){
            echo "true";
        }else{
            echo "false";
        }
    }
}