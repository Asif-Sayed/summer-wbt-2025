<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration - X Company</title>
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
            padding: 30px;
        }
        footer {
            text-align: center;
            padding: 10px;
            border-top: 1px solid #ccc;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 15px;
            border: 1px solid #ccc;
            background: #f9f9f9;
            border-radius: 5px;
        }
        form h2 {
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 15px;
            font-size: 14px; 
        }
        label {
            display: inline-block;
            width: 120px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            padding: 5px;
            width: 200px;
        }
        .buttons {
            text-align: center;
        }
        input[type="submit"],
        input[type="reset"] {
            padding: 8px 15px;
            margin: 5px;
            cursor: pointer;
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
        <a href="./registration.php">Registration</a>
    </nav>
</header>

<main>
    <form action="" method="post">
        <h2>Registration</h2>
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <hr>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <hr>
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" required>
        </div>
        <hr>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <hr>
        <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password" required>
        </div>
        <hr>
        <div class="form-group">
            <label>Gender:</label>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other
        </div>
        <hr>
        <div class="form-group">
            <label>Date of Birth:</label>
            <input type="date" name="dob" required>
        </div>
        <hr>
        <div class="buttons">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </form>
</main>

<footer>
    copyright &copy; 2017
</footer>

</body>
</html>