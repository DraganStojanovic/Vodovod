<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stranica extends Frontend_Controller  {

  public function __construct() {
      parent::__construct();
  }

    public function index() {

    $data['title'] = "Страница";
    $data["pages"] = array('stranica');
    $this->load_views('stranica', $data);
    }
}
