<?php
session_start();
?>
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
          
    $b=$_SESSION['username'];          
    //$query3=mysqli_real_escape_string($conn,$_POST['name']);
    $result="SELECT customer.f_name, customer.m_name ,customer.l_name, s.s_type,s.s_name,customer.s_price, s.status, s.s_mode 
    FROM customer , service s 
    WHERE customer.s_price=s.s_price AND customer.f_name='$b'";
    //echo $result;
    //echo $_POST['user'];
    $records=mysqli_query($conn,$result) or die(mysqli_error($conn));
?>
<!DOCTYPE html>
<html>
    <body>
<style>
		body,html{
			color:black;
            background-image: url(image2.jpg);
           

        }
        .back{
      box-shadow: rgba(0,0,0,0.9);
      text-decoration: none;
      color: rgb(151, 190, 160);
      
      padding: 0px;
             
      -webkit-transition: all 0.2s;
      -moz-transition: all 0.2s;
    
     
      transition: all 0.2s;
    }
    .back a {
  color: #fff;
  font-size: 20px;
  font-family:'Segoe script';
  text-decoration: none;
  cursor: pointer;
  opacity: 0.7;
}
a:hover {
  opacity: 1;
}
		
		
		table
		{
			border-collapse: collapse;
			width:100%;
            position:center;
            margin-top: 12%;
			background-color: black;
            border-bottom: 2px white;
            color:white;
            background: rgba(0,0,0,0.8);
		}
		
		th,td
		{
			padding: 8px;
			text-align:center;
            border-bottom: 1px solid rgb(61, 61, 61);
			border-left: 1px solid rgb(63, 62, 62);
            border-top: 1px solid rgb(66, 66, 66);
			
			width:45px;
		}
		
		.bar {
        overflow: hidden;
        background-color: transparent;
        float: left; 
       
        
        }
        .bar a {
        float: left;
        font-size: 20px;
        color: white;
        text-align: center;
        padding: 275px 0px;
        text-decoration: none;
        font-family: inherit;
        }
        </style>
           
           <div class="back">
				
</table>
        </style>
        <body>
        <center><table>
<tr> 	
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last name</th>
		<th>Service Name</th>
        <th>Price</th>
        <th>Status</th>
        <th>Service type</th>
        <th>Service Mode</th>


  			</tr>
<?php
	  	
          while($row=mysqli_fetch_assoc($records))
           {	echo"<tr>";
               echo"<td>".$row['f_name']."</td>";
               echo"<td>".$row['m_name']."</td>";
               echo"<td>".$row['l_name']."</td>";
                echo"<td>".$row['s_name']."</td>";
                echo"<td>".$row['s_price']."</td>";
                echo"<td>".$row['status']."</td>";
                echo"<td>".$row['s_type']."</td>";
             
                echo"<td>".$row['s_mode']."</td>";
               
                echo"<tr>"; 
           }
?>
        
						<a href="customerhome.php">Back</a>
            </div>
</body>
</html> 
<?php
    
    mysqli_close($conn);
?>