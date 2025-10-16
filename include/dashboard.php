<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notice Board</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="css/dashstyle.css">
  <script src="https://kit.fontawesome.com/2edfbc5391.js" crossorigin="anonymous"></script>
</head>
<body>
<input type="checkbox" id="check">
    <header>
        <label for="check">
          <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
          <h3>UDHYAM<span>KUNJ</span></h3>
        </div>
        <div class="right_area">
          <a href="logout.php" class="logout_btn">Logout</a>
        </div>
      </header>
    <div class="sidebar">
        <center>
          <img src="Images/download.png" class="profile_image" alt="">
          <h4> <?php echo $_SESSION['username']?> </h4>
        </center>
        <a href="Welcome.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="noticebrd.php"><i class="fas fa-bullhorn"></i><span>Notice Board</span></a>
        <a href="complaint.php" class="active"><i class="fas fa-envelope-open-text"></i><span>Register Complaint</span></a>
        <a href="payment.php"><i class="fas fa-file-invoice-dollar"></i><span>Maintenance Payment</span></a>
        <a href="userphoto.php"><i class="fas fa-camera-retro"></i><span>Photo Gallery</span></a>
        <!-- <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
      </div>
</body>
</html>