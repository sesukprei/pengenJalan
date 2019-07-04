<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
 	<title>Login V4</title>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 <!--===============================================================================================-->
 	<link rel="icon" type="image/png" href="<?php echo base_url('images/icons/favicon.ico') ?>"/>
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" >
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>" >
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fonts/iconic/css/material-design-iconic-font.min.css') ?>">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/animate/animate.css') ?>">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css-hamburgers/hamburgers.min.css') ?>">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/animsition/css/animsition.min.css') ?>">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/select2/select2.min.css') ?>">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/daterangepicker/daterangepicker.css') ?>">
 <!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/util.css') ?>">
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css') ?>">
 <!--===============================================================================================-->
 </head>
 <body>

   <?php
 // Cetak jika ada notifikasi
   if($this->session->flashdata('sukses')) {
        echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
   }
   ?>

   <?php echo form_open('login');?>
 	<div class="limiter">
 		<div class="container-login100" style="background-image: url('<?php echo base_url('images/bg-01.jpg');?>">
 			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
 				<form class="login100-form validate-form">
 					<span class="login100-form-title p-b-49">
 						<?php echo $message; ?>
 					</span>

 					<div class="flex-col-c p-t-155">
 						<a href="<?php echo site_url('/login'); ?>" class="txt2">
 							Sign In
 						</a>
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>

   <?php echo form_close();?>
 	<div id="dropDownSelect1"></div>

 <!--===============================================================================================-->
 	<script src="<?php echo base_url('vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
 <!--===============================================================================================-->
 	<script src="<?php echo base_url('vendor/animsition/js/animsition.min.js') ?>"></script>
 <!--===============================================================================================-->
 	<script src="<?php echo base_url('vendor/bootstrap/js/popper.js') ?>"></script>
 	<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
 <!--===============================================================================================-->
 	<script src="<?php echo base_url('vendor/select2/select2.min.js') ?>"></script>
 <!--===============================================================================================-->
 	<script src="<?php echo base_url('vendor/daterangepicker/moment.min.js') ?>"></script>
 	<script src="<?php echo base_url('vendor/daterangepicker/daterangepicker.js') ?>"></script>
 <!--===============================================================================================-->
 	<script src="<?php echo base_url('vendor/countdowntime/countdowntime.js') ?>"></script>
 <!--===============================================================================================-->
 	<script src="<?php echo base_url('js/main.js') ?>"></script>

 </body>
 </html>
