<?php

require "register.classes.php";

if(isset($_POST['submit'])){

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];




 $register =  new Register();
$register->setData($fullname, $username, $password, $email);


$register->AddUser();

/* echo "<script>

alert('Information submitted');

window.location='login.html'
</script>" */;


echo "Information submitted";

}

?>