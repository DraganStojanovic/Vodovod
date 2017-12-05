<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Model{

    public $id;
    public $picture_id;

    public function ucitajGaleriju()
    {
        $query = "SELECT * FROM gallery INNER JOIN picture where picture.id = gallery.picture_id;";
        return $this->db->query($query)->result();
    }
}
