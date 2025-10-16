<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/navbar.css">
</head>
<body>
    <div class="navbar">
        <img src="Images/shlogo.jpg" class="logo">
        <h1>Udhyam <span style="font-family: 'Merienda', cursive;
        color:rgb(20, 76, 80);">Kunj</span></h1>
        <nav>
            <ul>
                <li><a href="" class="active">Home</a></li>
                <li><a href="#rules">Rules & Regulations</a></li>
                <!-- <li>   <a href="./Adminlogin.php" id="btn"> Admin Login</a> </li> -->
                <li> <button id="adminLoginBtn" class="button"> <span> Admin Login</span> </button></li>
                <div id="adminModal" class="admin-popup">
                    <div class="admin-popup-content">
                        <span class="close-popup">&times;</span>
                        <h2>Admin Login</h2>
                        <form id="adminLoginForm" action="Adminlogin.php" method="POST">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="adminusername" required>

                            <label for="password">Password:</label>
                            <input type="password" id="password" name="admincode" required>

                            <button type="submit" name="logina">Login</button>
                        </form>
                    </div>
                </div>
            </ul>
        </nav>
        <!-- <a href="Adminlogin.php" class="btn">Admin Login</a> -->
    </div>
</body>
</html>