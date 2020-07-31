<!DOCTYPE html>
<html>
<head>
  <title>sale report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SN-Traders</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="navbar.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Stock<samp class="caret"></samp></a>
        <ul class="dropdown-menu">
          <li><a href="add.php">Add Stock</a></li>
          <li><a href="showfilter.php">Show Stock</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Sale<samp class="caret"></samp></a>
        <ul class="dropdown-menu">
          <li><a href="sale.php">Add Sale</a></li>
          <li><a href="showsale.php">Show Sale</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Shop<samp class="caret"></samp></a>
        <ul class="dropdown-menu">
          <li><a href="shop.php">Add Shop</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Saleman<samp class="caret"></samp></a>
        <ul class="dropdown-menu">
          <li><a href="salesman.php">Add Saleman</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<?php

$from = $_POST['from'];
$to = $_POST['to'];
$saletype = $_POST['saletype'];

$username = "root";
$password = "";
$database = "sntraders";
$mysqli = new mysqli("localhost", $username, $password, $database);
if($saletype == 'gt'){
  $query = "SELECT * FROM sale where datee between '$from' AND '$to' AND cradit = '0' order by datee";

}
else {
  $query = "SELECT * FROM sale where datee between '$from' AND '$to' AND cradit > '0' order by datee";

}


echo '<div class="container">
        <table class="table table-striped">
          <thead>
            <tr>
            <th> <font face="Arial">id</font> </th>
              <th> <font face="Arial">Saleman</font> </th>
              <th> <font face="Arial">Flavour</font></th>
              <th> <font face="Arial">Area</font></th>
              <th> <font face="Arial">Shop</font> </th>
              <th> <font face="Arial">Discount(%age)</font> </th>
              <th> <font face="Arial">Cradit</font> </th>
              <th> <font face="Arial">Quantity</font> </th>
              <th> <font face="Arial">Date</font> </th>
              <th> <font face="Arial">Supply Expense</font> </th>
              <th> <font face="Arial">Shotage</font> </th>
              <th> <font face="Arial">Other Expense</font> </th>
              <th> <font face="Arial">Amount</font> </th>
          </tr>
        </thead>';
 $count=1;
 $total=0;
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["flavour"];
        $field3name = $row["area"];
        $field4name = $row["shop"];
        $field5name = $row["cradit"];
        $field6name = $row["mt"];
        $field7name = $row["quantity"];
        $field8name = $row["datee"];
        $field9name = $row["amount"];
        $expense = $row['expense'];
        $oe = $row['other_expense'];
        $shortage = $row['shortage'];
        $total = $total+$row['amount'];
        $id = $row["srno"];

        echo '<tr>
                  <td>'.$count++.'</td>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
                  <td>'.$field8name.'</td>
                  <td>'.$expense.'</td>
                  <td>'.$shortage.'</td>
                  <td>'.$oe.'</td>
                  <td>'.$field9name.'</td>


              </div>';
    }echo '</tr>
    <tr>
    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    <td><b>total....................</b></td>
    <td>'.$total.'</td>
    </tr>
    </table>';
    $result->free();
}

?>
</body>
</html>
