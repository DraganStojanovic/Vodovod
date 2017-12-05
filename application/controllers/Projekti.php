<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projekti extends Frontend_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->Model("News");

  }

    public function index() {
    $data['title'] = "Početna";
    $data['news'] = $this->News->dohvatiPoslednjuVest();
    $data["pages"] = array('projekti');
    $this->load_views($data);
    }
}
