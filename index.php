<?php
session_start();
if (!isset($_SESSION['Fname'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar" style="position: sticky;">
                    <div class="container-fluid">
                        <h4>.MyApp</h4>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown"
                                        href="#">
                                        <?php
                                        echo "<span class=\"d-none d-lg-inline me-2 text-gray-600 small\">Welcome, " . $_SESSION['Fname'] . "!</span>";
                                        ?>
                                        <img class="border rounded-circle img-profile"
                                            src="./assets/images/user-circle.svg">
                                    </a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">

                                        <div class="dropdown-divider"></div><a class="dropdown-item"
                                            href="auth/logout.php"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid" style="--bs-primary: #1C2434;--bs-primary-rgb: 28,36,52;">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Welcome</h6>
                        </div>
                        <div class="card-body text-center">
                            <?php
                            echo "<h1 class=\"h4 mb-4\">Welcome to your dashboard, " . $_SESSION['Fname'] . "!</h1>";
                            ?>
                            <a href="auth/logout.php" class="btn btn-primary">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/bs-init.js"></script>
        <script src="assets/js/theme.js"></script>
</body>

</html>