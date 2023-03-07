<?php
		include "db.php";
		if(isset($_POST['submit'])){
        $name=$_POST['Name'];
        $Account=$_POST['account_no'];
        $Balance=$_POST['balance'];
        $date=$_POST['date'];
        $phone_no=$_POST['phone_no'];
        $email=$_POST['email'];
        $insert ="INSERT INTO user (name,ac_no,balance,date,ph_no,email) VALUES ('$name','$Account','$Balance','$date','$phone_no','$email')";
        $check = mysqli_query($conn,$insert);
        header('Location:list_view.php');
		}
?> 
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
	<h1>LIST OF USERS</h1>
		<div class="row">
			<?php
				$select = "SELECT * FROM user";
				$FETCH =mysqli_query($conn,$select);
				while($row = mysqli_fetch_assoc($FETCH)){
					$name = $row['Name'];
					$acc_no = $row['ac_no'];
					$id = $row['id'];
				
			?>
				<div class="col-3 ms-3 mt-3">
					<div class="card" style="width: 15rem;border-radius:17px;">
						<h1><i class="bi bi-person-circle"></i></h1>
						<div class="card-body">
							<h5 class="card-title"><?php echo $name; ?></h5>
							<p class="card-text"><?php echo $acc_no; ?></p>
							<a href="single_view.php?view=<?php echo $id; ?>" class="btn btn-primary">VIEW</a>
							<a href="update.php?edit=<?php echo $id; ?>" class="btn btn-primary">EDIT</a>
						</div>
					</div>
				</div>
				<?php }?>
		</div>
  </body>
</html>