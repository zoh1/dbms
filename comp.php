<?php
session_start();

// initializing variables
$username = "";

$errors = array();
    $host="localhost";
    $dbuser="root";
    $pass="";
    $dbname="project";
    $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
    if(mysqli_connect_errno())
    {
        die("Connection Failed!".mysqli_connect_errno());
    }
    else
    {
        echo ("");
    }
?>

<html>
<head>
<style>
body
{
   margin:0;
   padding:0;
   background-size:cover;
   background-image:url(image11.jpg);
   font-family:'times new roman',times,serif;
   }
   .adminlogin
   {
     position:absolute;
	 top:50%;
	 left:50%;
	 transform:translate(-50%,-50%);
	 width:350px;
	
	 padding:80px 40px;
	 box-sizing:border-box;
	 color:#16384c;
     background: #fff;
     opacity: 0.8;
      border-radius: 7px;
     border:3px solid#16384c;
	 }
	 h2
	 {
		margin:0;
		padding:0 0 40px;
		color:#16384c;
		text-align:center;
	 }
	 .adminlogin input
	 { width:100%;
	   margin-bottom:20px;
	 }
	 .adminlogin input[type="text"], .adminlogin input[type="password"]
	 {
		  border:none;
		  border-bottom:2px solid#16384c;
		  background: transparent;
		  outline:none;
		  height:40px;
		  color:#16384c;
		  font-size:16px;
	 }
	 .adminlogin input[type="submit"]
	 {    border:none;
          width: 100px;
		  background: rgb(255,255,255);
		  outline:none;
		  height:40px;
      
      margin-left: 70px;
		  color:rgb(0,0,0);
		  font-size:18px;
		  cursor:pointer;
		  border-radius:25px;
          border:1px solid#16384c;
	 }</style>
<title> ADMIN LOGIN </title>
</head>
<body>
<div class="adminlogin">
<h2>COMPANY LOGIN</h2>
<form  method="post" action="comp.php">
<input type="text" name="username" placeholder="Username"><br><br>
<input type="password" name="pass" placeholder="Password"><br><br>
<input type="submit" name="submit" value="Sign in">
</form>
</div>

      <?php


if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['pass']);

  if (count($errors) == 0) {
  	$password = $password;
  	$query = "SELECT * FROM companylogin WHERE username='$username' AND pass='$password' LIMIT 1";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
	  header('location: companyhome.php');
  	
  	}else {
  		array_push($errors, "Wrong username or password");
	
  	}
  }
}
?>
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
</body>
</html>