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

    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
                    <?php echo anchor('public/home/index', 'Home'); ?>
                  </li>
                  <li class="">
                    <?php echo anchor('public/home/blog', 'Blog'); ?>
                  </li>
                  <li class="">
                    <?php echo anchor('public/home/about', 'About'); ?>
                  </li>
                  <li class="">
                    <a href="#myModal" data-toggle="modal">Login</a>
                  </li>
                </ul>
              </div>
        </div>
      </div>
    </div>



    <!-- LOGIN MODAL -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Login</h3>
      </div>
      <div class="modal-body">
        <center>
          <?php echo form_open('public/login'); ?>
          <?php echo form_input('username', '', "placeholder='Username'"); ?>
          <br />
          <?php $attributes = array('type' => 'password', 'name' => 'password', 'placeholder' => 'Password'); ?>
          <?php echo form_input($attributes); ?>
          <br />
          <?php echo form_submit(array('name'=>'submit', 'value'=>"Go!", 'class'=>'btn btn-inverse')); ?>
          <?php echo form_close(); ?>
        </center>
      </div>
    </div>