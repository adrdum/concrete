<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php   Loader::element('header_required'); ?>
    <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
    <link href="<?php echo $this->getThemePath(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $this->getThemePath(); ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo $this->getThemePath(); ?>/assets/css/main.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">

            <ul class="nav">
              <!--<li><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>-->
              <?php
                  $a = new Area('Menu');
                  $a->display($c);
              ?>
            </ul>

          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
