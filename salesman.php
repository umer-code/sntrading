<html lang="en">
<head>
  <title>insertion</title>
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
  <h2  style="text-align: center; color: green">Add Saleman</h2>
<table style="border: 1px; height:10px; margin-left: 200px; " ><tbody><tr>
  <td>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</td>
<tr><td>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</td></tr>
</tr></tbody></table>
  <form class="form-horizontal" action="addsaleman.php" method="POST">
  	<input type="text" name="controller" value="Student" hidden>
    <input type="text" name="action" value="add" hidden>
     

   <div class="form-group">
          
          <div class="col-sm-10">
             
      
  <table style="border: 1px; height:10px;" ><tbody><tr>
    <td>
      <label>name :</label> 
      <input type="text" name="name">
    </td>
    <td>&nbsp;&nbsp;&nbsp;</td>
<td>       <label >phone no : </label>
           <input  style=" width: :2px;" type="text" id="qu" name="phno"/>
</td></tr><tr>
<td>       <br><label >vehicle : </label>
           <input id="Priceid"  name="vehicle" style=" width: :2px;" type="text"/>
           </td>
           <td>&nbsp;&nbsp;&nbsp;</td>
           <td>
              <br><label >date : </label>
              <input name="date" type="date"/>
              
</td>
</tr></tbody></table>
          </div>
      </div>
     

      
      </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>
