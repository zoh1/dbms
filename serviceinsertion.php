<?php
    $host="localhost";
    $dbuser="root";
    $pass="";
    $dbname="telecom";
    $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
    if(mysqli_connect_errno())
    {
        die("Connection Failed!".mysqli_connect_errno());
    }
    else
    {
        echo (" DATABASE CONNECTED ");
    }
?>
<!DOCTYPE html>
<html>
<head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: Goudy Old Style;
    }
    body{
        background-image: url(image8.jpg);
    }
    .form{
	   background-position:center;
	   background-size:cover;
	   position: relative;
       width: 500px;
		 height:380px;
		 margin:4% auto;
		 background: #fff;
		 padding:5px;
		 overflow: hidden;
         border: 2px solid  #000;
         border-radius: 1px;
    }
    .lol{
        
	 position:relative;
	 width: 235px;
	 transition: 0.5s;
	 padding:20px 0;
	 margin:5px 5px;
	 border-left:0;
	 border-top:0;
	 border-right:0;
	 border-bottom:1px solid #999;
	 outline:none;
	 background:transparent;
     font-size: 20px;
 }
 .are{
        display: inline-block;
        padding: 10px 20px;
        background: #fff;
        border-radius: 24px;
        text-decoration: none;
        color: #000;
        font-weight: 700;
        cursor: pointer;
        font-size: 20px;
        margin: 50px 200px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.2);
        border: 2px solid #000;
 }
 .are:hover{
    background: #201831;
    color: #fff;
 }
</style>
<title>Service Details</title>
</head>
<body>
<div class="form">
    <h1>Enter Service Details</h1>
   
    <form method="POST" action="serviceinsertion.php" class="input" >
    <input type="number"  name="s_id" class="lol" placeholder="Service Id" required="">
	<input type="text"  name="s_name" class="lol" placeholder="Service Name" required="">
    <input type="text" name="s_type"  class="lol"placeholder="Service Type" required="">
    <input type="text"  name="s_mode" class="lol" placeholder="Service Mode" required="">
    <input type="number" name="s_price" class="lol" placeholder="Service Price" required="">
    <button class="are" type="submit" name="submit">Submit</button>
</form>
</div>
<?php
    if(isset($_POST['submit']))

   {    
    $s_id = mysqli_real_escape_string($conn, $_POST['s_id']);
    $s_name = mysqli_real_escape_string($conn, $_POST['s_name']);
    $s_type = mysqli_real_escape_string($conn, $_POST['s_type']);
    $s_mode = mysqli_real_escape_string($conn, $_POST['s_mode']);
    $s_price = mysqli_real_escape_string($conn, $_POST['s_price']);


    $sql="INSERT INTO service(s_id, s_name, s_type, s_mode, s_price)
    VALUES ('$s_id', '$s_name', '$s_type','$s_mode','$s_price')";
        if (mysqli_query($conn, $sql))
      {
        header('location: aftercompanyinsertion.html');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    }
      ?>

</body>
</html>    