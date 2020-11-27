<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-6 text-right"><a href="final_form.html" class="btn btn-warning btn-sm font-weight-bold">ADD</a></div>
						</div>
						<div class="table-responsive">
							<?php
								$conn = mysqli_init();
								mysqli_real_connect($conn, 'butsayamas.mysql.database.azure.com', 'K63070098@butsayamas', 'Khaw63070098', 'itflab1', 3306);
								if (mysqli_connect_errno($conn))
								{
								    die('Failed to connect to MySQL: '.mysqli_connect_error());
								}
								$res = mysqli_query($conn, 'SELECT * FROM guestbook_final');
							?>
							<table class="table table-borderless table-hover">
								<thead>
									<tr>
										<th width="150px">Action</th>
										<th>ชื่อสินค้า</th>
										<th>ราคาต่อหน่วย</th>
                                        					<th>ส่วนลด(%)</th>
                                        					<th>ราคาคาหลังลด</th>
									</tr>
								</thead>
								<tbody>
									<?php
										while($Result = mysqli_fetch_array($res)) {
									?>
									<tr>
										<td><a href="final_delete.php?Id=<?php echo $Result['Id'];?>" 
										       class="btn btn-sm btn-danger mb-2 mb-md-0">DELETE</a>
										<td><?php echo $Result['Product'];?></td>
										<td><?php echo $Result['Price'];?></td>
                                        					<td><?php echo $Result['Discount'];?></td>
                                        					<td><?php echo $Result['Total'];?></td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
							<?php
								mysqli_close($conn);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
