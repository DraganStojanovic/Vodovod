<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitnitel extends Frontend_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->Model("News");

  }

    public function index() {
    $data['title'] = "Хитни Телефони";
    $data['news'] = $this->News->dohvatiPoslednjuVest();
    $data["pages"] = array('hitnitel');
    $this->load_views($data);
    }
}
