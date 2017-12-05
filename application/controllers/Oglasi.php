<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oglasi extends Frontend_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->Model("Report");
      $this->load->Model("News");
  }

    public function index() {
    $data['title'] = "Oglasi";
    $data['reports'] = $this->Report->dohvatiOglase();
    $data['news'] = $this->News->dohvatiPoslednjuVest();
    $data["pages"] = array('oglasi');
    $this->load_views($data);
    }
}
