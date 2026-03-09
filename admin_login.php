<?php
session_start();
include 'connection.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin where email='$email'and password='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        echo "<script>window.location='Admin/dashboard.php';alert('Admin Login Successfully');</script>";
    } else {
        echo "<script>window.location='admin_login.php';alert('Invalid Email OR Password');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color: #f1f3f6;">

    <?php include "header/header.php"; ?>
    <br><br>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow" style="border-radius: 15px; width: 400px; background-color: #ffffff;">
            <h3 class="text-center mb-4" style="color: #343a40;">Admin Login</h3>

            <form method="post">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control rounded-pill" required>
                </div>

                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control rounded-pill" required>
                </div>

                <div class="form-group text-center">
                    <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block rounded-pill">
                </div>
            </form>
        </div>
    </div>
</body>
</html>