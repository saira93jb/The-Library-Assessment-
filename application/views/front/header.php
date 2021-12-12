<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('webassets/css/styles.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body style="">


    <nav class="navbar navbar-inverse" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('webassets/liblogo.png') ?>" style="height:30px" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse container" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <?php if($this->session->userdata('userName')){ ?>
                         <li><a href="<?= base_url('user/dashboard') ?>"> <?= $this->session->userdata('userName') ?></a></li>
                   <?php }else{ ?> 
                    <li><a href="<?= base_url('user/signup') ?>">Sign Up</a></li>
                    <?php } ?>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>


    <style>
    .navbar {
        border-radius: 0px;
        min-height: 65px;
        margin-bottom: 0px;
    }
    body{
        background-image:url("<?= base_url('webassets/bg.png') ?>")
    }
    </style>