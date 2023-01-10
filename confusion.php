<?php
session_start();
?>
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
        echo ("Connected to database ");
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
            background-image: url(ima.png);

		}
		
		table
		{
			border-collapse: collapse;
			width:100%;
			background-color: yellow;
		}
		
		th,td
		{
			padding: 8px;
			text-align:center;
			border-bottom: 1px solid #fff;
			border-left: 1px solid #fff;
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
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-family: inherit;
        }
        </style>
        
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
</table>
            <nav class="bar">
				<ul>
					<li>
						<a href="customerhome.php">Back</a>
					</li>
				</ul>
            </nav>
</body>
</html> 
<?php
    
    mysqli_close($conn);
?>