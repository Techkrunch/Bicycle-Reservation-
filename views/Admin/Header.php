<?php

?>
<html>

<head>
    <title>Adminstrator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/assets/img/favicon.png">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/a.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/modal.js" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/bootstrap.js" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/jquery-1.7.2.min.js" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/bootstrap.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/bootstrap.min.js" media="all">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/assets/img/favicon.png">


</head>

<body>
    <!--================Header Menu Area =================-->
    <?php
    if ($this->session->userData('fname')) { ?>
    <?php } else { ?>
        <?php
        redirect('welcome/logout', 'refresh'); ?>
    <?php }
    ?>
    <div class="wrapper">
        <nav>
            <header>
                <span></span>
                <?php
                if ($this->session->userData('fname')) { ?>
                    <?= $this->session->userData('fname') ?>
                <?php } else { ?>
                    <?php
                    redirect('welcome/logout', 'refresh'); ?>
                <?php }
                ?>
            </header>

            <ul>
                <li><span>Navigation</span></li>
                <!-- <li><a class="active">Dashboard</a></li> -->
                <li><a href="<?php echo base_url('index.php') . '/welcome/bcy'; ?>">Saikle</a></li>
                <li><a href="<?php echo base_url('index.php') . '/welcome/bcy_booked'; ?>">Booked Saikle</a></li>
                <li><a href="<?php echo base_url('index.php') . '/welcome/todays'; ?>">Today Approved Saikle</a></li>
                <li><a href="<?php echo base_url('index.php') . '/welcome/bcy_approved'; ?>">Return Saikle</a></li>
                <li><a href="<?php echo base_url('index.php') . '/welcome/msg'; ?>">Messages</a></li>
                <li><a style="color:red;" href=" <?php echo base_url('index.php') . '/welcome/logout'; ?>">Logout</a></li>

            </ul>

        </nav>

        <main>

            <h1>Cycle Admin Dashboard</h1>


            <!--================Header Menu Area =================-->