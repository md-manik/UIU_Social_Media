<?php  

session_start();

$conn = mysqli_connect('localhost','root','','uiu_social_media');

$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page </title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/style.css" class="rel">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 
</head>
<body>
  <?php include 'nav.php' ?>



<!-- about us start-->
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}


.topic-section {
  padding: 10px;
  text-align: center;
  background-color: orange;
  color: white;
}

</style>
</head>
<body>

<div class="topic-section">
  <h1>Explore topics that you are interest in</h1>
</div>

<section class="services">
	<!--services-box-container------------------->
	<div class="s-box-container">
	<!--service-box-1---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="1" src=".jpg" />
	<!--servies-name---------->
	<h1>News and Events</h1>
	<!--details------>
	</div>
		<!--service-box-2---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="2" src=".jpg" />
	<!--servies-name---------->
	<h1>Notice</h1>
	<!--details------>
	
	</div>
		<!--service-box-3---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="3" src=".jpg" />
	<!--servies-name---------->
	<h1>Club_Forum Updates</h1>
	<!--details------>
	
	</div>
	<!--service-box-4---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="2" src="img/success_story.jpg" />
	<!--servies-name---------->
	<h1>Success Story</h1>
	<!--details------>
	
	</div>
	</div>
	</section>


<!-- about us end -->




<!-- services section CSS start-->


<style>
    body{
	margin:0px;
	padding: 0px;
	background-color: #FFFFFF;
	font-family: calibri;
}
a{
	text-decoration:none;
}
.services{
	width:100%;
	height: 100vh;
	display: flex;
	flex-direction: column;
	justify-content: space-evenly;
	align-items: center;
}
.s-heading{
	text-align:center;
}
.s-heading h1{
	color:#576975;
	font-size: 3rem;
	font-weight: 400;
	letter-spacing: 1px;
	margin: 0px;
}
.s-heading p{
	color: rgba(87,105,117,0.60);
	font-size: 1rem;
	margin: 5px;
	text-align: center;
}
.s-box-container{
	width:100%;
	display: flex;
	justify-content: center;
	align-items: center;
}
.s-box{
	display:flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	border-radius: 10px;
	width:300px;
	padding: 20px 25px;
	height: 400px;
	box-sizing: border-box;
	margin: 30px;
	position: relative;
}
.s-box img{
	height: 150px;
}
.s-box h1{
	color:#576975;
	letter-spacing: 1px;
	font-size: 1.5rem;
	margin-bottom: 8px;
	
}
.s-box p{
	color: rgba(87,105,117,0.90);
	text-align: center;
}
.s-btn{
	width: 140px;
	height: 40px;
	border-radius: 20px;
	border:1px solid rgba(74,144,226,0.50);
	display: flex;
	justify-content: center;
	align-items: center;
	color:#576975;
	margin-top:10px; 
}
.bar{
	width: 100px;
	height: 6px;
	position: absolute;
	left: 50%;
	top: 0%;
	transform: translateX(-50%);
	background-color:#4a90e2; 
	border-radius: 0px 0px 10px 10px;
	display: none;
	animation: bar 0.5s;
}
.s-box:hover{
	box-shadow: 2px 2px 30px rgba(0,0,0,0.08);
	transition: all ease 0.3s;
}
.s-btn:hover{
	background-color:#4a90e2;
	border: 1px solid #4a90e2;
	color:#FFFFFF;
	transition: all ease 0.3s;
}
.s-box:hover .bar{
	display: block;
}
@keyframes bar{
	0%{
		width:0px;
	}
	100%{
		width:100px;
	}
}
@media(max-width:1050px){
	.s-box-container{
		flex-wrap: wrap;
		
	}	
	.services{
		height: auto;
	}
	.s-heading{
		margin: 15px;
	}
	.s-box{
		flex-grow: 1;
	}
	
}

/*footer*/
.footer {
  /* position: fixed;*/
   left: 0;
   bottom: 0;
   height: 9%;
   width: 100%;
   background-color: #ff7e00;
   color: black;
   text-align: left;
   margin: 170px 0 0 0;
}
.p1{
	margin: -45px 0 0 200px;
}
.p2{
	margin: -25px 0 0 400px;
}
.p3{
	margin: -25px 0 0 550px;
}
</style>

<!-- services section CSS end-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<!--footer start-->

<div class="footer">
  <a  class="btn btn_info" href=""><b>UIU Social<br>Media</b></a>
  <p class="p1"><b>Copyright 2022</b></p>
  <p class="p2"><b>About</b></p>
  <p class="p3"><b>Community Guidelines</b></p>
</div>

<!--footer end-->
</body>
</html>