<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends Frontend_Controller{
  public function __construct() {
      parent::__construct();
      $this->load->Model('Admin_Model');     
  }
    public function index() {
         $data['title'] = "Login";
         $data["pages"] = array('login');
         $this->load->view('head');       
         $this->load->view('login');
         $this->load->view('footer'); 
    }  
    function login(){
      if($this->input->post(lgSubmit)){
        $this->Admin_Model->username = $this->input->post('lgUsername');
        $this->Admin_Model->password = $this->input->post('lgPassword');
        $logged = $this->Admin_Model->createSession();
        if(!$logged){
          redirect(base_url());
        }

        if($logged){
          redirect(base_url() . 'nabavke/dodaj');
        }
        else{
          $this->session->set_flashdata('error', 'Wrong username or password');
          redirect(base_url() . 'nabavke');
        }
      }
      else{
          redirect(base_url());
      }
    }
      function panel()
  {
    if(!$this->session->userdata('username'))
    {
      echo 'desi poso';
    }
  }
  public function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url());
  }    
}
    