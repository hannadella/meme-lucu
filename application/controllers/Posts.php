<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Post extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function get_all()
  {
    
  }
  
  public function load()
  {
    $this->load->view("pages/beranda/index");
  }
}