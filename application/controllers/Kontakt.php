<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontakt extends Frontend_Controller {

    public function index() {
      
    $data['title'] = "Контакт";
    $data["pages"] = array('kontakt');
    $this->load_views($data);
    }
}
