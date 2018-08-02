<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{

  public function add_user($data){
    return $this -> db -> insert("users" ,$data);
  }

  public function get_user($barcode){
    $this -> db -> where('u_code' , $barcode);
    return $this -> db -> get('users');
  }

  public function get_users_in_group($group_code){
      $this -> db -> where('group_code' , $group_code);
      return $this -> db -> get('users');
  }

  public function edit_user($barcode , $phone){

    if($barcode != null){
      $this->db->where('u_code' , $barcode);
    }else if($phone != null){
      $this->db->where('phone' , $phone);
    }

    //echo time();
    $data = array(
      "lost" => 1,
      "lost_time_register" => time()
    );
    $r =  $this->db->update('users' , $data);
    //var_dump($this->db->last_query());
    return $r;
  }

  public function delete_user($id){

  }

}
?>
