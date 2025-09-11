<?php
// Login Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - X Company</title>
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
            font-size: 16px; /* smaller than before */
        }
        footer {
            text-align: center;
            padding: 10px;
            border-top: 1px solid #ccc;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        fieldset {
            display: inline-block;
            text-align: left;
            padding: 30px;
            width: 400px;  
            border: 1px solid #000;
        }
        legend {
            font-weight: bold;
            font-size: 18px; 
        }
        .form-group {
            margin-bottom: 15px;
            font-size: 14px; 
        }
        input[type="text"],
        input[type="password"] {
            width: 250px; 
            padding: 5px;
        }
        input[type="submit"] {
            padding: 5px 15px;
        }
        a {
            font-size: 14px;
            margin-left: 10px;
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
        <a href="login.php" >Login</a>
        <a href="registration.php" >Registration</a>
    </nav>
</header>

<main>
    <form action="" method="post">
        <fieldset>
            <legend>LOGIN</legend>
            <div class="form-group">
                User Name : <input type="text" name="username" required>
            </div>
            <div class="form-group">
                Password : <input type="password" name="password" required>
            </div>
            <hr>
            <div class="form-group">
                <input type="checkbox" name="remember"> Remember Me
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
                <a href="forgotPassword.php" >Forgot Password?</a>
            </div>
        </fieldset>
    </form>
</main>

<footer>
    Copyright &copy; 2017
</footer>

</body>
</html>