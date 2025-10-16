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
  <title>Welcome dashboard</title>
  <link rel="stylesheet" href="./css/dashstyle.css">
  <script src="https://kit.fontawesome.com/2edfbc5391.js" crossorigin="anonymous"></script>
  <style>
    .far {
      color: #a7abde;
      padding-left: 15px;

    }

    .col-div-3 .box p {
      font-size: 25px;

    }

    .box .fas {
      color: #a7abde;
      position: absolute;
      padding-top: 50px;


    }

    .box .fas .fa-home {
      color: #a7abde;
      padding-left: 20px;
    }
  </style>

</head>

<body>
  <?php include './include/dashboard.php'; ?>

  <div class="content">
    <h1>Welcome to Dashboard</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "usersregister";

    // creating connection

    $conn = mysqli_connect($servername, $username, $password, $database);

    $user_name = $_SESSION['username'];
    $sql = "SELECT Username,Flatno FROM registration where Username='$user_name'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

        echo '<div class="col-div-3"> 
        <div class="box">
          <p>' . $row['Username'] . '<br><span>Your Username</span></p>
          <i class="far fa-user fa-2x"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>' . $row['Flatno'] . '
          <br><span>Your Flat No.</span></p>
          <i class="fas fa-home fa-2x"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>Shubham Vartak<br><span>Society Secretary</span></p>
          <i class="fas fa-user-tie fa-2x" ></i>
        </div>
      </div>';
      }
    } else {
      echo "O records found !";
    }
    ?>
  </div>

</body>

</html>