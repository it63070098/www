  
<?php
	$conn = mysqli_connect('butsayamas.mysql.database.azure.com', 'K63070098@butsayamas', 'Khaw63070098', 'itflab1');
	$sql = 'DELETE FROM guestbook_final WHERE Id = '.$_GET['Id'].'';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Zone</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #37cf23;
		}
	</style>
</head>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<h2 align="center">
						<?php
							if(mysqli_query($conn, $sql)) {
								echo "DELETE COMPLETED";
							}
							else {
								echo "FAILED TO DELETE";
							}
						?>
						</h2>
						<p align="center" class="mt-4 mb-0"><a href="final_index.php" class="btn btn-sm btn-success">BACK</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
