<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<!--<form method="POST" action="show1.php">
<div class="form-group">
	 <label class="control-label col-sm-2" for="pwd">Flavour#:</label>
	<select name="flavour">
		<option value="0">All</option>
		<option value="Kurleez Catchy Ketchup">Kurleez Catchy Ketchup</option>
		<option value="Kurleez Mirch Masala">Kurleez Mirch Masala</option>
		<option value="Kurleez Salt & Paper">Kurleez Salt & Paper</option>
		<option value="Kurleez Special salt">Kurleez Special salt</option>
		<option value="Kurleez Swis cheez">Kurleez Swis cheez</option>
		<option value="Kurleez Barbecue">Kurleez Barbecue</option>
		<option value="Kurleez Grek yorgert">Kurleez Grek yorgert</option>
		<option value="Peanutz Salted">Peanutz Salted</option>
	</select>

</div>
<label class="control-label col-sm-2" for="pwd">Size#:</label>
<select name="size">
	<option value="0">All</option>
	<option value="24">24</option>
	<option value="36">36</option>
	<option value="48">48</option>
	<option value="64">64</option>
</select>
<input type="submit" name="submit">
</form>
</div>-->
<div class="container">
  <form action="show_data.php" method="POST">
    <label>From :</label>
    <input type="date" name="from">
    <label>To :</label>
    <input type="date" name="to">
    <input type="submit" name="submit">
  </form>
</div>
</body>
</html>