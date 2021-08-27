<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Administrator Mabes Bettafish</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="<?= base_url() . 'assets/image/betta/default.jpg' ?>" alt="logo" style="width:100%">
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="p-5">
                                            <?php if ($this->session->flashdata('login')) { ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?= $this->session->flashdata('login') ?>
                                                </div>
                                            <?php } ?>
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-2">Sign In For Administrator</h1>
                                                <p class="mb-4">Silahkan masukkan <b><i>enroll key </i></b> untuk masuk ke dalam fitur administrator</p>
                                            </div>
                                            <form class="user" action="<?= site_url('home/auth_proses') ?>" method="post">
                                                <div class="form-group">
                                                    <input type="text" name="enroll" class="form-control form-control-user" value="<?= $this->session->flashdata('data') ?>" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="your enroll key here..." required>
                                                </div>
                                                <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                                    Masuk Sekarang
                                                </button>
                                            </form>
                                            <hr>
                                            <div class="col-sm-12 text-center">
                                                <a href="<?= site_url() ?>" class="btn btn-info btn-circle btn-lg"><i class="fa fa-home"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>