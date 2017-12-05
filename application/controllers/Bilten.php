<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bilten extends Frontend_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->Model("Report");
      $this->load->Model("News");
  }

    public function index() {
    $data['title'] = "Дневни Билтен";
    $data['reports'] = $this->Report->dohvatiBilten();
    $data['news'] = $this->News->dohvatiPoslednjuVest();
    $data["pages"] = array('bilten');
    $this->load_views($data);
    }
}
