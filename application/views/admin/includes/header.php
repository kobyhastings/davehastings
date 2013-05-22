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

    <!-- CKeditor -->
    <script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>

    <script type="text/javascript" src="//use.typekit.net/ymt3ujb.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-button.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-typeahead.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-affix.js"></script>
    <script src="<?php echo base_url(); ?>js/holder/holder.js"></script>
    <script src="<?php echo base_url(); ?>js/google-code-prettify/prettify.js"></script>
    <script src="<?php echo base_url(); ?>js/application.js"></script>
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
                    <?php echo anchor('admin/home/about', 'Biography'); ?>
                  </li>
                  <li class="">
                    <?php echo anchor('login/logout', 'Logout'); ?>
                  </li>
                </ul>
              </div>
        </div>
      </div>
    </div>