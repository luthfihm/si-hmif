<?php
/**
 * Created by PhpStorm.
 * User: luthfi
 * Date: 19/05/2015
 * Time: 16:55
 */
class Admin extends CI_Controller {

    function index()
    {
        if ($this->user_model->is_logged_in()){
            redirect('admin/new_post');
        }else{
            redirect('admin/login');
        }
    }

    function login()
    {
        if (!$this->user_model->is_logged_in()){
            $data['title'] = "Login";
            $this->load->view('login',$data);
        }else{
            redirect('admin/new_post');
        }
    }

    function logout()
    {
        unset($_SESSION["username_hmif"]);
        unset($_SESSION[md5('filemanager')]);
        session_destroy();
        redirect('/');
    }

    function new_post()
    {
        if ($this->user_model->is_logged_in()){
            $data['title'] = "New Post";
            $data['content'] = "new_post";
            $data['categories'] = $this->category->getAll();
            $this->load->view("page",$data);
        }else{
            redirect('admin/login');
        }
    }
    function post($id = null)
    {
        if ($this->user_model->is_logged_in()){
            $data['categories'] = $this->category->getAll();
            if ($id == null)
            {
                $data['num_all_post'] = $this->post_model->getNumAll();
                $data['num_published'] = $this->post_model->getNumPublished();
                $data['num_draft'] = $this->post_model->getNumDraft();
                $data['title'] = "View Post";
                $data['content'] = "list_post";
            }
            else
            {
                $post = $this->post_model->get($id);
                $data['title'] = "View Post";
                $data['content'] = "post";
                $data['post'] = $post;
            }
            $this->load->view("page",$data);
        }else{
            redirect('admin/login');
        }
    }
    function edit_post($id)
    {
        if ($this->user_model->is_logged_in()){
            $data['categories'] = $this->category->getAll();
            $post = $this->post_model->get($id);
            $data['title'] = "Edit Post";
            $data['content'] = "edit_post";
            $data['post'] = $post;
            $this->load->view("page",$data);
        }else{
            redirect('admin/login');
        }
    }
}