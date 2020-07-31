<?php
$date = $_POST['date'];
$product = $_POST['product'];
$quantity = $_POST['CRTN'];
$size = substr($product, strpos($product,'X')+1,2);
//$price = substr($product, strpos($product,')-')+2,2);
$flavour = substr($product, 0,strpos($product,'-('));
$price = $_POST['price'];
$total = $price*$quantity;

 $mysqli = new mysqli("localhost", "root", "", "sntraders");

if ($mysqli ==  false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}

$sql = "INSERT INTO product (name, datee, quantity, size, price,flavour )
VALUES ('$product', '$date', '$quantity', '$size', '$total', '$flavour')";
$res = mysqli_query($mysqli,"select crtn from stock where name = '".$product."' ");
$row = $res->fetch_assoc();

$q = $row['crtn']+$quantity;
	$result = mysqli_query($mysqli,"update stock set crtn = $q where name = '".$product."'");

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
