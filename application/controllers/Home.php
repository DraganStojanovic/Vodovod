<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->Model("News");

    }

    public function index() {
    $data['title'] = "Почетна";
    $data['news'] = $this->News->dohvatiSveVesti();
    $data["pages"] = array('header','menu');
    $this->load_views($data);

    }

   public function vest($id = null)
    {
        $data['title'] = "Vest";
        $this->News->id = $id;
        $data['vest'] = $this->News->dohvatiJednuVest();
        $data['news'] = $this->News->dohvatiPoslednjuVest();
        //var_dump($data['vest']);

        if($data['vest']) {
          $data["pages"] = array('stranica');
          $this->load_views($data);
        } else {
            redirect(base_url());
        }
    }
}
