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
        echo ("  ");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Goudy Old Style;
        }
        body{
            background-image: url(image4.jpg);
        }
       .form{ 
	   background-position: center;
	   background-size: cover;
	   position: relative;
       width: 400px;
		 height: 600px;
		 margin: 4% auto;
		 background: #fff;
		 padding:10px;
		 overflow: hidden;
         border: 2px solid  #000;
         border-radius: 1px;
         }
         .lol{
        
        position: relative;
        width: 350px;
        transition: 0.5s;
        padding: 10px;
        margin-top: 20px;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 2px solid #999;
        outline: none;
        background: transparent;
        font-size: 20px;
    
    }
    .mes{
        
        position: relative;
        height: 100px;
        width: 365px;
        transition: 0.5s;
        padding: 20px 0;
        margin: 5px 5px;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        
        border-bottom: 2px solid #999;
        outline: none;
        background: transparent;
        font-size: 20px;
        
    }
    .are{
        display: inline-block;
        padding: 10px 20px;
        background: #fff;
        border-radius: 24px;
        text-decoration: none;
        color: #000;
        border: 2px solid black;
        font-weight: 700;
        font-size: 20px;
        cursor: pointer;
        margin: 70px 150px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.2);
}
.are:hover{
    background: #201831;
    color: #fff;
 }
 .form h2{
    text-align: center;
    font-size: 30px;
 }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK</title>
</head>
<body>
    <div class="form">
        <h2>Feedback</h2>
    <form method="post" class="input" action="feedback.php">
        <input type="text" class="lol" name="name" placeholder="Name" required="">
        <input type="email" class="lol" name="email_id" placeholder="Email id" >
        <input type="text" class="lol" name="rate_speed" placeholder="Rate the Speed AND Connectivity" >
        <input type="text" class="lol" name="s_name" placeholder="Service Name" >
        <textarea class="mes" name="message" placeholder="message" required=""></textarea>
        <button class="are" type="submit" name="submit">Submit</button>
    </form>
    </div>
    <?php
    if(isset($_POST['submit']))

   {    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email_id = mysqli_real_escape_string($conn, $_POST['email_id']);
    $s_name = mysqli_real_escape_string($conn, $_POST['s_name']);
    $rate_speed = mysqli_real_escape_string($conn, $_POST['rate_speed']);
   
    $message = mysqli_real_escape_string($conn, $_POST['message']);


    $sql="INSERT INTO feedback(name, email_id, message,s_name, rate_speed)
    VALUES ('$name','$email_id','$message','$s_name','$rate_speed')";
    
     if (mysqli_query($conn, $sql))
     {
        $res= "CALL star()";  
        if(mysqli_query($conn,$res))
        {

             header('location: afterfeedback.html');
        } 
    
      else {
        echo "Error: " . $res . "<br>" . mysqli_error($conn);
      }
    }
      mysqli_close($conn);
    
}
      ?>
</body>
</html>