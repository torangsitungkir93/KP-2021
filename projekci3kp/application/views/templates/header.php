<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/auth/images/icons/mylogo.png" />

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/modern-business.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/mycss.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>home"> <img
                    src="<?= base_url(); ?>assets/auth/images/icons/mylogo.png" width="30px" height="23px"> My Blog</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>home">Home</a>
                    </li>

                    <li class="nav-item">
                        <form action="<?= base_url(); ?>post" method="POST" class="form-inline my-2 my-lg-0">
                            <button class="nav-link btn" type="submit" name="submit">Post
                            </button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Portfolio
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                            <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                            <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                            <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                            <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
                        </div>
                    </li>

                </ul>
                <?php if (logged_in()) : ?>
                <a class="btn btn-success my-2 my-sm-0 mx-3" href="<?= base_url('auth/'); ?>logout "> <i
                        class="fa fa-paper-plane" aria-hidden="true"
                        onclick="return confirm ('Yakin ingin menghapus post ini?')"></i> Logout</a>
                <?php else : ?>
                <a class="btn btn-warning my-2 my-sm-0 mx-3" href="<?= base_url('auth'); ?>"><i
                        class="fa fa-chevron-right" aria-hidden="true"></i> Login</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>