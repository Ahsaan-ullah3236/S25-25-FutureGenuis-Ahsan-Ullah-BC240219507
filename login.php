<?php
include("connection.php");
session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
     $password = $_POST['password'];

    // Query according to your project requirement (email + password check)
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        // Set session
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];

        echo "<script>alert('Login Successful!'); window.location='user/dashboard.html';</script>";

    } else {
        echo "<script>alert('Incorrect Email or Password'); window.location='login.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color: #f1f3f6;">

<?php include "header/header.php"; ?>
<br><br>

<div class="container d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow"
         style="border-radius: 15px; width: 400px; background-color: #ffffff;">
        <h3 class="text-center mb-4">User Login</h3>

        <form method="post">

            <div class="form-group">
                <input type="email" name="email" placeholder="Email"
                       class="form-control rounded-pill" required>
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password"
                       class="form-control rounded-pill" required>
            </div>

            <div class="form-group text-center">
                <input type="submit" name="submit" value="Login"
                       class="btn btn-primary btn-block rounded-pill">
            </div>

            <div class="form-group text-center">
                <input type="reset" value="Clear All"
                       class="btn btn-secondary btn-block rounded-pill">
            </div>

            <p class="text-center mt-3" style="font-size: 0.9rem;">
                Don’t have an account? <a href="registration.php">Register here</a>
            </p>

        </form>
    </div>
</div>

</body>
</html>