<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$con_pass=$_POST['confirm_password'];


$hash=password_hash($pass,PASSWORD_DEFAULT);

if($pass!=$con_pass){
    session_start();
    $_SESSION['error_msg']= "Password & Confirm Password Didn't Match";
    header("Location: registration.php");
}


$conn = mysqli_connect('localhost','root','','uiu_social_media');

$sql= "INSERT INTO customer VALUES(NULL, '$name', '$email', '$hash')";

if(mysqli_query($conn, $sql)) {
   // echo "registration successfully";
    session_start();
    $_SESSION['reg_msg']= "Registered Successfully.please login";
    header("Location: login.php");
}
?>