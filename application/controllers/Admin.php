<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


  public function __construct() {

    parent::__construct();
    $this->load->library('session');
    $this->load->model("Groups_model");
    $this->load->model('Users_model');

  }

  public function index(){
    $this->load->view('admin/main');

  }

	public function register_users()
	{
      if($_POST){

        $names_count =  count($_POST['name']);
        if($names_count > 1){

          // create group
          $rand = rand();
          $data = array(
            "code" => $rand
          );
          $this -> Groups_model -> add_group($data);

          for($i = 0; $i < $names_count; $i++){

            // if input field lengt is biger than  1 insert this user
            if(strlen($_POST['name'][$i]) > 1) {

              $name   = $_POST['name'][$i];
              $phone  = $_POST['phone'][$i];
              $u_code = rand(0 , 4324324);

              $data = array(
                "name"        => $name,
                "phone"       => $phone,
                "group_code"  => $rand,
                "u_code"      => $u_code
              );
              $this -> Users_model -> add_user($data);

              // generate QR
              echo "<h2>$u_code</h2>";
              echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=400x400&chl=$u_code&chld=M' width='400' height='400' />";
              echo "<br/>";

            }
          }
        }

      }

		  $this->load->view('admin/register_user');
	}

  // this for show user group
  public function edit_users() {

      if($_POST) {

        if(isset($_POST['add_users']) == true){
          echo "add user is isset";
          $group_code = $_POST['group_code'];

          // here start
          if(isset($_POST['add']))
          {
            if(strlen($_POST['name'][$i]) > 1) {

              $name   = $_POST['name'][$i];
              $phone  = $_POST['phone'][$i];

              $data = array(
                "name"        => $name,
                "phone"       => $phone,
                "group_code"  => $group_code,
                "u_code"      => $u_code
              );
              $this -> Users_model -> add_user($data);

              // generate QR
              echo "<h2>$u_code</h2>";
              echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=400x400&chl=$u_code&chld=M' width='400' height='400' />";
              echo "<br/>";

            }

          }

          // here end

        } else {

          $barcode = $_POST['barcode'];
          $results = $this -> Users_model -> get_user($barcode);

          if($results -> num_rows() == 1){

             $group_code  = $results -> result()[0] -> group_code;
             $users       = $this -> Users_model -> get_users_in_group($group_code) -> result();

             // this varable passed to front end
             $data['group_code'] = $group_code;

             foreach ($users as $value) {
               echo $value->name;
               echo " - ";
               if($value->lost == 1)
                echo "<b style='color:red'>ضائع</b>";
               else
                echo "<b style='Color:green'>متوفر</b>";

                echo "<br/>";
             }

             // echo "<pre>";
             // print_r($users);
             // echo "</pre>";

          }else{
            echo "عفوا, الباركود غير صحيح!";
          }

        }

      } else {

        $this->load->view('admin/get_barcode.php');
      }


  }

  // this for show and add lost users
  public function lost_user() {

      if($_POST) {

        if(isset($_POST['barcode']) && strlen($_POST['barcode']) > 1)
        {
          $this-> Users_model -> edit_user($_POST['barcode'] , null);
        }

        if(isset($_POST['phone']) && strlen($_POST['phone']) > 1)
        {
          $this-> Users_model -> edit_user(null , $_POST['phone']);
        }

        echo "<strong>تم تسجيلك , وجاري البحث عن زملاءك</strong>";

      }else{
        $this->load->view('admin/lost_user');
      }

  }
  //end lost

  public function need_medical_help(){

    if($_POST){

    } else {
      $this -> load -> view('medical/question_page');
    }

  }

}

?>
