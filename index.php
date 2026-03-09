<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background: linear-gradient(to right, #eef2f3, #dfe9f3);
        }
        .main-box {
            padding: 50px;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            text-align: center;
            width: 75%;
            max-width: 800px;
            transition: transform .3s;
        }
        .main-box:hover {
            transform: translateY(-5px);
        }
        .title-text {
            font-size: 42px;
            font-weight: 800;
            color: #343a40;
        }
        .vuid-text {
            font-size: 22px;
            color: #6c757d;
        }
        .btn-custom {
            padding: 12px 30px;
            font-size: 16px;
            border-radius: 50px;
            font-weight: 500;
        }
    </style>
</head>

<body>
<?php include "header/header.php"; ?>
<!-- Center Box -->
<div class="d-flex justify-content-center align-items-center" style="height: 85vh;">
    <div class="main-box">
        <h1 class="title-text">
            “Access Form” Final Year Project Guidelines
        </h1>
        <div class="mt-4">
            <a href="registration.php" class="btn btn-success btn-custom mr-2">
                User Registration
            </a>
            <a href="login.php" class="btn btn-primary btn-custom mr-2">
                User Login
            </a>
            <a href="admin_login.php" class="btn btn-dark btn-custom">
                Admin Login
            </a>
        </div>

    </div>
</div>

<!-- Optional JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
