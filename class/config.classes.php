<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Config{

public $dataList =array();


public function getData(){

$userData = file_get_contents('user.json');
$this->dataList = json_decode($userData);

return $this->dataList;
}

}




?>