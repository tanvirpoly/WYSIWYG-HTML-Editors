<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WYSIWYG Text Editor</title>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="text-center" style="margin-top:30px">WYSIWYG Text Editor</h1>
	<hr>
	<div class="row justify-content-md-center">
		<div class="col-sm-8">
			<?php
				if(isset($_SESSION['error']))
				{
					echo "
						<div class='alert alert-danger text-center'>
							".$_SESSION['error']."
						</div>
					";
					unset($_SESSION['error']);
				}

				if(isset($_SESSION['success']))
				{
					echo "
						<div class='alert alert-success text-center'>
							".$_SESSION['success']."
						</div>
					";
					unset($_SESSION['success']);
				}

			?>
			<table class="table table-bordered">
				<thead>
					<th>ID</th>
					<th>Title</th>
					<th><a href="add.php" class="btn btn-primary btn-sm">Add New</a></th>
				</thead>
				<tbody>
					<?php
						//connection
						$conn = new mysqli('localhost', 'root', '', 'db');
						
						$sql = "SELECT * FROM posts";
						$query = $conn->query($sql);

						while($row = $query->fetch_assoc())
						{
							echo "
								<tr>
									<td>".$row['id']."</td>
									<td>".$row['title']."</td>
									<td><a href='view.php?id=".$row['id']."' class='btn btn-secondary btn-sm'>View</a></td>
								</tr>
							";
						} 
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

</body>
</html>