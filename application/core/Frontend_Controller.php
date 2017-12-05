<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

  }


  public function load_views($data) {
      $this->load->view('head',$data);
      $this->load->view('navigation');


      if($data['pages'])
      {
          foreach($data['pages'] as $page)
          {
            $this->load->view($page, $data);
          }
      }else {
        echo "Nema strane...";
      }


      $this->load->view('footer');
  }
}
