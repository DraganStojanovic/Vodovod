<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Model{

    public $id;
    public $title;
    public $text;
    public $date_created;
    public $summary;
    public $news_category_id;
    public $views;

    public function dohvatiSveVesti() {
        $query = "SELECT news.id, news.title, news.text, news.summary, news.youtube, picture.file_name, picture.alt FROM news INNER JOIN news_category ON news.news_category_id = news_category.id INNER JOIN news_to_picture ON news_to_picture.news_id = news.id
                  INNER JOIN picture ON news_to_picture.picture_id = picture.id;";
        return $this->db->query($query)->result();
    }

    public function dohvatiJednuVest() {
      $query = "SELECT * FROM news INNER JOIN news_category ON news.news_category_id = news_category.id INNER JOIN news_to_picture ON news_to_picture.news_id = news.id
                INNER JOIN picture ON news_to_picture.picture_id = picture.id WHERE news.id = " . $this->id . ";";
      return $this->db->query($query)->result();
    }

    public function dohvatiPoslednjuVest() {
        $query = "SELECT news.id, news.title, news.text, news.summary, news.youtube, picture.file_name, picture.alt FROM news INNER JOIN news_category ON news.news_category_id = news_category.id INNER JOIN news_to_picture ON news_to_picture.news_id = news.id
                  INNER JOIN picture ON news_to_picture.picture_id = picture.id LIMIT 5;";
        return $this->db->query($query)->result();
    }


}
