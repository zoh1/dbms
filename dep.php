<?php
session_start();
?>
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
           font-family:sans-serif;
           background-image:url("image13.jpg");
          }
          .head-form{
	          height:100%;
	          width:100%;
            
              background-position:center;
              background-size:cover;
              position:absolute;
             text-align: center;
              }
         .dep
         {
	          width:300px;
	           height:400px;
	           position: relative;
	            margin:6% auto;
                background:  linear-gradient(to right, #08070f,#2a455e);
               opacity: 0.9;
	           padding:60px;
               border: 4px solid  #010918;
          }
          .input-field
        {
    	     width:100%;
    	     padding:10px 0px;
    	     margin:5px 0;
    	     border-left:0;
    	     border-top:0;
	         border-right:0;
	         border-bottom:1px solid rgb(233, 234, 236);
	         outline:none;
             background:none;
             
        }
        .submit-btn
       {
	        width:85%;
            padding:10px 30px;
            cursor: pointer;
            display: block;
            margin:auto;
            background: white;
         	border:1px solid black;
          	outline:none;
         	border-radius:30px;
           color: rgb(0, 0, 0);
           font-size: 15px;
        }
          input::placeholder{color: rgb(190, 185, 185);}

          input,text,textarea
          {color:azure;
           }
           .submit-btn:hover{
       background: rgb(23, 23, 65);
       color:white;

            } </style>
        <title>HOD</title>
       
    </head>
        <body>
                <div class="head-form">
                
                     <form class="dep" action="dep.php" method="post">
                     <input type="text" class="input-field" name="h_name" placeholder="HOD Name"><br><br>
                     <input type="text" class="input-field" name="h_id" placeholder="HOD ID"><br><br>
                     <input type="text" class="input-field" name="dept_id" placeholder="Department ID"><br><br>
                     <input type="text" class="input-field" name="exp_in_field" placeholder="Experience in Field"><br><br>
                     <input type="text" class="input-field" name="no_of_emp" placeholder="Number of Employees"><br><br><br>
                     <button type="submit" class="submit-btn" name="submit">SUBMIT</button>
                    </form>
                   </div>
                    
                   <?php
    if(isset($_POST['submit']))

   {    
    $h_name = mysqli_real_escape_string($conn, $_POST['h_name']);
    $h_id = mysqli_real_escape_string($conn, $_POST['h_id']);
    $dept_id = mysqli_real_escape_string($conn, $_POST['dept_id']);
    $exp_in_field = mysqli_real_escape_string($conn, $_POST['exp_in_field']);
    $no_of_emp = mysqli_real_escape_string($conn, $_POST['no_of_emp']);


    $sql="INSERT INTO hod(h_name, h_id, dept_id, exp_in_field, no_of_emp)
    VALUES ('$h_name', '$h_id', '$dept_id','$exp_in_field','$no_of_emp')";
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
                     
                     
                     
                     













</html>