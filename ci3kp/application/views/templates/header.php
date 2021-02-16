<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title><?= $judul; ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>">Home </a>
                    </li>
                    <li class="nav-item active">
                        <form action="<?= base_url(); ?>post" method="POST" class="form-inline my-2 my-lg-0">
                            <button class="nav-link btn" type="submit" name="submit">Post
                            </button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="<?= base_url('post'); ?>" method="post">
                    <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Cari Judul"
                        aria-label="Search" autocomplete="off">
                    <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Search</button>
                </form>
                <?php if (logged_in()) : ?>
                <a class="btn btn-outline-secondary my-2 my-sm-0 mx-3"
                    href="<?= base_url('auth/'); ?>logout ">Logout</a>
                <?php else : ?>
                <a class="btn btn-warning my-2 my-sm-0 mx-3" href="<?= base_url('auth'); ?>">Login</a>
                <?php endif; ?>

            </div>
        </div>
    </nav>