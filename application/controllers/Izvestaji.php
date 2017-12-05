<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izvestaji extends Frontend_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->Model("Report");
      $this->load->Model("News");
  }

    public function index() {
    $data['title'] = "Извештај";
    $data['reports'] = $this->Report->dohvatiObicneIzvestaje();
    $data['reports2'] = $this->Report->dohvatiObicneIzvestajedva();
    $data['reports3'] = $this->Report->dohvatiObicneIzvestajetri();
    $data['reports4'] = $this->Report->dohvatiObicneIzvestajecetiri();
    $data['reports5'] = $this->Report->dohvatiObicneIzvestajepet();
    $data['reports6'] = $this->Report->dohvatiObicneIzvestajesest();
    $data['reports7'] = $this->Report->dohvatiObicneIzvestajesedam();
    $data['reports8'] = $this->Report->dohvatiObicneIzvestajeosam();
    $data['news'] = $this->News->dohvatiPoslednjuVest();
    $data["pages"] = array('izvestaji');
    $this->load_views($data);
    }
}
