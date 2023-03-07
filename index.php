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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bank management</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="main">
		<div class="register">
			<h2>Enter here</h2>
			<form method="post" id="register">
				<label for="Name">Name</label>
				<br>
				<input type="text" name="Name" id="Name" placeholder="Enter your Name" required>
				<br><br>
				<label for="account_no">Account No</label>
				<br>
				<input type="number" name="account_no" id="account_no" placeholder="Enter your Account No" required>
				<br><br>
				<label for="balance">Balance Amount</label>
				<br>
				<input type="number" name="balance" id="balance" placeholder="Enter your Balance Amount" required>
				<br><br>
				<label for="date">date</label>
				<br>
				<input type="date" name="date" id="date" placeholder="Enter your date" required>
				<br><br>
				<label for="phone_no">Phone No</label>
				<br>
				<input type="number" name="phone_no" id="phone_no" placeholder="Enter your Phone No" required>
				<br><br>
				<label for="email">Email id</label>
				<br>
				<input type="email" name="email" id="email" placeholder="Enter your email id" required>
				<br><br>
				<button type="submit" id="submit" name="submit">Submit</button>
				<a name="list" id="list" href="list_view.php">LIST</a>
			</form>
		</div>
	</div>
</body>
</html>