<?php
	//get the id
	$id = $_GET['id'];

	//get the row with the id
	$conn = new mysqli('localhost', 'root', '', 'db');
	$sql = "SELECT * FROM posts WHERE id = '$id'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>How to Add WYSIWYG Text Editor</title>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="text-center" style="margin-top:30px">How to Add WYSIWYG Text Editor</h1>
	<hr>
	<div class="row justify-content-md-center">
		<div class="col-sm-12">
			<h4><b>TITLE</b>: <?php echo $row['title']; ?></h4>
			<?php echo $row['post_text']; ?>
		</div>
	</div>
</div>

</body>
</html>