
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
        echo ("Connected to database ");
    }
    $res="SELECT s.s_id,s.s_name,s.s_type,c.co_id,c.co_name FROM service s,company c WHERE s.co_id= c.co_id";
    $records=mysqli_query($conn,$res);
?>
<!DOCTYPE html>
<html>
    <body>
<style>
		body,html{
			color:white;
			
		}
		
		table
		{
			border-collapse: collapse;
			width:100%;
			background: rgba(0,0,0,0.6);
		}
		
		th,td
		{
			padding: 8px;
			text-align:center;
			border-bottom: 1px solid #fff;
			border-left: 1px solid #fff;
			width:45px;
		}
		
        </style>
        <br><br><br><br><br><br><br><br><br><br><br><br>
  			<center><table>
<tr> 	
		<th>Service ID</th>
		<th>Service name</th>
		<th>Service type</th>
		<th>Company name</th>
        <th>Company ID</th>
  			</tr>
<?php
	  	
          while($service=mysqli_fetch_assoc($records))
           {	echo"<tr>";
               echo"<td>".$service['s_id']."</td>";
               echo"<td>".$service['s_name']."</td>";
               echo"<td>".$service['s_type']."</td>";
                echo"<td>".$service['co_id']."</td>";
                echo"<td>".$service['co_name']."</td>";
               
                echo"<tr>"; 
           }
?>
</table>
</body>
</html> 
<?php
    mysqli_close($conn);
?>