<?php
include "connection.php";

if (isset($_POST['submit'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $cnic = trim($_POST['cnic']);
    $address = trim($_POST['address']);
     $password = $_POST['password'];

    // Email check
    $check = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con,$check);

    if(mysqli_num_rows($result) > 0){
        echo "<script>alert('Email already exists');window.location='registration.php';</script>";
    } 
    else{

        $query = "INSERT INTO users (name, email, cnic, address, password)
        VALUES ('$name','$email','$cnic','$address','$password')";

        $run = mysqli_query($con,$query);

        if($run){
            echo "<script>alert('User Register Successfully');window.location='login.php';</script>";
        }else{
            echo "<script>alert('Invalid Data');window.location='registration.php';</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color: #f1f3f6;">
    <?php include "header/header.php"; ?>
    <br><br>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow" style="border-radius: 15px; width: 450px; background-color: #ffffff;">
            <h3 class="text-center mb-4">User Registration</h3>

            <form method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <input type="text" name="name" placeholder="Full Name (No Spaces)"
                        class="form-control rounded-pill" required>
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="Email"
                        class="form-control rounded-pill" required>
                </div>

                <div class="form-group">
                    <input type="text" name="cnic" placeholder="CNIC (13 digits)"
                        class="form-control rounded-pill" required>
                </div>

                <div class="form-group">
                    <input type="text" name="address" placeholder="Address"
                        class="form-control rounded-pill" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password"
                        class="form-control rounded-pill" required>
                </div>

                <div class="form-group text-center">
                    <input type="submit" name="submit"
                        class="btn btn-primary btn-block rounded-pill"
                        value="Register">
                </div>
            </form>
        </div>
    </div>
</body>

</html>