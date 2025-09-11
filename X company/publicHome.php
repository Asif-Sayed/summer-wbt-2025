<?php
// simple PHP webpage with HTML and CSS
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>X Company</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: white;
        }
        header {
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ccc;
        }
      
        main {
            padding: 50px;
            text-align: center;
            font-size: 24px;
        }
        footer {
            text-align: center;
            padding: 10px;
            border-top: 1px solid #ccc;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="./png/logo.png" alt="Company Logo" style="height:70px; vertical-align:middle;">
        Company
    </div>
    <nav>
        <a href="publicHome.php">Home</a>
        <a href="login.php">Login</a>
        <a href="registration.php">Registration</a>
    </nav>
</header>

<main>
    Welcome to X company
</main>

<footer>
    copyright &copy; 2017
</footer>

</body>
</html>