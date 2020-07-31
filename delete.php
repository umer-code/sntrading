
<html lang="en">
<head>
    <title>Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Delete Student</h2>
    <form class="form-horizontal" action="http://localhost/mvc/public" method="get">

        <input type="text" name="controller" value="Student" hidden>
        <input type="text" name="action" value="delete" hidden>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Student Id:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id" placeholder="Enter Student Id" name="id" value="">

            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Delete</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>


