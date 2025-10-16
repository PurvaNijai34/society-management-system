<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.html");
    exit;
}

?>
<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo add</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>
    .Table_btn{
    padding: 5px;
    background: #0B87A6;
    text-decoration: none;
    padding-bottom: 5px;
    margin-top: 25px;
    margin-right: 616px;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    transition: 0.5s;
    transition-property: background;
  }
  
  .Table_btn:hover{
    background: #19B3D3;
  }
.content h2{
    position: relative;
	padding: 0 180px 10px;
	margin-bottom: 45px;
  font-size: 35px;

  }
.content p{
  text-align: center;
}
.main{
  display: flex;
  
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  min-height:55vh;
}
.alb{
  width: 200px;
  height: 200px;
  padding: 20px;
  
}
.alb img{
  width: 114%;
  height: 130%;
  
  
}  
    </style>
</head>
<body>
<?php include './include/dashboard.php'; ?>
    <div class="content"><br><br><br><br> 

    <h2> Upload your Anonymous photos..!! </h2>

    <div class="main">

      <?php if (isset($_GET['error'])):?>
        <p><?php echo ($_GET['error']);?></p>
        <?php endif ?> 
        
        <form action="picadd.php" method="POST" enctype="multipart/form-data" style="padding-left: 383px;">
        <input type="file" name="my_image" >
        <input type="submit" class="Table_btn" name="upload" value="Upload" >
      </form>
      
    <?php 
      $sql = "SELECT * FROM images ORDER BY id DESC";
      $res =  mysqli_query($conn,$sql);
      
      if (mysqli_num_rows($res) > 0){
        while($images  = mysqli_fetch_assoc($res)){ ?>

<div class="alb">
  <img src="Images/<?=$images['image_url']?>" >
</div>

<?php  } }?>  


</div>
</div>
</body>
</html>

