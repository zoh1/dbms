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
        background-image: url(image13.jpg);
    }
    .form{
            background-position:center;
    background-size:cover;
    background: #fff;
    position: relative;
    width: 500px;
    height:675px;
    margin:4% auto;
            
    padding:15px;
    overflow: hidden;
    border: 2px solid  #000;
    border-radius: 24px;
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
        cursor: pointer;
        color: #000;
        font-weight: 700;
        font-size: 20px;
        margin: 25px 185px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        border: 2px solid #000;
}
 .are:hover{
    background: #201831;
    color: #fff;
 }
 .dependent-selects__parent{
   margin-top: 24px;
   margin-right: 24px;;
 }
</style>
<title> Recharge </title>
</head>
<body>
    <div class="form">
    <h1>COSMOS OFFERS YOU WITH THESE PACKAGES</h1>
    
<form  class="input" method="post"  action="recharge.php">
	<input type="text" name="f_name" class="lol" placeholder="First Name" required="">
    <input type="text"  name="m_name" class="lol" placeholder="Middle Name" required="">
    <input type="text"  name="l_name" class="lol" placeholder="Last Name" required="">
    <input type="number"  name="c_no" class="lol" placeholder="Phone no." required="">
    <input type="email" name="email_id" class="lol" placeholder="Email Id" required="">
    <input type="number" name="c_age" class="lol" placeholder="Age" required="">
    <input type="number" name="adno" class="lol" placeholder="Aadhaar Number" required="">
    <p style="font-size: 20px;">Please enter your DOB </p>
    <input type="date" name="c_dob" class="lol" placeholder="DOB: DD/MM/YYYY" required=""><br>
    <p style="font-size: 20px;">Please Select Your Service Name And Package </p><br>
  
  Service Name: <select name="Name" id="id_parent" data-child-id='id_child' class='dependent-selects__parent'>
      <option value="">Name</option>
      <option value="Nova" data-child-options="599|#525">Nova</option>
      <option value="Rosette" data-child-options="199|#999">Rosette</option>
      <option value="Rosette" data-child-options="699|#799">Planeta</option>
      <option value="Rosette" data-child-options="499|#399">Omega</option>
      <option value="Rosette" data-child-options="899|#1000">Helix</option>
      <option value="Rosette" data-child-options="1999|#2999">Orion</option>
    </select>
    
    Package: <select name="s_price" id="id_child" class='dependent-selects__child'>
      <option value="">price</option>
      <option value="599">599</option>
      <option value="525">525</option>
      <option value="199">199</option>
      <option value="999">999</option>
      <option value="699">699</option>
      <option value="799">799</option>
      <option value="499">499</option>
      <option value="399">399</option>
      <option value="899">899</option>
      <option value="1000">1000</option>
      <option value="1999">1999</option>
      <option value="2999">2999</option>
    </select>
    
    <br>
    <br>
    
    
    <script src='dependent-selects.js'></script>
    
 
    <input type="number" class="lol" placeholder="Account Number" required="">
    
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

    $sql="INSERT INTO customer(adno, f_name, m_name,l_name, c_no, c_dob, email_id,c_age, s_price)
    VALUES ('$adno', '$f_name', '$m_name','$l_name','$c_no','$c_dob','$email_id','$c_age','$s_price')";
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