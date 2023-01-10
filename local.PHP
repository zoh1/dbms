<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();
    $host="localhost";
    $dbuser="root";
    $pass="";
    $dbname="miniproject";
    $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
    if(mysqli_connect_errno())
    {
        die("Connection Failed!".mysqli_connect_errno());
    }
    else
    {
        echo (" ");
    }
// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $adno = mysqli_real_escape_string($conn, $_POST['adno']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
  
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE username='$username' OR adno='$adno' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['adno'] === $adno) {
      array_push($errors, "Account already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = ($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO register(username, adno, pass) 
				VALUES('$username', '$adno', '$password')";
	$query1	="INSERT INTO customer(adno)
	VALUES('$adno')";
				
	  mysqli_query($conn, $query);
	  mysqli_query($conn, $query1);
	  $_SESSION['username'] = $username;
	  $_SESSION['adno'] = $adno;

  }
}

//login

if (isset($_POST['sign'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['pass']);

  if (count($errors) == 0) {
  	$password = $password;
  	$query = "SELECT * FROM register WHERE username='$username' AND pass='$password' LIMIT 1";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
	  header('location: customerhome.php');
  	
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
<html>
<head>
<style>   
    *{
   margin:0;
   padding:0;
   font-family:sans-serif;
  }
  body{
	background-image: url(image6.png);
  }
.log{
	height:100%;
	width:100%;
	
   background-position:center;
   background-size:cover;
   position:absolute;
   }
   .error{
		font-size: 20px;
		color:#999;
		justify: center;
   }
.form-box
   {
	 width:400px;
	 height:500px;
	 position:relative;
	 margin:6% auto;
	 background: #ffff;
	 padding:5px;
     border: 4px solid  #201831;
	 overflow:hidden;
	 }
.button-box
 {  
	 width:220px;
	 margin:35px auto;
	 position:relative;
	 box-shadow:0 0 20px 9px #ff61241f;

	 border-radius:30px;
 }
 .toggle-btn
 {
	 padding:10px 30px;
	 cursor:pointer;
	 background: transparent;
	 border:0px;
	 outline:none;
     position:relative;
	
	
 }
 .toggle-bt
 {
	 padding:10px 30px;
	 cursor:pointer;
	 background: transparent;
	 border:0px;
	 outline:none;
     position:relative;
	
	
 }
 
 #btn{
	 top:0;
	 left:0;
	 position:absolute;
	 width:110px;
	 height:100%;
	 background: #fff1;
	 border-radius:30px;
	 transition: .5s;
 }
 .input-group
 {
	 top:90px;
	 position:absolute;
	 width:310px;
	 transition: 0.5s;
 }
 .input
 {
    top:180px;
    position:absolute;
    width:300px;
    transition: 0.5s;
}
 .input-field
 {
	 width:100%;
	 padding:10px 0;
	 margin:7px 0;
	 border-left:0;
	 border-top:0;
	 border-right:0;
	 border-bottom:1px solid #999;
	 outline:none;
	 background:none;
 }
.submit-btn
{
	width:85%;
    padding:10px 30px;
    cursor:pointer;
    display:block;
    margin:auto;
    background: #16343c;
	border:0;
	outline:none;
	border-radius:30px;
	color: #fff;
}
.check-box
{
	margin: 30px 10px 30px 0px;
}
span
{ 
  color:777;
  font-size:15px;
  bottom:62.5px;
  position:absolute;
}
#signin
{ left:50px;
}
#register
{ left:450px;
}
p{
	color:#999;
}
    </style>
  <title> LOGIN/REGISTER FORM </title>
  <link rel="stylesheet" href="tel.css">
</head>
<body>
 <div class="log">
   <div class="form-box">
    <div class="button-box">
	 <div id="btn"></div>
	  <button type="button" class="toggle-btn"  onclick="signin()"> Sign in</button>
	  <button type="button" class="toggle-bt"  onclick="register()"> Register</button>
	</div>
	<div></div>
	 <form id="signin"class="input" action="local.php" method="POST">
	    <input type="text" class="input-field" name="username" placeholder="User ID" required>
	    <input type="password" class="input-field" name="pass" placeholder="Enter Password" required>
	    <input type="checkbox" class="check-box"><span>Remember Password</span>
	    <button type="submit" class="submit-btn" name="sign">Sign in</button>
	  </form>
	<form id="register" class="input-group"  action="local.php" method="POST">
	    <input type="text" class="input-field" name="username" placeholder="User Name" required>
	    <input type="text" class="input-field" name="adno" placeholder="Aadhar.No" required>
		<br>
                
                 <input type="password" name="password_1" class="input-field" placeholder="Enter Password" required >
                 <input type="password" name="password_2" class="input-field" placeholder="Confirm Password" required><br><br><br>
     <button type="submit" class="submit-btn" name="register">Register</button>
	</form>
	</div>
	</div>
	      <script> 
		  var x= document.getElementById('signin');
		  var y= document.getElementById('register');
		  var z= document.getElementById('btn');
		  
		  function register(){
		  x.style.left='-400px';
		  y.style.left='50px';
		  z.style.left='110px';
		  }
		   function signin(){
		  x.style.left='50px';
		  y.style.left='450px';
		  z.style.left='0px';
		  }
		  </script>
	</body>
	</html>