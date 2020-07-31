<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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

$username = "root";
$password = "";
$database = "sntraders";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM stock";


echo '<div class="container">
        <table class="table" >
          <thead>
            <tr>
            <th> <font face="Arial">id</font> </td>
              <th> <font face="Arial">Name</font> </td>
              <th> <font face="Arial">Quantity</font> </td>

          </tr>
        </thead>';
 $count=1;
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["crtn"];

        $id = $row["srno"]; 

        echo '<tr>
                  <td>'.$count++.'</td>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>


              </tr>
              </div>';
    }
    $result->free();
}
?>
  <footer class="footer"></footer>
</body>
</html>
