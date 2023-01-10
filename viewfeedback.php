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
          
     
    //$query3=mysqli_real_escape_string($conn,$_POST['name']);
    $result="SELECT * 
    FROM feedback";
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
            background-image: url(image12.jpg);
            font-family:'goldy old style';
            font-size: 20px;

        }
        .back{
      box-shadow: rgba(0,0,0,0.9);
      text-decoration: none;
      color: rgb(151, 190, 160);
      margin: 10px;
      padding: 0px;
             
      -webkit-transition: all 0.2s;
      -moz-transition: all 0.2s;
    
     
      transition: all 0.2s;
    }
    .back a {
  color: #fff;
  font-size: 20px;
  font-family:'goldy old style';
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
        <header>
            
						<a href="companyhome.php">Back</a>
        </header>
        <body>
        <center><table>
<tr> 	

        <th>Service Name</th>
		<th>Rating</th>
		
		
        <th>Message</th>
        
        

  			</tr>
<?php
	  	
          while($row=mysqli_fetch_assoc($records))
           {	echo"<tr>";
               
            echo"<td>".$row['s_name']."</td>";
               echo"<td>".$row['star']."</td>";
                
                echo"<td>".$row['message']."</td>";
            
                echo"<tr>"; 
           }
?>
        
            </div>
</body>
</html> 
<?php
    
    mysqli_close($conn);
?>