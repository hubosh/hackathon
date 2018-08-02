<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groups_model extends CI_Model
{

  public function add_group($data){
      return $this -> db -> insert("users_group" , $data);
  }

  public function get_group($id){

  }

  public function edit_group($id){

  }

  public function delete_group($id){

  }

}
?>
