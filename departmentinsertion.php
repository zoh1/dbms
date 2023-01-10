<?php
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
?>
<!DOCTYPE html>
<html>
<head>
<style>
    *{
        
        font-family: Goudy Old Style;
    }
    body{
        background-image: url(imawge12.jpg);
    }
    .form{
	   background-position:center;
	   background-size:cover;
	   position: relative;
       width: 500px;
		 height:450px;
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
<title>Department</title>
</head>
<body>
    <div class="form">
    <h1>Enter Department Details</h1>
    
<form  class="input" method="post" action="departmentinsertion.php">
    <input type="text" name="s_id" class="lol" placeholder="Service ID" required="">
	<input type="text" name="value" class="lol" placeholder="New price" required="">
    
    <button class="are" type="submit" name="submit">Submit</button>
</form>
</div>
<?php
    if(isset($_POST['submit']))

   {    
    $s_id = mysqli_real_escape_string($conn, $_POST['s_id']);
    $value = mysqli_real_escape_string($conn, $_POST['value']);
    
    $sql="UPDATE service 
    SET s_price='$value'
    WHERE s_id = '$s_id'";
        if (mysqli_query($conn, $sql))
      {
        echo '<script>alert("UPDATION COMPLETE")</script>';

      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    }
      ?>
</body>
</html>