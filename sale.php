
<!DOCTYPE html>
<html>
<head>
	<title>sale</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>

	$(document).ready(function () {
              var selectedVal = $("#myselect option:selected").val();
                //$('#Priceid').val(selectedVal);
                $("#myselect").change(function () {
                	var arr = { "12": 1000, "24": 2000,"36": 3000,"48": 4000,"64": 5000 };


                    // var selectedVal = $("#myselect option:selected").text();
                    var selectedVal = $("#myselect option:selected").val();
                        //$('#Priceid').val(selectedVal.substring(selectedVal.indexOf(')-')+2));
					var txt1 = selectedVal.substring(selectedVal.indexOf('1X')+2,selectedVal.indexOf(')-'));
                        $('#Priceid').val(arr[txt1]);


                        //alert(txt1);
                        function doTheMath(){
 //var quantity = document.getElementById("qu").value;
 //var price = document.getElementById("price").value;
 //var product = parseInt(quantity, 10) * parseInt(price);
//document.getElementById("name").value = product;

}

                });


            });

function myFunction() {

  var x = document.getElementById("qu");
  var y = document.getElementById("rs");
  var z = document.getElementById("Priceid");
  y.value = x.value*z.value;
}
function percentage(){
	var x = document.getElementById("cradit");
  var y = document.getElementById("rs");
  y.value = y.value-(x.value*y.value)/100;
}
function udar()
{
	var x = document.getElementById("rs");
	var y = document.getElementById("mt");
		x.value = x.value-y.value;


}
function cashcal()
{
	var crtn = document.getElementById("qu");
	var selectedVal = $("#myselect option:selected").val();
	 	document.getElementById("demo").innerHTML=selectedVal;

document.getElementById("demo").innerHTML= crtn.value;
}
        </script>
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
	$mysqli = new mysqli("localhost", "root", "", "sntraders");
		if ($mysqli ==  false) {
    		die("ERROR: Could not connect. ".$mysqli->connect_error);
		}
	$query = "SELECT name from saleman";
	$query1 = "SELECT area from shop";
	$query2 = "SELECT name from shop";


?>
<div class="container">
<form action="addsale.php" method="POST" class="form-horizontal">
<table class="table table-sm">
	<tr>
		<td>

				<label>salename :</label>
				<select name="saleman">
					<?php
						if ($result = $mysqli->query($query)) {
    						while ($row = $result->fetch_assoc()) {
    							echo '<option>'.$row['name'].'</option>';
    						}
    					}
    				?>
				</select>

		</td>
		<td>
			<div class="form-group">
			<label>Area :</label>
			<select name="area">
				<?php
					if ($result = $mysqli->query($query1)) {
    					while ($row = $result->fetch_assoc()) {
    						echo '<option>'.$row['area'].'</option>';
    					}
    				}
    			?>

			</select>
		</div>
		</td>
		<td>
			<div class="form-group">
			<label>Shop :</label>
			<select name="shop">
				<?php
					if ($result = $mysqli->query($query2)) {
    					while ($row = $result->fetch_assoc()) {
    						echo '<option>'.$row['name'].'</option>';
    					}
    				}
    			?>

			</select>
		</div>
		</td>
		<td>
			<div class="form-group">
			<label>Flavour :</label>
			<select id="myselect" name ="product">
				<option>select the flavour</option>
                <option value="Kurleez Catchy Ketchup-(1X48)-10">Kurleez Catchy Ketchup-(1X48)-10</option>
                <option value="Kurleez Catchy Ketchup-(1X64)-10">Kurleez Catchy Ketchup-(1X64)-10</option>
                <option value="Kurleez Catchy Ketchup-(1X36)-20">Kurleez Catchy Ketchup-(1X36)-20</option>
                <option value="Kurleez Catchy Ketchup-(1X24)-30">Kurleez Catchy Ketchup-(1X24)-30</option>
                <option value="Kurleez Catchy Ketchup-(1X12)-50">Kurleez Catchy Ketchup-(1X12)-50</option>



                <option value="Kurleez Mirch Masala-(1X48)-10">Kurleez Mirch Masala-(1X48)-10</option>
                <option value="Kurleez Mirch Masala-(1X64)-10">Kurleez Mirch Masala-(1X64)-10</option>
                <option value="Kurleez Mirch Masala-(1X36)-20">Kurleez Mirch Masala-(1X36)-20</option>
                <option value="Kurleez Mirch Masala-(1X24)-30">Kurleez Mirch Masala-(1X24)-30</option>
                <option value="Kurleez Mirch Masala-(1X12)-50">Kurleez Mirch Masala-(1X12)-50</option>




                <option value="Kurleez Salt & Paper-(1X48)-10">Kurleez Salt & Paper-(1X48)-10</option>
                <option value="Kurleez Salt & Paper-(1X64)-10">Kurleez Salt & Paper-(1X64)-10</option>
                <option value="Kurleez Salt & Paper-(1X36)-20">Kurleez Salt & Paper-(1X36)-20</option>
                <option value="Kurleez Salt & Paper-(1X24)-30">Kurleez Salt & Paper-(1X24)-30</option>
                <option value="Kurleez Salt & Paper-(1X12)-50">Kurleez Salt & Paper-(1X12)-50</option>




                <option value="Kurleez Special salt-(1X48)-10">Kurleez Special salt-(1X48)-10</option>
                <option value="Kurleez Special salt-(1X64)-10">Kurleez Special salt-(1X64)-10</option>
                <option value="Kurleez Special salt-(1X36)-20">Kurleez Special salt-(1X36)-20</option>
                <option value="Kurleez Special salt-(1X24)-30">Kurleez Special salt-(1X24)-30</option>
                <option value="Kurleez Special salt-(1X12)-50">Kurleez Special salt-(1X12)-50</option>



                <option value="Kurleez Swis cheez-(1X48)-10">Kurleez Swis cheez-(1X48)-10</option>
                <option value="Kurleez Swis cheez-(1X64)-10">Kurleez Swis cheez-(1X64)-10</option>
                <option value="Kurleez Swis cheez-(1X36)-20">Kurleez Swis cheez-(1X36)-20</option>
                <option value="Kurleez Swis cheez-(1X24)-30">Kurleez Swis cheez-(1X24)-30</option>
                <option value="Kurleez Swis cheez-(1X12)-50">Kurleez Swis cheez-(1X12)-50</option>






                <option value="Kurleez Barbecue-(1X48)-10">Kurleez Barbecue-(1X48)-10</option>
                <option value="Kurleez Barbecue-(1X64)-10">Kurleez Barbecue-(1X64)-10</option>
                <option value="Kurleez Barbecue-(1X36)-20">Kurleez Barbecue-(1X36)-20</option>
                <option value="Kurleez Barbecue-(1X24)-30">Kurleez Barbecue-(1X24)-30</option>
                <option value="Kurleez Barbecue-(1X12)-50">Kurleez Barbecue-(1X12)-50</option>







                <option value="Kurleez Grek yorgert-(1X48)-10">Kurleez Grek yorgert-(1X48)-10</option>
                <option value="Kurleez Grek yorgert-(1X64)-10">Kurleez Grek yorgert-(1X64)-10</option>
                <option value="Kurleez Grek yorgert-(1X36)-20">Kurleez Grek yorgert-(1X36)-20</option>
                <option value="Kurleez Grek yorgert-(1X24)-30">Kurleez Grek yorgert-(1X24)-30</option>
                <option value="Kurleez Grek yorgert-(1X12)-50">Kurleez Grek yorgert-(1X12)-50</option>

                <option value="Peanutz Salted-(1X48)-10">Peanutz Salted-(1X48)-10</option>
            </select>
        </div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="form-group">
			<label >CRTN :</label>
        	<input  style=" width: :2px;" type="number" id="qu" name="CRTN" onblur="myFunction()" required />
        </div>
		</td>
		<td><div class="form-group">
			<label >Unit Price :</label>
        	<input id="Priceid"  name="price" style=" width: :2px;" type="number" onblur="Calculate()" required/>
        </div>
		</td>
		<td>
			<div class="form-group">
			<label>Date :</label>
			<input type="date" name="date">

		</div>
		</td>
		<td>
			<div class="form-group">
			<label>Discount :</label>
			<input type="number" placeholder="if any" name="cradit" id="cradit"  placeholder="in percentage" onblur="percentage()">
		</td>
	</tr>
	<tr>

		<td>
			<div class="form-group">
			<label>Cradit :</label>
			<input type="number" placeholder="if any" name="mt" id="mt" onblur="udar()">
		</div>
		</td>
		<td>
		<div class="form-group">
		<label>Suply Expense :</label>
		<input type="number" name="expense" id="expense">
	</div>
</td>
	<td>
		<div class="form-group">
			<label>Shortage :</label>
			<input type="number" name="shortage" id="shortage">
		</div>
	</td>

	<td>
		<div class="form-group">
			<label>Other Expense :</label>
			<input type="number" name="oe" id="OE">
		</div>
	</td>
</table>
<input type="hidden" id="cihand" name="cihand">
<center>
	<input type="button" name="click" value="check details" onclick="cashcal()">
	<input type="submit" name="submit" value="direct submit" onclick="cashcal()">
</center>
</form>
</div>
<script>
	function cashcal()
	{
		var crtn = document.getElementById("qu").value;
		var selectedVal = $("#myselect option:selected").val();
		var unit = document.getElementById("Priceid").value;
		var discount = document.getElementById("cradit").value;
		var mt = document.getElementById("mt").value;
		var expense = document.getElementById("expense").value;
		var shortage = document.getElementById("shortage").value;
		var oe = document.getElementById("OE").value;
				var arr = { "12": 1000, "24": 2000,"36": 3000,"48": 4000,"64": 5000 };
				var arr2 = { "12": 500, "24": 1000,"36": 1500,"48": 2000,"64": 3500 };
				var selectedVal = $("#myselect option:selected").val();
				var txt1 = selectedVal.substring(selectedVal.indexOf('1X')+2,selectedVal.indexOf(')-'));
				if(discount == 0)
				{
					var crtn_rate =	arr[txt1];
				}
				else{
					var crtn_rate =	arr2[txt1];

				}
				var amount = crtn_rate*crtn;
				var cih = amount-(discount*amount)/100;
				var ca =cih-mt-expense-oe-shortage;
				document.getElementById("cihand").value=ca;


	 	document.getElementById("fla").innerHTML="flavour........................................................................................................................................................................................................................"+selectedVal;
		document.getElementById("crtn").innerHTML= "SKD....................................................................................................................................................................................................................................."+crtn;
		document.getElementById("unit").innerHTML= "unit price.............................................................................................................................................................................................................................."+crtn_rate;
		document.getElementById("discount").innerHTML= "discount............................................................................................................................................................................................................................"+discount;
		document.getElementById("e").innerHTML= "suply expense.............................................................................................................................................................................................................................."+expense;
		document.getElementById("m").innerHTML= "cradit....................................................................................................................................................................................................................................."+mt;
		document.getElementById("s").innerHTML= "shortage..................................................................................................................................................................................................................................."+shortage;
		document.getElementById("oe").innerHTML= "other expense............................................................................................................................................................................................................................."+oe;
		document.getElementById("cih").innerHTML= "cash in hand............................................................................................................................................................................................................................."+ca;
		
	}
</script>
<br><br><br><br>
<div class="container">
<div id="fla"> </div>
<div id="crtn"> </div>
<div id="unit"> </div>
<div id="discount"> </div>
<div id="m"> </div>
<div id="s"> </div>
<div id="e"> </div>
<div id="oe"> </div>
<div id="cih"> </div>
<div id="rate"> </div>

</div>
</body>
</html>
