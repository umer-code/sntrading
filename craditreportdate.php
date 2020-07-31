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
<?php
include 'navbar.php';
$from = $_POST['from'];
$to = $_POST['to'];
$username = "root";
$password = "";
$database = "sntraders";
$mysqli = new mysqli("localhost", $username, $password, $database);

  $query = "SELECT srno, shop, datee, mt FROM `sale` WHERE datee between '$from' AND '$to'  AND mt > '0' order by datee";



echo '<div class="container">
        <table class="table table-striped">
          <thead>
            <tr>
            <th> <font face="Arial">id</font> </th>
            <th> <font face="Arial">Date</font> </th>
              <th> <font face="Arial">Shop</font> </th>
              <th> <font face="Arial">Cradit</font> </th>
          </tr>
        </thead>';
 $count=1;
 $total=0;
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {

        $shop = $row["shop"];
        $cradit = $row["mt"];
        $date = $row["datee"];
        $id = $row["srno"];
        $total = $total+$row['mt'];

        echo '<tr>
                  <td>'.$count++.'</td>
                  <td>'.$date.'</td>
                  <td>'.$shop.'</td>
                  <td>'.$cradit.'</td>

              </tr>
              </div>';
    }
    echo '</tr>
    <tr>
    <td></td><td></td>
    <td style="border:1px;"><b>total..................................................</b></td>
    <td>'.$total.'</td>
    </tr>
    </table>';
    $result->free();
}

?>
</body>
</html>
