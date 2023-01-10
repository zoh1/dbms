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
        echo ("DATABASE CONNECTED");
    }
?>
<?php
$name = $_POST['name'];
$sql="DELETE FROM service
    WHERE s_id='$name'";

        if (mysqli_query($conn, $sql))
      {
        
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    
      ?>