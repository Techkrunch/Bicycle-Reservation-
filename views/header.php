<?php

?>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/assets/img/favicon.png">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/fonts/all.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/fonts/line-icons/line-icons.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/extras/animate.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/extras/owl.theme.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/css/responsive.css" type="text/css">
    <link rel="stylesheet" id="colors" href="<?php echo base_url(); ?>/assets/assets/css/colors/blue.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/css/color-switcher.css" type="text/css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/font-awesome-4.7.0/css/all.css">
    <link rel="text/javascript" href="<?php echo base_url(); ?>/assets/font-awesome-4.7.0/js/all.js">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/font-awesome-4.7.0/less/fontawesome.less">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/font-awesome-4.7.0/scss/fontawesome.scss">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/font-awesome-4.7.0/sprites/solid.svg">


</head>

<body>
    <!--================Header Menu Area =================-->


    <div class="header">
        <nav class="navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar top-nav-collapse">
            <div class="container">
                <div class="theme-header clearfix">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            <span class="lni-menu"></span>
                            <span class="lni-menu"></span>
                            <span class="lni-menu"></span>
                        </button>
                        <a href="<?php echo base_url('index.php') ?> " class="navbar-brand" height="42" width="42"><img src="<?php echo base_url(); ?>/assets/assets/img/logo.png" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('index.php') ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('index.php/welcome/contact') ?>">Contact</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto nav-flex-icons">


                            <?php
                            if ($this->session->userData('fname')) { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?= $this->session->userData('fname') ?> | Profile <i class="fas fa-user"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                                        <!-- <a class="dropdown-item" href="#">Job Applications</a> -->

                                        <a class="dropdown-item" href="<?php echo base_url('index.php/welcome/logout') ?>">Logout</a>
                                    </div>
                                </li>
                            <?php } else { ?>
                               
                                <li class="postbutton">
                                    <a class="btn btn-danger btn-post" href="<?php echo base_url('index.php') . '/welcome/login'; ?>"><span class="fas fa-sign-in-alt"></span>&nbsp;Login</a>
                                </li>
                                &nbsp;
                                <li class="postbutton">
                                    <a class="btn btn-primary btn-post" href="<?php echo base_url('index.php') . '/welcome/register'; ?>"><span class="fas fa-sign-in-alt"></span>&nbsp;Sign Up</a>
                                </li>
                            <?php }
                            ?>

                        </ul>

                    </div>
                </div>
            </div>
            <div class="mobile-menu" data-logo="<?php echo base_url(); ?>/assets/assets/img/logo-mobile.png">

            </div>
        </nav>

    </div>

    <!--================Header Menu Area =================-->