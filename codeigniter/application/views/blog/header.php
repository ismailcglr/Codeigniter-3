<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $genelAyar->genel_site ?> | Kişisel Blog</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/site/assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/site/");?>css/styles.css" rel="stylesheet" />
    <?php
    switch ($this->uri->segment(1)) {
        case "hakkimda":
            $imgpref = "hakkimda";
            $a=$genelAyar->genel_site;
            $h1=$rows->hakkimda_baslik;
            $span=$rows->hakkimda_aciklama;
            break;
        case "gonderi":
            $imgpref = "haber";
            $a=$genelAyar->genel_site;
            $h1=$rows->haber_baslik;
            $span=$rows->haber_aciklama;
            break;
        case "anasayfa":
            $imgpref = "anasayfa";
            $a=$genelAyar->genel_site;
            $h1=$genelAyar->genel_anasayfa_baslik;
            $span=$genelAyar->genel_anasayfa_aciklama;
            break;
        case "iletisim":
            $imgpref = "iletisim";
            $a=$genelAyar->genel_site;
            $h1=$rows->iletisim_baslik;
            $span=$rows->iletisim_aciklama;
            break;
    }
    ?>
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="<?php echo base_url("anasayfa")?>"><?= $a ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url("anasayfa")?>">Anasayfa</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url("hakkimda")?>">Hakkımda</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url("gonderi")?>">Haber</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo base_url("iletisim")?>">Iletisim</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Header-->
<header class="masthead" style="background-image: url('<?= base_url();?>uploads_image/<?= $imgpref ?>.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1><?= $h1 ?></h1>
                    <span class="subheading"><?= $span ?></span>
                </div>
            </div>
        </div>
    </div>
</header>