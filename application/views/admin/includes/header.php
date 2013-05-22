<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dave Hastings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/docs.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>google-code-prettify/prettify.css" rel="stylesheet">

    <script type="text/javascript" src="//use.typekit.net/ymt3ujb.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="topLeft" style="float: left;">
                <div id="logoSquare">
                  dh
                </div>
                <div id="siteNameTopLeft" class="hidden-phone">
                  dave hastings
                </div>
              </div>
              <div class="nav-collapse collapse">
                <ul class="nav">
                  <li class="">
                    <?php echo anchor('admin/home/index', 'Home'); ?>
                  </li>
                  <li class="">
                    <?php echo anchor('admin/home/blog', 'Blog Posts'); ?>
                  </li>
                  <li class="">
                    <?php echo anchor('login/logout', 'Logout'); ?>
                  </li>
                </ul>
              </div>
        </div>
      </div>
    </div>