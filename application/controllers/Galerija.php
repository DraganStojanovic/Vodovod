<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galerija extends Frontend_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->Model('Gallery');
      $this->load->Model('News');
  }

    public function index() {
    $data['title'] = "Početna";
    $data['pics'] = $this->Gallery->ucitajGaleriju();
    $data['news'] = $this->News->dohvatiPoslednjuVest();
    $data["pages"] = array('galerija');
    $this->load_views($data);
    }
}
