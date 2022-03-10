<?php

use App\Core\App;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Powered by Sprnva Framework">
    <meta name="author" content="Judywen Guapin">
    <link rel='icon' href='<?= public_url('/favicon.ico') ?>' type='image/ico' />
    <title>
        <?= ucfirst($pageTitle) . " | " . App::get('config')['app']['name']; ?>
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= public_url('/assets/sbadmin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= public_url('/assets/sbadmin/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="<?= public_url('/assets/sbadmin/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= public_url('/assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= public_url('/assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= public_url('/assets/sbadmin/js/sb-admin-2.min.js') ?>"></script>
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="mt-2"><?= alert_msg(); ?></div>
                <div class="card o-hidden border-0 shadow-lg my-4">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                                    </div>
                                    <form class="user" method="POST" action="<?= route('/forgot/password') ?>">
                                        <?= csrf() ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" autocomplete="off" autofocus placeholder="Enter Email Address...">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= route('/login'); ?>">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>