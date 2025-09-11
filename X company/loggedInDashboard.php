<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<header>
    <div class="logo">
        <img src="./png/logo.png" alt="Company Logo" style="height:40px; vertical-align:middle;">
        XCompany
    </div>
    <div>
        Logged in as <a href="viewProfile.php"><?php echo $username; ?></a> | 
        <a href="logout.php">Logout</a>
    </div>
</header>

<main>
    <nav>
        <b>Account</b>
        <hr>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="viewProfile.php">View Profile</a></li>
            <li><a href="editProfile.php">Edit Profile</a></li>
            <li><a href="changeProfilePicture.php">Change Profile Picture</a></li>
            <li><a href="changePassword.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <section>
        <h3>Welcome <?php echo $username; ?></h3>
    </section>
</main>

<footer>
    Copyright &copy; 2017
</footer>

</body>
</html>