<html>
<head>
  <title>Show data</title>
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
      <a class="navbar-brand" href="navbar.php">SN-Traders</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="navbar.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Stock<samp class="caret"></samp></a>
        <ul class="dropdown-menu">
          <li><a href="add.php">Add Stock</a></li>
          <li><a href="show_data.php">Show Stock</a></li>
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
$username = "root";
$password = "";
$database = "sntraders";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM product where datee between '$from' and '$to' order by datee";


echo '<div class="container">
        <table class="table" >
          <thead>
            <tr>
            <th> <font face="Arial">id</font> </td>
              <th> <font face="Arial">Name</font> </td>
              <th> <font face="Arial">Quantity</font> </td>
              <th> <font face="Arial">Date</font> </td>
              <th> <font face="Arial">Price</font> </td>
              <th> <font face="Arial">Size</font> </td>
          </tr>
        </thead>';
 $count=1;
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["quantity"];
        $field3name = $row["datee"];
        $field4name = $row["price"];
        $field5name = $row["size"];
        $id = $row["srno"]; 

        echo '<tr>
                  <td>'.$count++.'</td>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                  <td><form method="POST" action="edit_data.php">
                        <input type="hidden" value="'.$id.'" name="id">
                        <input type="submit" value="edit" >
                       </form>
                  </td>
                  <td><form method="POST" action="deletion.php">
                        <input type="hidden" value="'.$id.'" name="id">
                        <input type="submit" value="delete" >
                       </form>
                  </td>
              </tr>
              </div>';
    }
    $result->free();
}
?>
</body>
</html>
