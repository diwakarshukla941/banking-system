
<?php include 'db.php'; ?>
	<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Hello, world!</title>
	<style>
		.row{
			justify-content:center;
		}
		h1{
			text-align:center;
			background-color:black;
			color:white;
			border-radius:17px;
		}
	</style>
  </head>
  <body>
	<?php
		$getid =$_GET['view'];
		$select ="SELECT * FROM user WHERE id='$getid'";
		$connect = mysqli_query($conn,$select);
		$row = mysqli_fetch_assoc($connect);
		$name = $row['Name'];
		$account_no = $row['ac_no'];
		$balance = $row['balance'];
		$date = $row['date'];
		$ph_no = $row['ph_no'];
		$email = $row['email'];

	?>
		<div class="row">
				<div class="col-3 ms-3 mt-3">
					<div class="card" style="height:35rem;width: 30rem;border-radius:17px;">
						<h1><i class="bi bi-person-circle"></i></h1>
						<div class="card-body">
							<h4>NAME:<h4>
                            <h5><?php echo $name ;?></h5>
                            <h4>Account No:</h4>
                            <h5><?php echo $account_no;?></h5>
                            <h4>Balnce Amount:</h4>
                            <h5><?php echo $balance;?></h5>
                            <h4>Date:</h4>
                            <h5><?php echo $date ;?></h5>
                            <h4>Phone no:</h4>
                            <h5><?php echo $ph_no ;?></h5>
                            <h4>Email id:</h4>
                            <h5><?php echo $email ;?></h5>
						</div>
					</div>
				</div>
		</div>
  </body>
</html>