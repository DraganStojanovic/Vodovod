<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cenovnik extends Frontend_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->Model("Report");
      $this->load->Model("News");
  }

    public function index() {
    $data['title'] = "Ценовник";
    $data['reports'] = $this->Report->dohvatiCenovnike();
    $data['news'] = $this->News->dohvatiPoslednjuVest();
    $data["pages"] = array('cenovnik');
    $this->load_views($data);
    }
}
