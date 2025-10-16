<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
</body>
</html> -->
<!-- Php code to admin login -->
<?php
if (isset($_POST['logina'])) {
    $user = $_POST['adminusername'];
    $adcode = $_POST['admincode'];
    if ($user == "Admin" && $adcode == "100") {
        echo "<script>alert('Welcome,You are logged in...!');
        window.location.href ='managemem.php';
        </script>";
        // echo"hello suecc";
    } else {
        echo "<script>alert('Sorry,Please enter valid details.!!');
        </script>";
    }

    // echo"henknk";
}
?>