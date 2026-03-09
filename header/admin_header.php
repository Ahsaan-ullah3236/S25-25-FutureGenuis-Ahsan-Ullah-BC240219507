<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">

        <!-- Admin Dashboard Title -->
        <a class="navbar-brand font-weight-bold" href="admin_dashboard.php" style="font-size: 22px;">
            <i class="fa fa-cogs"></i> Admin Dashboard
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#adminNav" aria-controls="adminNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="adminNav">

          

            <!-- RIGHT SIDE LOGOUT -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link font-weight-bold text-white" href="../index.php">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>

<!-- Optional JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>