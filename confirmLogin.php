<?php
//ob_start();
//$value = isset($_POST['value']) ? $_POST['value'] : '';
//$email = "";
//$pass="";
$email =$_POST['email'];
$pass=$_POST['password'] ;
//$email =array_key_exists('email',$array) ? $array['email']: '';
//$pass=array_key_exists('password',$array) ? $array['password']: '';


$conn=mysqli_connect('localhost','root','','uiu_social_media');

$sql="SELECT * FROM customer WHERE email='$email' ";

$result =mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);

if($rowcount==1)
{ while ($row=mysqli_fetch_assoc($result)) {
    if (password_verify($pass, $row['password'])) {
        session_start();
   $_SESSION['login']==true;
   $_SESSION['customer_id']=$row['customer_id'];
   header("Location: user_home.php");
    }
  }
}
else{
    echo 'wrong email and password';
}
?>