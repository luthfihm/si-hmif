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
        $query = $this->db->get('user');
        var_dump($query);
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

}