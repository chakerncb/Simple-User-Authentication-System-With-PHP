<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Nunito.css">
</head>

<body class="bg-gradient-primary">
    <div class="container" style="padding-left: 30%; padding-right: 30%;">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row" style="padding: 3%;">
                    <div class="p">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <?php
                            session_start();
                            if (isset($_SESSION['alert_danger'])) {
                                echo '
                                    <div class="alert alert-danger" role="alert">
                                        ' . $_SESSION['alert_danger'] . '
                                    </div>
                                    ';
                                unset($_SESSION['alert_danger']);
                            }
                            ?>

                            <form class="user" method="post" action="auth/register.php">
                                <div class="mb-3"><input class="form-control form-control-user" type="text"
                                        id="exampleFirstName" aria-describedby="emailHelp" placeholder="Full Name"
                                        name="Fname"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email"
                                        id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address"
                                        name="email"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="password"
                                        id="exampleInputPassword" placeholder="Password" name="password"></div>
                        </div>
                        <button class="btn btn-primary d-block btn-user w-100" type="submit">Register
                            Account
                        </button>
                        <hr>
                        </form>
                    </div>
                    <div class="text-center"><a class="small" href="login.php">Already have an account?
                            Login!</a></div>
                </div>
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