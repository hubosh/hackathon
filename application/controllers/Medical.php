<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medical extends CI_Controller {


  public function __construct() {
    parent::__construct();
    $this->load->library('session');
    $this->load->model("Groups_model");
    $this->load->model('Users_model');
  }

  public function ask_help(){
    
  }

}
?>
