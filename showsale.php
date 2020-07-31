
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

<div class="container">
	<form method="POST" action="showsaledate.php">
		<label>From :</label>
		<input type="date" name="from">
		<label>To :</label>
		<input type="date" name="to"><br>
		<b>GT <input type="radio" name="saletype" value="gt" required>
		LMT</b> <input type="radio" name="saletype" value="lmt" required>

		<br>
		<input type="submit" name="submit">
	</form>

</div>
</body>
</html>
