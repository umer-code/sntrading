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
<?php
#$params = $this->data;
#$id = $params;

?>
<h1>
    <?php #var_dump($this->data);?>
</h1>
<div class="container">
    <h2>Edit Student</h2>
    <form class="form-horizontal" action="/mvc/public" method="get">
        <input type="text" name="controller" value="Student" hidden>
        <input type="text" name="action" value="edit" hidden>
        <input type="text" name="id" value="<?php echo $id;?>" hidden>

        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd"> Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Enter First Name" name="name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Age:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Major:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="major" placeholder="Enter Major" name="major">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Update</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>

