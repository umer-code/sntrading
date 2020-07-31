<?php 
$date = $_POST['date'];
$name = $_POST['name'];
$phno = $_POST['phno'];
$vehicle = $_POST['vehicle'];

 $mysqli = new mysqli("localhost", "root", "", "sntraders"); 
  
if ($mysqli ==  false) { 
    die("ERROR: Could not connect. ".$mysqli->connect_error); 
} 
  
$sql = "INSERT INTO saleman (name, phno, vehicle, datee)
VALUES ('$name', '$phno', '$vehicle', '$date')"; 
    if($mysqli->query($sql) ==  true)
{ 
    
    echo "Records inserted successfully."; 
} 
	else{
		echo "ERROR: Could not able to execute $sql. "
           .$mysqli->error; 
	}
  
// Close connection 
$mysqli->close(); 


?>