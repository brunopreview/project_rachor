<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>	
	<link rel="stylesheet" href=" <?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap.min.css'); ?> ">
	<link rel="stylesheet" href=" <?php echo base_url('public/assets/css/custom.css'); ?> ">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<script src=" <?php echo base_url('vendor/components/jquery/jquery.min.js'); ?> "></script>
	<script src=" <?php echo base_url('vendor/twbs/bootstrap/dist/js/bootstrap.min.js'); ?> "></script>

	<script src=" <?php echo base_url('public/assets/js/sidebar-custom.js'); ?> "></script>

	<meta charset="utf-8">
	<title>Rachor</title>
</head>

<header>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark p-t-5 p-b-5 m-b-0">
		<ul class="navbar-nav">
			<li class="nav-item active">
			<a class="nav-link" href="#">Active</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Link</a>
			</li>
		</ul>

		
		<button type="button" id="sidebarCollapse" class="btn btn-invisible font-1-5em color-white">
			<i class="fa fa-bars"></i>
		</button>
	</nav>
</header>
