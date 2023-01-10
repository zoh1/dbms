
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
        background-image: url(image10.png);
    }
    .form{
        background-position:center;
        background-size:cover;
        position: relative;
        width: 500px;
		height:620px;
		margin:4% auto;
		background: #fff;
		padding:5px;
		overflow: hidden;
        border: 3px solid  #000;
        border-radius: 10px;
        
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
        font-size: 20px;
        margin: 30px 200px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.2);
        border: 2px solid #000;
 }
 .are:hover{
    background: #201831;
    color: #fff;
 }

</style>
<title>Employee Details</title>
</head>
<body>
    <div class="form">
    <h1>Enter Employee Details</h1>
    
    <form method="post" class="input" action="employeeinsertion.php" >
                <input type="number" name="e_id" class="lol" placeholder="Employee Id" required="">
                <input type="text" name="f_name" class="lol" placeholder="First Name" required="">
                <input type="text"name="l_name"  class="lol" placeholder="Last Name" required="">
                <input type="text" name="e_pos" class="lol" placeholder="position" required="">
                <input type="number"name="e_no"  class="lol" placeholder="Phone no." required="">
                <input type="email" name="e_add" class="lol" placeholder="Email" required="">
                
                <input type="number" name="dept_id" class="lol" placeholder="Department Id" required="">
                <input type="text" name="co_id" class="lol" placeholder="Company Name" required="">
                <input type="number" name="adno" class="lol" placeholder="Aadhaar Number" required=""><br><br>
                <p style="font-size: 20px;">Please enter your Gender </p>
                <input type="text" name="gen" class="lol" placeholder="Gender" required="">
                <button class="are" type="submit" name="submit">Submit</button>
    </form>
    </div>
<?php
    if(isset($_POST['submit']))

   {    
    $e_id = mysqli_real_escape_string($conn, $_POST['e_id']);
    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
    $e_no = mysqli_real_escape_string($conn, $_POST['e_no']);
    $e_pos = mysqli_real_escape_string($conn, $_POST['e_pos']);
    $e_add = mysqli_real_escape_string($conn, $_POST['e_add']);
    $gen = mysqli_real_escape_string($conn, $_POST['gen']);
    $adno = mysqli_real_escape_string($conn, $_POST['adno']);
   
    $dept_id = mysqli_real_escape_string($conn, $_POST['dept_id']);
    $co_id = mysqli_real_escape_string($conn, $_POST['co_id']);

    $sql="INSERT INTO employee(e_id, f_name, l_name, e_no, e_pos,e_add, gen, adno, dept_id, co_id)
    VALUES ('$e_id', '$f_name', '$l_name','$e_no','$e_pos','$e_add',' $gen','$adno','$dept_id','$co_id')";
        if (mysqli_query($conn, $sql))
      {
        header ('location: afterempserdepinsertion.html');   
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    }
      ?>
</body>
</html>