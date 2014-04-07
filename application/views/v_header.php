<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

        <title>Tugas Desweb Genap 2013-2014</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>bootstrap/css/custom.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="blog.css" rel="stylesheet">
    </head>
    <body>

        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                    <?php
                    function check_aktif($param, $aktif) {
                        if ($param == $aktif):
                            echo ' active';
                        endif;
                    }
                    ?>
                    <a class="blog-nav-item <?php check_aktif("home",$page); ?>" href="<?php echo site_url() ?>home">Air asia</a>
                    <a class="blog-nav-item <?php check_aktif("jetstar",$page); ?>" href="<?php echo site_url() ?>jetstar">Jetstar</a>
                    <a class="blog-nav-item <?php check_aktif("mandala-tiger",$page); ?>" href="<?php echo site_url() ?>mandala">Mandala-Tiger</a>
                </nav>
            </div>
        </div>

        <div class="container">

            <div class="blog-header">
                <h1 class="blog-title">Tugas Desain Web</h1>
            </div>

            <div class="row">

                <div class="col-sm-8 blog-main">
                    <div class="blog-post">


