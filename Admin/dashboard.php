
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f1f3f6;
        }
        .welcome-box {
            margin-top: 100px;
            padding: 50px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
        }
        .welcome-box h1 {
            font-size: 36px;
            color: #343a40;
            font-weight: bold;
        }
        .welcome-box p {
            font-size: 18px;
            color: #6c757d;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<?php include "../header/admin_header.php"; ?>

<div class="container d-flex justify-content-center">
    <div class="welcome-box">
        <h1>Welcome to Admin Panel</h1>
        
    </div>
</div>

</body>
</html>