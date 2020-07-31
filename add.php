<?php
 ?>
<html lang="en">
<head>
  <title>insertion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

            $(document).ready(function () {
              var selectedVal = $("#myselect option:selected").val();
                //$('#Priceid').val(selectedVal);
                $("#myselect").change(function () {
                var arr = { "12": 1000, "24": 2000,"36": 3000,"48": 4000,"64": 5000 };
                var selectedVal = $("#myselect option:selected").val();
                var txt1 = selectedVal.substring(selectedVal.indexOf('1X')+2,selectedVal.indexOf(')-'));
                        $('#Priceid').val(arr[txt1]);
                    /* var selectedVal = $("#myselect option:selected").text();
                    var selectedVal = $("#myselect option:selected").val();
                        $('#Priceid').val(selectedVal.substring(selectedVal.indexOf(')-')+2));
                       var txt1 = val(selectedVal.substring(selectedVal.indexOf(')-')+2));*/

                        //document.write(a);
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
  var y = document.getElementById("name");
  var z = document.getElementById("Priceid");
  y.value = x.value*z.value;
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
<div class="container">
  
<table style="border: 1px; height:10px;" ><tbody><tr>
  <td>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</td>
<tr><td>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</td></tr>
<tr><td>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</td></tr>
</tr></tbody></table>
  <form class="form-horizontal" action="insertion.php" method="POST">
  	<input type="text" name="controller" value="Student" hidden>
    <input type="text" name="action" value="add" hidden>


   <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Product :</label>
          <div class="col-sm-10">


  <table style="border: 1px; height:10px;" ><tbody><tr>
  <td>



    <select id="myselect" name ="product">
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


          </td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>       <label >CRTN :&nbsp;</label>
           <input  style=" width: :2px;" type="text" id="qu" name="CRTN" onblur="myFunction()"/>
</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>       <label >Price # &nbsp;</label>
           <input id="Priceid"  name="price" style=" width: :2px;" type="text" onblur="Calculate()"/>
</td>
</tr></tbody></table>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Date:</label>
          <div class="col-sm-2">
           <input type="date" name="date" />
          </div>

              <label class="control-label col-sm-2" for="pwd"> Total price :</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="name" name="tp" >
      </div>
      </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
  function multiplyBy()
{
        num1 = document.getElementById("CRTN").value;
        num2 = document.getElementById("secondNumber").value;
        document.getElementById("result").innerHTML = num1 * 10;
}
</script>
</body>
</html>
