<html lang="en">

<head>
    <title>Student</title>

    <script type="text/javascript">
        function sendingId(id)
        {
            document.getElementById("show_me").innerHTML = "<input type='text' name=id hidden value=" +id+
                ">"
        }
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php


?>
<div class="container">
    <h2>List of Students</h2>
    <p>The table shows the list of students:</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Major</th>
        </tr>
        </thead>
        <tbody>
        <form method="get" id="show_me" action="/mvc/public">
            <input type="text" name="controller" value="Student" hidden>
            <?php
            echo '<tr>';
            foreach ($this->data as $student)
            {
                echo '<td>' . $student['id'] . '</td><td>' . $student['name'] . '
		        	</td>
		        	<td>' . $student['age'] . '
		        	</td><td>' . $student['major'] . '
		        	</td>

		        	<td><button type="submit" name="action" value="edit" class="btn btn-default" onclick="sendingId('.$student['id'].')">Edit</button></td><td></td></tr>';
            }
            ?>
        </form>
        </tbody>
    </table>
</div>

</body>
</html>
