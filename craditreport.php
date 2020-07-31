<?php include 'navbar.php';?>
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
  <div class="container">
  <form method="POST" action="craditreportdate.php">
		<label>From :</label>
		<input type="date" name="from">
		<label>To :</label>
		<input type="date" name="to"><br>

		<br>
		<input type="submit" name="submit">
	</form>
</div>
</body>
</html
