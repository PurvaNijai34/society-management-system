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
  <title>Notice Board</title>
  <link rel="stylesheet" href="dashstyle.css">
  <script src="https://kit.fontawesome.com/2edfbc5391.js" crossorigin="anonymous"></script>
  <style>
    .content-table {
      border-collapse: collapse;
      margin: 25px 19px;
      margin-left: 13px;
      font-size: 0.9em;
      min-width: 400px;
      border-radius: 5px 5px 0 0;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .content-table thead tr {
      background-color: #19B3D3;
      color: #ffffff;
      text-align: left;
      font-weight: 900;
    }

    .content-table th,
    .content-table td {
      padding: 15px 15px;
    }

    .content-table tbody tr {
      border-bottom: 1px solid #dddddd;
    }

    .content-table tbody tr:nth-of-type(even) {
      background-color: #f3f3f3;
    }

    .content-table tbody tr:last-of-type {
      border-bottom: 2px solid #82abc7;
    }
  </style>
</head>

<body>
  <?php include './include/dashboard.php'; ?>
  <!--sidebar end-->
  <div class="content"><br><br><br><br>
    <?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'noticeboard');

    $query = "Select * from notices";
    $query_run = mysqli_query($connection, $query);
    ?>
    <table class="content-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Notice Name</th>
          <th>Notice Type</th>
          <th>Date</th>
          <th>Message</th>
        </tr>
      </thead>
      <?php
      if ($query_run) {
        while ($row = mysqli_fetch_array($query_run)) {
      ?>

          <tbody>
            <tr>
              <td><?php echo $row['ID']; ?> </td>
              <td><?php echo $row['Name']; ?> </td>
              <td><?php echo $row['Type']; ?> </td>
              <td><?php echo $row['Noticedate']; ?> </td>
              <td><?php echo $row['Message']; ?> </td>
            </tr>
          </tbody>
      <?php
        }
      } else {
        echo "No Record found";
      }
      ?>
    </table>
  </div>
</body>

</html>