<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fizvestaji extends Frontend_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->Model("Report");
  }

    public function index() {
    $data['title'] = "Финансијски Извештаји";
    $data['reports'] = $this->Report->dohvatiFIzvestaje();
    $data["pages"] = array('fizvestaji');
    $this->load_views($data);
    }
}
