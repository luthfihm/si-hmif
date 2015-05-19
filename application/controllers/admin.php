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
            $data['title'] = "New Post";
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
            $this->load->view("page",$data);
        }else{
            redirect('admin/login');
        }
    }
}