<?php
/**
 * Created by PhpStorm.
 * User: luthfi
 * Date: 19/05/2015
 * Time: 16:53
 */

class User_model extends CI_Model {
    function validate($user,$pass){
        $this->db->where('username',$user);
        $pass_encrypted = md5($pass);
        $this->db->where('password',$pass_encrypted);
        $query = $this->db->get('user');
        if ($query->num_rows == 1)
        {
            $_SESSION["username_hmif"] = $user;
            $_SESSION[md5('filemanager')] = true;
            return true;
        }else{
            return false;
        }
    }
    function is_logged_in(){
        if (isset($_SESSION["username_hmif"])){
            return true;
        }else{
            return false;
        }
    }
    function change_pass($user,$pass)
    {
        $pass_encrypted = md5($pass);
        $data = array(
            'username' => $user,
            'password' => $pass_encrypted
        );
        $this->db->where('username',$_SESSION["username_hmif"]);
        $query = $this->db->update('user', $data);
        return $query;
    }
}