<!DOCTYPE html>
<html>
<head>
	<?php
    
    echo link_tag('assets/bootstrap/css/bootstrap.css');
    echo link_tag('assets/bootstrap/css/bootstrap.min.css');
    echo link_tag('assets/bootstrap/fontawosome.css');
    echo link_tag('assets/bootstrap/css/bootstrap-grid.min.css');
    echo link_tag('assets/bootstrap/css/bootstrap-reboot.css');
    echo link_tag('assets/css/styles.css');
  ?>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 
  <script type="text/javascript" src="<?=base_url()?>assets/bootstrap/js/bootstrap.js" ></script>
  <script type="text/javascript" src="<?=base_url()?>assets/bootstrap/js/jquery-3.3.1.min.js" ></script>
  <script type="text/javascript" src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js" ></script>
  <script type="text/javascript" src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.js" ></script>
  <script type="text/javascript" src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js" ></script>
	<title>Dental clinic</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.8"> 
</head>
<body>
	<div class="container-fluid">
		<h1 class="text-primary text-center shadow p-3 mb-3 mt-3 bg-white rounded">ORACARE DENTAL CLINIC</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item" id="n_home">
        <a class="nav-link pr-3 pl-2 text-white" href="<?php echo site_url('Welcome') ?>">Home</a>
      </li>
      <li class="nav-item" id="n_about">
        <a class="nav-link pr-3 pl-2 text-white" href="<?php echo site_url('Welcome/about_us') ?>">About US</a>
      </li>
      <li class="nav-item" id="n_services">
        <a class="nav-link pr-3 pl-2 text-white" href="<?php echo site_url('Welcome/services') ?>">Services</a>
      </li>
      <li class="nav-item" id="n_contact">
        <a class="nav-link pr-3 pl-2 text-white" href="<?php echo site_url('Welcome/contact_us') ?>">Contact us</a>
      </li>
      <li class="nav-item" id="n_apointment">
        <a class="nav-link pr-3 pl-2 text-white" href="<?php echo site_url('Welcome/apointment') ?>">Take Apointment</a>
      </li>
      <li class="nav-item active" id="n_login">
        <a class="nav-link pr-2 pl-2 text-white" href="<?php echo site_url('Welcome/login') ?>">Login as Admin</a>
      </li>
    </ul>
  </div>
</nav>