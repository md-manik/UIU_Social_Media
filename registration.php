<?php
session_start();
$conn = mysqli_connect('localhost','root','','uiu_social_media');
$sql= "SELECT * FROM customer";
$result= mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Registration</title>
</head>
<body>
    
</body>
</html>

<div class= "container">
  <div class= "row">
    
     <div class= "col-md-6 col-md-offset-3">

         <?php if(isset($_SESSION['error_msg']))  { ?>
            <div class= "alert alert-warning">
                 <strong> Warning! </strong> <?php echo $_SESSION['error_msg'];?> 
         </div>
     <?php }  ?>
    


     <h2> Sign Up </h2>
     <hr>

      <form action="confirmRegistration.php" method="POST">

        <div class="form-group">
            <label for="Name"> Name : </label>
            <input required type="text" class="form-control" name= "name" placeholder= "name">
         </div>

         <div class="form-group">
            <label for="Email"> Email : </label>
            <input required type="email" class="form-control" name= "email" placeholder= "email">
         
         </div>

         <div class="form-group">
            <label for="Password"> Password : </label>
            <input required type="password" class="form-control" name= "password" placeholder= "password">
         </div>

         <div class="form-group">
            <label for="Confirm Password"> Confirm Password : </label>
            <input required type="password" class="form-control" name= "password" placeholder= "confirm_password">
         </div>

         <button type="submit" class="btn btn-danger"> Submit </button><br>
         already have an account? <a class="btn btn-info" href="login.php"> Login </a>
         </form>

         </div>
     </div>   
 </div>

 <?php unset($_SESSION['error_msg']); ?>

 </body>
 </html>