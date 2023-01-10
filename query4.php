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
        echo ("CONNECTED TO DATABASE");
    }
    
    $result="SELECT e.e_id,e.f_name,e.l_name, e.e_pos, e.e_sal, e.co_name,c.co_name
    FROM employee e, company c
    WHERE e.co_name=c.co_name ";
    //echo $result;
    
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
		
        </style>
        
  			<center><table>
<tr> 	
		<th>Employee ID</th>
		<th>First Name</th>
		<th>Last name</th>
		<th>Position</th>
        <th>Salary</th>
        <th>Company Name</th>
        


  			</tr>
<?php
	  	
          while($row=mysqli_fetch_assoc($records))
           {	echo"<tr>";
               echo"<td>".$row['e_id']."</td>";
               echo"<td>".$row['f_name']."</td>";
               echo"<td>".$row['l_name']."</td>";
                echo"<td>".$row['e_pos']."</td>";
                echo"<td>".$row['e_sal']."</td>";
                echo"<td>".$row['co_name']."</td>";
                

               
                echo"<tr>"; 
           }
?>
</table>
</body>
</html> 
<?php
    
    mysqli_close($conn);
?>