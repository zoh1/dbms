

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
    $deptname=mysqli_real_escape_string($conn,$_POST['name']);
    $result="SELECT d.dept_id , d.dept_name,d.no_of_emp, c.co_name, d.h_id, h.h_name
    FROM department d, hod h, company c
    WHERE d.dept_id=h.dept_id AND d.co_name=c.co_name AND d.dept_id='$deptname'";
    //echo $result;
    
    $records=mysqli_query($conn,$result) or die(mysqli_error($conn));
?>
<!DOCTYPE html>
<html>
    <body>
<style>
		body,html{
			color:black;
            background-image: url(image16.jpg);
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
		<th>Department ID</th>
		<th>Department Name</th>
		<th>No of employees</th>
		<th>Company Name</th>
        <th>HOD ID</th>
        <th>HOD Name</th>
       


  			</tr>
<?php
	  	
          while($row=mysqli_fetch_assoc($records))
           {	echo"<tr>";
               echo"<td>".$row['dept_id']."</td>";
               echo"<td>".$row['dept_name']."</td>";
               echo"<td>".$row['no_of_emp']."</td>";
                echo"<td>".$row['co_name']."</td>";
                echo"<td>".$row['h_id']."</td>";
                echo"<td>".$row['h_name']."</td>";
                

               
                echo"<tr>"; 
           }
?>
</table>
</body>
</html> 
<?php
    
    mysqli_close($conn);
?>