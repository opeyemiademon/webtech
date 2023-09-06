<?php

require "config.classes.php";

class Register extends Config{

  public  $fullname ='';
  public  $email ='';
  public  $username ='';
   public $password ='';


   public function setData($name, $user_name, $pass, $mail ){

    $this->fullname = $name;
    $this->email =$mail;
    $this->username = $user_name;
    $this->password = $pass;
   }


    public function AddUser(){

    
    $data = $this->getData();
     $profile =array(
    'id'=>count($data)+1,
    'fullname'=>$this->fullname,
    'username'=>$this->username,
    'email'=>$this->email,
    'password'=>$this->password,
    );  


    
    array_push($data, $profile);
    $en_dataList = json_encode($data);

    file_put_contents('user.json', $en_dataList);  


    }


}

?>