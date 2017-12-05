<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model{

public $id;
public $username;
public $password;

public function createSession($username, $password){
  $this->db->select('username, password');
  $this->db->from('admin');
  $this->db->where('username', $this->username);
  $this->db->where('password', md5($this->password));
  $this->db->limit(1);


  $result = $this->db->get()->row_array();

  if($result)
  {
    $this->session->set_userdata($result);
    return true;
  }
  else
  {
    return false;
  }
}
}
