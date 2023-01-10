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
   
    $result="SELECT employee.e_id, employee.f_name, employee.l_name, employee.e_no,employee.e_pos, 
    employee.co_name, employee.dept_id , company.co_name
    FROM employee , company , department  
    WHERE employee.co_name=company.co_name AND employee.dept_id=department.dept_id";
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
		<th>First name</th>
		<th>Last name</th>
		<th>Employee No.</th>
        <th>Employee position</th>
        <th>Company name</th>
        <th>Department ID</th>


  			</tr>
<?php
	  	
          while($row=mysqli_fetch_assoc($records))
           {	echo"<tr>";
               echo"<td>".$row['e_id']."</td>";
               echo"<td>".$row['f_name']."</td>";
               echo"<td>".$row['l_name']."</td>";
                echo"<td>".$row['e_no']."</td>";
                echo"<td>".$row['e_pos']."</td>";
                echo"<td>".$row['co_name']."</td>";
                echo"<td>".$row['dept_id']."</td>";

               
                echo"<tr>"; 
           }
?>
</table>
</body>
</html> 
<?php
    
    mysqli_close($conn);
?>