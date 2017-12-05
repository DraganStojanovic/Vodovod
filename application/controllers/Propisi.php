<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propisi extends Frontend_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->Model("Report");
      $this->load->Model("News");
  }

    public function index() {
    $data['title'] = "Прописи";
    $data['reports'] = $this->Report->dohvatiPropise();
    $data['news'] = $this->News->dohvatiPoslednjuVest();
    $data["pages"] = array('propisi');
    $this->load_views($data);
    }
}
