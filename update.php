<?php
		include "db.php";
		if(isset($_POST['update'])){
        $Balance=$_POST['balance'];
		$id = $_POST['edit'];
        $sql = "UPDATE user SET balance='$Balance' WHERE id='$id' ";
        $check = mysqli_query($conn,$sql);
        header('Location:index.php');
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
	<?php
		$getid = $_GET['edit'];
		$select = "SELECT * FROM user WHERE id='$getid'";
		$connect = mysqli_query($conn,$select);
		$row = mysqli_fetch_assoc($connect);
        $Balance = $row['balance'];
        $id = $row['id'];
	?>
	<div class="main">
		<div class="register">
			<h2>Update Amount</h2>
			<form method="post" id="register">
				<label class="name">Name</label>
				<br><br>
				<label for="balance">Balance Amount</label>
				<br>
				<input type="number" name="balance" id="balance" placeholder="Enter your Balance Amount" value="<?php echo $Balance; ?>" required>
				<br><br>
				<input type="hidden" name="edit" value="<?php echo $id; ?>">
				<button type="submit" id="submit" name="update">Update</button>
			</form>
		</div>
	</div>
</body>
</html>