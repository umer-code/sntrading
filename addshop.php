<?php 
$sname = $_POST['sname'];
$name = $_POST['name'];
$phno = $_POST['phno'];
$area = $_POST['area'];

 $mysqli = new mysqli("localhost", "root", "", "sntraders"); 
  
if ($mysqli ==  false) { 
    die("ERROR: Could not connect. ".$mysqli->connect_error); 
} 
  
$sql = "INSERT INTO shop (name, phno, sname, area)
VALUES ('$name', '$phno', '$sname', '$area')"; 
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