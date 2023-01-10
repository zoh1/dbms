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
        echo ("");
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
        background-image: url(milky.jpg);
    }
    .form{
	   background-position:center;
	   background-size:cover;
	   position: relative;
       width: 500px;
		 height:675px;
		 margin:4% auto;
		 background: #fff;
		 padding:5px;
		 overflow: hidden;
         border: 5px solid  #000;
         border-radius: 10px;
    }
    .lol{
        
	 position:relative;
	 width: 235px;
	 transition: 0.5s;
	 padding:10px 0;
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
        padding: 12px 30px;
        background: #fff;
        border-radius: 24px;
        text-decoration: none;
        color: #000;
        font-weight: 700;
        font-size: 20px;
        margin: 0px 185px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        border: 2px solid #000;
}
 .are:hover{
    background: #3a7191;
    color: #fff;
 }
</style>
<title> Recharge </title>
</head>
<body>
    <div class="form">
    <h1>ANTENNAE OFFERS YOU WITH THESE PACKAGES</h1>

    <form  class="input" method="post"  action="antennaerecharge.php">
	<input type="text" name="f_name" class="lol" placeholder="First Name" required="">
    <input type="text"  name="m_name" class="lol" placeholder="Middle Name" required="">
    <input type="text"  name="l_name" class="lol" placeholder="Last Name" required="">
    <input type="number"  name="c_no" class="lol" placeholder="Phone no." required="">
    <input type="email" name="email_id" class="lol" placeholder="Email Id" required="">
    <input type="number" name="c_age" class="lol" placeholder="Age" required="">
    <input type="number" name="adno" class="lol" placeholder="Aadhaar Number" required="">
    <p style="font-size: 20px;">Please enter your DOB </p>
    <input type="date" name="c_dob" class="lol" placeholder="DOB: DD/MM/YYYY" required=""><br>
    <p style="font-size: 20px;">Please select your package </p><br>


    <input type="radio" name="package" value="399" >
    <label for="package1" style="color: #777";>399/-</label><br><br>
    <input type="radio" name="package" value="999">
    <label for="package2" style="color: #777";>999/-</label><br>
    
    <input type="text" class="lol" placeholder="Account Number" required="">
    <input type="text" class="lol" placeholder="Confirm Account Number" required="">
    <input type="text" class="lol" placeholder="IFSC Code" required=""><br><br>
    <button class="are" type="submit" name="submit">Recharge</button>
</form>
</div>
<?php
    if(isset($_POST['submit']))

   {    
    $adno = mysqli_real_escape_string($conn, $_POST['adno']);
    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $m_name = mysqli_real_escape_string($conn, $_POST['m_name']);
    $l_name=mysqli_real_escape_string($conn, $_POST['l_name']);
    $c_no=mysqli_real_escape_string($conn, $_POST['c_no']);
    $c_dob=mysqli_real_escape_string($conn, $_POST['c_dob']);
    $email_id=mysqli_real_escape_string($conn, $_POST['email_id']);
    $c_age=mysqli_real_escape_string($conn, $_POST['c_age']);

    $sql="INSERT INTO customer(adno, f_name, m_name,l_name, c_no, c_dob, email_id,c_age)
    VALUES ('$adno', '$f_name', '$m_name','$l_name','$c_no','$c_dob','$email_id','$c_age')";
        if (mysqli_query($conn, $sql))
      {
        header('location: afterrecharge.html');sin
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    }
      ?>
</body>
</html>