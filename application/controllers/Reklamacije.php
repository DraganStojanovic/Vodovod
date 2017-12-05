<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reklamacije extends Frontend_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->Model("News");

  }

    public function index() {
    $data['title'] = "Рекламације";
    $data['news'] = $this->News->dohvatiPoslednjuVest();
    $data["pages"] = array('reklamacije');
    $this->load_views($data);
    }
}
