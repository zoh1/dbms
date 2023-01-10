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
 <html>
<head>
  <style>body
    {
    margin:0;
    padding:0;
    font-family: 'Trebuchet MS', sans-serif;
    background-image: url(image16.jpg);
   }
   .service-form{
	height:100%;
	width:100%;
   
   background-position:center;
   background-size:cover;
   position:absolute;
   text-align: center;
   }
   .ser
   {
	 width:350px;
	
	 position: relative;
	 margin:6% auto;
     background: #ffff;
     opacity: 0.9;
	 padding:60px;
     border: 4px solid  #06235c;
     }

     .input-field
    {
    	 width:100%;
    	 padding:10px 0px;
    	 margin:5px 0;
    	 border-left:0;
    	 border-top:0;
	     border-right:0;
	     border-bottom:2px solid rgb(3, 20, 65);
	     outline:none;
	     background:none;
 } 
 .input-field:hover{
   background: rgb(20, 20, 63);
   color:white;
}
     
    .network
    { padding:0;
      border:2px solid #16384c;
      margin:3px 30px;
      height:25px;
      width:100px;
      text-indent: 25px;
      float: right;
      cursor: pointer;

    }
    .network:hover{
       background: rgb(23, 23, 65);
       color:white;
    }
    label{float: left;
          margin: 5px;
          }
     .submit-btn
     {
	  width:70%;
    padding:10px 30px;
    cursor: pointer;
    display: inline-block;
    margin:auto;
   	border:2px solid rgb(20, 11, 46);
     outline:none;
   	border-radius:30px;
    background: white;
    color: rgb(0, 0, 0);
    font-weight: 700;
    font-size: 15px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.2);

}
   .submit-btn:hover{
      background: rgb(8, 33, 66);
      color: rgb(230, 230, 233);
   }
     
  </style>
<title>SERVICE</title>

</head>
<body>
<div class="service-form">
         <form class="ser"method="post" action="services.php">
             <input type="text" class="input-field" name="s_id" placeholder="Service ID"><br><br><br>
             <input type="text" class="input-field" name="co_id" placeholder="Company ID"><br><br><br>
             <input type="text" class="input-field" name="s_name" placeholder="Service Name"><br><br><br>
             <input type="text" class="input-field" name="s_price" placeholder="Price"><br><br><br>

                <label for="service" name="s_type">Service Type :</label>
               <select name="s_type" class="network">
                <option disabled selected>Type</option>
                <option name="s_type" value="pre-paid">Pre-paid</option>
                <option name="s_type" value="post-paid">Post-paid</option>
               <option  name="s_type" value="broadband">Broadband</option>
               </select><br><br><br>

                <label for="service" name="s_mode">Service Mode:</label>
                  <select name="s_mode" class="network">
                  <option disabled selected>Mode</option>
                  <option   name="s_mode" value="2G/3G">2G/3G</option>
                  <option   name="s_mode" value="4G">4G</option>
                  <option   name="s_mode" value="5G">5G</option>
                  </select><br><br><br>

                <label for="service" name="stat">Status  :</label>
                  <select  name="status" class="network">
                  <option disabled selected>Status</option>
                  <option  name="status" value="Active">Active</option>
                  <option  name="status" value="Inactive">Inactive</option>
                  </select><br><br><br>
                  <button type="submit" name="submit" class="submit-btn">SUBMIT</button>
         </form>
      
</div>
<?php
    if(isset($_POST['submit']))

   {    
    $s_id = mysqli_real_escape_string($conn, $_POST['s_id']);
    $co_id = mysqli_real_escape_string($conn, $_POST['co_id']);
    $s_name = mysqli_real_escape_string($conn, $_POST['s_name']);
    $s_type = mysqli_real_escape_string($conn, $_POST['s_type']);
    $s_mode = mysqli_real_escape_string($conn, $_POST['s_mode']);
    $s_mode = mysqli_real_escape_string($conn, $_POST['s_price']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);


    $sql="INSERT INTO service(s_id, co_id, s_name,s_type, s_mode, status, s_price)
    VALUES ('$s_id', '$co_id', '$s_name','$s_type','$s_mode','$status','$s_price')";
        if (mysqli_query($conn, $sql))
      {
        
        header('location: afterempserdepinsertion.html');
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    }
      ?>
</body>

</html>
   