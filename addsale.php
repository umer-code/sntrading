<?php
$date = $_POST['date'];
$product = $_POST['product'];
$quantity = $_POST['CRTN'];
$name = $_POST['saleman'];
$area = $_POST['area'];
$shop = $_POST['shop'];
$amount = $_POST['cihand'];
$cradit = $_POST['cradit'];
$udar = $_POST['mt'];
$expense = $_POST['expense'];
$oe = $_POST['oe'];
$shortage = $_POST['shortage'];

 $mysqli = new mysqli("localhost", "root", "", "sntraders");

if ($mysqli ==  false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}

$sql = "INSERT INTO sale (name, datee, quantity, flavour, area, shop, amount, cradit, mt, expense, other_expense, shortage ) VALUES ('$name', '$date', '$quantity', '$product', '$area', '$shop', '$amount', '$cradit', '$udar', '$expense', '$oe', '$shortage')";
$res = mysqli_query($mysqli,"select crtn from stock where name = '".$product."' ");
$row = $res->fetch_assoc();

$q = $row['crtn']-$quantity;
if ($quantity > $row['crtn']) {

	echo "not enough inventory <br> there are only ".$row['crtn']." items are remaining";
}
else{
	$result = mysqli_query($mysqli,"update stock set crtn = $q where name = '".$product."'");

    if($mysqli->query($sql) ==  true)
{

    echo "Records inserted successfully.";
}
	else{
		echo "ERROR: Could not able to execute $sql. "
           .$mysqli->error;
	}
}

// Close connection
$mysqli->close();
?>
