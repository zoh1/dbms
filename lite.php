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
        echo ("DATABASE CONNECTED");
    }
?>
<html>
<head>
    <style>body
        {
           margin:0;
           padding:0;
           background-image:url(image3.jpg);
           background-size:cover;
           font-family:'times new roman',times,serif;
           }
           .hodlogin
           {
             position:absolute;
             top:50%;
             left:50%;
             transform:translate(-50%,-50%);
             width:350px;
             height:450px;
             padding:80px 40px;
             box-sizing:border-box;
             color:#16384c;
             background: #ffffff;
             opacity: 0.9;
             border-radius: 7px;
             border:3px solid#021825;
             }
             
             h2
             {
                
                margin:0;
                padding:0 0 40px;
                color:#041a27;
                text-align:center;
             }
             .hodlogin input
             { width:100%;
               margin-bottom:30px;
             }
             .hodlogin input[type="text"], .hodlogin input[type="password"]
             {
                  border:none;
                  border-bottom:2px solid #071b27;
                  background: transparent;
                  outline:none;
                  height:40px;
                  color:#16384c;
                  font-size:15px;
             }
             .hodlogin input[type="submit"]
             {   
                  width: 80%;
                  margin: 20px;
                  display: block;
                  background: linear-gradient(to right, #010414,#58b0e2);
                  outline:none;
                  height:40px;
                  color:white;
                  font-size:18px;
                  cursor:pointer;
                  border-radius:20px;
                  border:2px solid#16384c;
             }
             </style>

<title> DEPARTMENT LOGIN </title>
</head>
<body>
<div class="hodlogin">
<h2>DEPARTMENT LOGIN</h2>

<form action="lite.php" method="POST">
<input type="text" name="username" placeholder="User Name"><br><br>
<input type="password" name="pass" placeholder="Password"><br><br>
<input type="submit" name="submit" value="Sign in">
</form>
</div>
<?php
    if(isset($_POST['submit']))

   {    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    

    $sql="INSERT INTO deplog(username,pass)
    VALUES ('$username', '$pass')";
        if (mysqli_query($conn, $sql))
      {
        header('location: departmenthome.php');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    }
      ?>
</body>
</html>