<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Frontend_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->Model("News");
  }

    public function index() {

    $data['title'] = "Онама";
    $data["pages"] = array('about');
    $data['news'] = $this->News->dohvatiPoslednjuVest();
    $this->load_views($data);
    }
}
