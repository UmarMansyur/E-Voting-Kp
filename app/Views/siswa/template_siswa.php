<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $tittle; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/template/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="/assets/sman1pademawu.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Evoting <strong>SMAN 1 PADEMAWU</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('siswa/home'); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('siswa/voting'); ?>">Voting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('siswa/perolehanSuara'); ?>">Perolehan Suara</a>
                </li>
            </ul>
            <div class="text-right">
                <a href="<?= site_url('auth/logout_siswa'); ?>" class="btn btn-danger">Logut</a>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('page-siswa'); ?>


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/template/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>/template/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>/template/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url(); ?>/template/js/demo/chart-pie-demo.js"></script>


</body>

</html>