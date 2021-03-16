<?php
	$title = "User List Page";
	include('header.php');
?>
<?php
	$admin = json_decode(file_get_contents('../model/admin.json'));
?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<div class="container py=5">
			<h1 class="display-2 text-center mb-5">All Info</h1>

			<div class="row">
				<?php foreach($admin as $admins): ?>
						<div class="col-12 col-md-4">
							<div class="card p-4 mb-5">
								<img src="<?php echo $admins->profilePicture; ?>" alt="<?php echo $admins->username; 
									?>">
								<h2 class="h3 mb=0">
									User Name : <?php echo ucfirst($admins->username); ?>
								</h2>
								<p class="lead">
								<?php echo $admins->type; ?>
								</p>
								<hr class="my-4">
								<ul class="list-unstyled">
									<li>Date Of Birth: <?php echo $admins->dob; ?></li>
									<li>Gender: <?php echo $admins->gender; ?></li>
									<li>Mail Address: <?php echo $admins->email; ?></li>
									<li>Phone Number: <?php echo $admins->phone; ?></li>
									<li>Address: <?php echo $admins->address; ?></li>
								</ul>
							</div>
						</div>
				<?php endforeach; ?>
				
				
			</div>
		</div>	
			
	
	</body>
	</html>

<?php
	include('footer.php');
?>