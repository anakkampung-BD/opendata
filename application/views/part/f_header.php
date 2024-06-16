<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="<?= base_url(); ?>public/y/images/logo/front_logo.png" type="image/x-icon" sizes="32x32">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/leaflet.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/root.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/select2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/slick.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/slick-theme.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/main.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/feedback_custom.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/feedback_header.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/custom.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/utilities.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/y/css/font-awesome.min.css">
    <script src="<?= base_url(); ?>public/y/js/jquery.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>

    <header class="header-top is-transparent">
        <div class="main-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg is-customized">
                    <!-- bg-dark -->
                    <a class="navbar-brand" href="<?= base_url(); ?>">
                        <img class="logo-header" src="<?= base_url(); ?>public/x/images/logo/3.png" alt="img-brand-logo" />
                        <img class="logo-header-light" src="<?= base_url(); ?>public/x/images/logo/2.png" alt="img-brand-logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars unopen"></i>
                        <i class="fa fa-plus open"></i>
                    </button>

                    <div class="collapse navbar-collapse navbar-offcanvas" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto text-header">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('home'); ?>" class="nav-link  ">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle  " id="infografikNavbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Poll</a>
                                <div class="dropdown-menu" aria-labelledby="infografikNavbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url('home'); ?>">Dataset</a>
                                    <a class="dropdown-item" href="<?= base_url('home'); ?>">Organisasi</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('home'); ?>" class="nav-link  ">Rencana Terbit</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('home'); ?>" class="nav-link  ">Permintaan Data</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('home'); ?>" class="nav-link  ">Publikasi</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle  " id="infografikNavbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Panduan</a>
                                <div class="dropdown-menu" aria-labelledby="infografikNavbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url('home'); ?>">FAQ</a>
                                    <a class="dropdown-item" href="<?= base_url('home'); ?>">Flow</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>