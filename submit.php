<?php

if(isset($_POST['submit'])){

if(isset($_POST['firstName']) && !empty($_POST['firstName'])){
    $firstName = $_POST['firstName'];
}

if(isset($_POST['lastName']) && !empty($_POST['lastName'])){
    $lastName = $_POST['lastName'];
}

if(isset($_POST['address']) && !empty($_POST['address'])){
    $address = $_POST['address'];

}

if(isset($_POST['department']) && !empty($_POST['department'])){
    $department = $_POST['department'];
}

if(isset($_POST['position']) && !empty($_POST['position'])){
    $position = $_POST['position'];
}


if(isset($_POST['salary']) && !empty($_POST['salary'])){
    $salary = $_POST['salary'];
}

if(isset($_POST['birthday'])){
$birthday = $_POST['birthday'];

}

if(isset($_POST['status']) && !empty($_POST['status'])){
    $status = $_POST['status'];
}

$studentData = file_get_contents('student.json');
$dataList = json_decode($studentData);



  $profile =array(
    'id'=>count($dataList)+1,
    'firstName'=>$firstName,
    'lastName'=>$lastName,
    'address'=>$address,
    'department'=>$department,
    'position'=>$position,
    'status'=>$status,
    'salary'=>$salary,
    'birthday'=>$birthday,

);  


array_push($dataList, $profile);
  $en_dataList = json_encode($dataList);
  

file_put_contents('student.json', $en_dataList);  

echo "<script>

alert('Information submitted');

window.location='add_new.html'
</script>";

}
?>