<?php
$date = $_POST['date'];
$product = $_POST['product'];
$quantity = $_POST['CRTN'];
$id = $_POST['id'];

$size = substr($product, strpos($product,'X')+1,2);
$price = substr($product, strpos($product,')-')+2,2);
$tp = $price*$quantity;
$flavour = substr($product, 0,strpos($product,'-('));

 $mysqli = new mysqli("localhost", "root", "", "sntraders"); 
  
if ($mysqli ==  false) { 
    die("ERROR: Could not connect. ".$mysqli->connect_error); 
} 
  
$sql = "UPDATE product SET size=$size, quantity = $quantity, price = $tp, datee='$date',flavour='$flavour', name='$product' where id=$id";
    if($mysqli->query($sql) ==  true)
{ 
    
    echo "Records edited successfully."; 
} 
	else{
		echo "ERROR: Could not able to execute $sql. "
           .$mysqli->error; 
	}
  
// Close connection 
$mysqli->close(); 


?>