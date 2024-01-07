<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toko Plastik - Register</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row bg-dark">
                    <div class="col-lg-5 d-none d-lg-block "><img src="assets/img/login.svg" width=785 height="auto" alt=""></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-warning mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="cek_register.php" method="POST">
                            <form class="user">
                                <div class="form-group ">
                                    <input type="text" name="nama" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Username">
                                </div>
                                <div class="form-group ">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>     
                                <div class="form-group ">
                                        <select class="form-control " name="level" >
                                            <option selected>Level</option>
                                            <option value="admin">admin</option>
                                        </select>
                                    </div>                     
                                <input type="submit" value="Register" class="btn btn-dark text-warning btn-user btn-block">
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small text-warning" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small text-warning" href="login.pho">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>