<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
	header("location: login.html");
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register complaint</title>
	<link rel="stylesheet" href="dashstyle.css">
	<link rel="stylesheet" href="./css/register_complaints.css">
	<script src="https://kit.fontawesome.com/2edfbc5391.js" crossorigin="anonymous"></script>

</head>

<body>
	<?php include './include/dashboard.php'; ?>
	<!-- <div class="content"><br><br><br>
		<div class="container">
			<div class="contact-box">

				<div class="right">
					<h2>Register Your Anonymous complaints</h2>
					<form action="#" method="POST">
						<input type="text" class="field" name="ctitle" placeholder="Title" required>
						<textarea placeholder=" Enter Your Compliant" name="nmsg" class="field" required></textarea><br>
						<button class="btn" name="lcomplaint">Lodge complaint</button>

						<button class="btn" name="ccancel">Cancel</button>
					</form>
				</div>
			</div>
		</div>
	</div> -->
	<div class="container">
	<h2>Register Your complaints</h2>

		<div class="content">
			<form action="#" method="POST">
				<input type="text" class="field" name="ctitle" placeholder="Title" required>
				<textarea placeholder=" Enter Your Compliant" name="nmsg" class="field" required></textarea><br>
				<div class="buttons">
				<button class="btn" name="lcomplaint">Lodge complaint</button>

<button class="btn" name="ccancel">Cancel</button>
				</div>
				
			</form>
		</div>
	</div>
</body>

</html>
<?php
if (isset($_POST['lcomplaint'])) {
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "complaints");
	$query = "insert into combox values(null,'$_POST[ctitle]','$_POST[nmsg]')";
	$query_run = mysqli_query($connection, $query);
	if ($query_run) {
		echo "<script>alert('Complaint Submitted...!!');
    window.location.href = 'Welcome.php';
    </script>";
	} else {
		echo "<script>alert('Please try again');
    window.location.href = 'complaint.php';
    </script>";
	}
}
?>