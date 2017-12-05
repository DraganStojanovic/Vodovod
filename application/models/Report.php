<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Model{

    public $id;
    public $title;
    public $date_created;
    public $pdf;
    public $excell;
    public $summary;
    public $report_category;

    public function dohvatiImeKategorije() {
      $query = "SELECT name from report_nabavke WHERE id = $this->report_category;";
      return $this->db->query($query)->result();
    }

    public function dodajKategorijuNabavke($name)
    {
        $query = "INSERT INTO report_nabavke (name) VALUES('$name');";
          return $this->db->query($query);
    }

    public function dodajNabavku()
    {
     $query = "INSERT INTO report (title,pdf, date_created,report_category) values('$this->title',
                 '$this->pdf','" . date('Y-m-d H:i:s') . "', $this->report_category);";
       return $this->db->query($query);
    }

    public function dohvatiKategorijeNabavke()
    {
        $query = "SELECT * FROM report_nabavke ORDER BY id DESC;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestaje()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 1;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajedva()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 6 ORDER BY date_created DESC;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajetri()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 7;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajecetiri()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 8;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajepet()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 9;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajesest()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 10;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajesedam()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 11;";
        return $this->db->query($query)->result();
    }

    public function dohvatiObicneIzvestajeosam()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 12;";
        return $this->db->query($query)->result();
    }

    public function dohvatiOglase()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 14 ORDER BY id DESC;";
        return $this->db->query($query)->result();
    }

    public function dohvatiBilten()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 15 ORDER BY id DESC;";
        return $this->db->query($query)->result();
    }

  /*  public function dohvatiFIzvestaje()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 2;";
        return $this->db->query($query)->result();
    } */

    public function dohvatiNabavke()
    {
        $query = "SELECT * FROM report WHERE report.report_category = $this->report_category;";
        return $this->db->query($query)->result();
    }

    public function dohvatiPropise()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 4 ORDER BY id DESC;";
        return $this->db->query($query)->result();
    }

    public function dohvatiCenovnike()
    {
        $query = "SELECT * FROM report WHERE report.report_category = 5;";
        return $this->db->query($query)->result();
    }

}
