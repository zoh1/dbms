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
    <h1>Enter  Details</h1>
   
    <form method="POST" action="companyinsertion.php" class="input" >
    <input type="number"  name="s_id" class="lol" placeholder="Company Id" required="">
	<input type="text"  name="co_name" class="lol" placeholder="Company Name" required="">
    <input type="text" name="co_loc"  class="lol"placeholder="Company Location" required="">
    <input type="date"  name="date_of_est" class="lol" placeholder="Date of Establishment" required="">
    <input type="number" name="no_of_emp" class="lol" placeholder="No.Of Employees" required="">
    <button class="are" type="submit" name="submit">Submit</button>
</form>
</div>
<?php
    if(isset($_POST['submit']))

   {    
    $s_id = mysqli_real_escape_string($conn, $_POST['s_id']);
    $co_name = mysqli_real_escape_string($conn, $_POST['co_name']);
    $co_loc = mysqli_real_escape_string($conn, $_POST['co_loc']);
    $date_of_est = mysqli_real_escape_string($conn, $_POST['date_of_est']);
    $no_of_emp = mysqli_real_escape_string($conn, $_POST['no_of_emp']);


    $sql="INSERT INTO company(s_id, co_name, co_loc, date_of_est, no_of_emp)
    VALUES ('$s_id', '$co_name', '$co_loc','$date_of_est','$no_of_emp')";
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