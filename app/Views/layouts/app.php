<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mini Product Information Management System (BanPIM) <?= $this->renderSection('title') ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('/public/assets/style.css') ?>">

    <?= $this->renderSection('pageStyles') ?>
</head>

<body class="bg-light">

    <main role="main" class="container">

        <nav class="navbar navbar-light bg-light mt-2 navbg" style="background-color: red;">
            <div class="container-fluid">
                <h3 class="navbar-brand" href="#">Mini Product Information Management System (BanPIM) - <?= ($pgActive ?? '') ? $pgActive : 'Home' ?></h3>
                <a class="text-decoration-none" href="<?= base_url('logout') ?>">Logout</a>
            </div>
        </nav>

        <?php 
            if($pgActive == 'Dashboard')
            {
        ?>
        <div class="container mt-5">
            <h4>Hi <?= $userName ?>, Welcome!</h4>
        </div>
        <?php
            }
        ?>


        <div class="container">
            <ul class="nav nav-pills mt-5">
                <li class="nav-item">
                    <a class="nav-link <?= ($pgActive ?? '') === 'Dashboard' ? 'active' : '' ?>" aria-current="page" href="<?= base_url('/') ?>">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($pgActive ?? '') === 'Product' ? 'active' : '' ?>" href="<?= base_url('product') ?>">Product</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($pgActive ?? '') === 'Media' ? 'active' : '' ?>" href="<?= base_url('media') ?>">Media</a>
                </li>
            </ul>
        </div>

        <?= $this->renderSection('body') ?>
    </main>

    <?= $this->renderSection('pageScripts') ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>