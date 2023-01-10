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
           background-image: url(imma.png);
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
             height:420px;
             padding:80px 40px;
             box-sizing:border-box;
             color:#16384c;
             background: #ffffff;;
             border-radius: 7px;
             border:3px solid#16384c;
             }
             .hodlogin::before .hodlogin::after{
                 content: '';
             }
             h2
             {
                
                margin:0;
                padding:0 0 40px;
                color:#16384c;
                text-align:center;
             }
             .hodlogin input
             { width:100%;
               margin-bottom:20px;
             }
             .hodlogin input[type="text"], .hodlogin input[type="password"]
             {
                  border:none;
                  border-bottom:2px solid #16384c;
                  background: transparent;
                  outline:none;
                  height:40px;
                  color:#16384c;
                  font-size:16px;
             }
             .hodlogin input[type="submit"]
             {    border:none;
                  width: 80%;
                  margin:20px;
                  background: rgb(255,255,255);
                  outline:none;
                  height:40px;
                  color:rgb(0,0,0);
                  font-size:18px;
                  cursor:pointer;
                  border-radius:25px;
                  border:1px solid#16384c;
             }
             </style>

<title> DEPARTMENT LOGIN </title>
</head>
<body>
<div class="hodlogin">
<h2>DEPARTMENT-LOGIN</h2>

<form>
<input type="text" name="" placeholder="User_ID"><br><br>
<input type="password" name="" placeholder="Password"><br><br>
<input type="submit" name="" value="Sign in">
</form>
</div>
</body>