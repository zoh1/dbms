<?php
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
        echo ("DATABASE CONNECTED");
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
        
        background-image: url(image1.jpg);
    }
    .form{  padding: 40px;
            background-position:center;
            background-size:cover;
           color:#fff;
            position: relative;
            width: 500px;
           
            margin:4% auto;
            background: rgba(0,0,0,0.9);
            padding:25px 20px ;
            overflow: hidden;
            border: 3px solid  rgb(255, 255, 255);
            border-radius: 15px;
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
     font-size: 15px;
     color:white;
 }
 .lol:hover{
       background: rgb(0, 0, 0);
        color:white;}
 .network
    { padding:0;
      border:2px solid #040d13;
      margin:3px 40px;
      height:28px;
      width:120px;
      text-indent: 20px;
      float: center;
      cursor: pointer;
      background: rgb(19, 19, 19);
      color: rgb(255, 255, 255);
      font-size: 15px;
      
      font-weight: 700;

    }
    .networks
    { padding:0;
      margin:3px 40px;
      height:28px;
      width:120px;
      text-indent: 20px;
      float: center;
      cursor: pointer;
      background: rgb(19, 19, 19);
      color: rgb(255, 255, 255);
      font-size: 15px;
      
      font-weight: 700;

      
    }
    .network:hover{
       background: rgb(0, 0, 0);
        color:white;}
 .are{
        display: inline-block;
        padding: 12px 30px;
        background: #fff;
        border-radius: 24px;
        text-decoration: none;
        color: #000;
        font-weight: 700;
        font-size: 20px;
        margin: 25px 185px;
        cursor: pointer;
        box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        border: 2px solid #000;
}
 .are:hover{
    background: #201831;
    color: #fff;
 }
 
</style>
<title> Recharge </title>
</head>
<body>
    <div class="form">
    <h3>NOVA RECHARGE</h3><br><br>
    
<form  class="input" method="post"  action="novarecharge.php">
	<input type="text" name="f_name" class="lol" placeholder="First Name" required="">
    <input type="text"  name="m_name" class="lol" placeholder="Middle Name" required=""><br><br>
    <input type="text"  name="l_name" class="lol" placeholder="Last Name" required="">
    <input type="number"  name="c_no" class="lol" placeholder="Phone no." required=""><br><br>
    <input type="email" name="email_id" class="lol" placeholder="Email Id" required="">
    <input type="number" name="c_age" class="lol" placeholder="Age" required=""><br><br>
    <input type="number" name="adno" class="lol" placeholder="Aadhaar Number" required=""><br><br>
    
    
        <p style="font-size: 20px;">Please enter your DOB </p>
    <input type="date" name="c_dob" class="lol" placeholder="DOB: DD/MM/YYYY" required=""><br><br>
    
   
    <p style="font-size: 20px;">Please select your package </p><br>
    <label for="packages"name="s_price" >Packages:</label>
              <select name="s_price" class="network">
                <option disabled selected>Packages</option>
               <option value="599">599/-</option>
               <option  value="525">525/-</option><br><br><br>

              


    
    <input type="number" class="lol" name="acc1" placeholder="Account Number" required="">
    
    <input type="text" class="lol" placeholder="IFSC Code" required=""><br>
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
    $s_price=mysqli_real_escape_string($conn, $_POST['s_price']);
    $s_name=mysqli_real_escape_string($conn, $_POST['Nova']);

    
    $sql="INSERT INTO customer(adno, f_name, m_name,l_name, c_no, c_dob, email_id,c_age,s_price,s_name)
    VALUES ('$adno', '$f_name', '$m_name','$l_name','$c_no','$c_dob','$email_id','$c_age','$s_price','$s_name')";


     
    
        if (mysqli_query($conn, $sql))
      {
        header('location: afterrecharge.html');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    }
      ?>

</body>
</html>