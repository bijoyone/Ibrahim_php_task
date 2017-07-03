<?php

//db connection

$db = new PDO('mysql:host=localhost;dbname=ibrahim;charset=utf8mb4', 'root', '');

$query = "SELECT * FROM `courses` ORDER BY id DESC";

$stmt = $db->query($query);
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Ibrahim Task</title>

    <!-- Bootstrap -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">

<style>
 footer {
background-color: #FFF;
position:fixed;
bottom: 0px;
width: 100%;
text-align: center;
}


</style>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Cos System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="create.php">Add Subject</a></li>
    </ul>
	
	 <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">List All</a></li>
    </ul>
  </div>
</nav>
  


<div class="container">
		
	<div class = "page-header">
   
		<h1 class="text-center">
			Cos System
		</h1>
   
	</div>

    <div class="row">
	
        <div class="col-md-offset-3 col-md-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Subject Code</th>
                        <th>Subject Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                foreach($courses as $course):

                ?>

                    <tr>
                        <td><?= $course['id'] ?></td>
                        <td><?php echo $course['subject_code'] ?></td>
                        <td><?= $course['subject_title'] ?></td>
                        <td>
                            <a href="show.php?id=<?=$course['id'];?>" class="btn btn-info" role="button">Show</a> 
                            <a href="edit.php?id=<?=$course['id'];?>" class="btn btn-info" role="button">Edit</a>  
                            <a href="delete.php?id=<?=$course['id'];?>" class="btn btn-info" role="button">Delete</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>

                </tbody>
            </table>

        </div>
    </div>
</div>

	

<footer align="center">
	<p>&copy; 2017 Md Ibrahim Hussain</p>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>