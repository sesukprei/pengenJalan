<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 <title>pengenJalan Register</title>
 <!-- Bootstrap core CSS-->
 <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
 <!-- Custom fonts for this template-->
 <link href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
 <!-- Custom styles for this template-->
 <link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">
</head>
<body style="background-image: url('<?php echo base_url('images/bg-3.jpg');?>">

<?php echo form_open('register');?>

 <div class="container">
   <div class="card card-register mx-auto mt-5">
     <div class="card-header">Register an Account</div>
     <div class="card-body">
       <!-- <form method="post" action="register.php"> -->
         <div class="form-group">
           <div class="form-row">
             <div class="col-md-12">
               <label for="exampleInputName">Firstname</label>
               <input class="form-control" type="text" name="first_name" value="<?php echo set_value('first_name'); ?>"/>
               <p> <?php echo form_error('first_name'); ?> </p>
             </div>
           </div>
         </div>
         <div class="form-group">
           <div class="form-row">
             <div class="col-md-12">
               <label for="exampleInputName">Lastname</label>
               <input class="form-control" type="text" name="last_name" value="<?php echo set_value('last_name'); ?>"/>
               <p> <?php echo form_error('last_name'); ?> </p>
             </div>
           </div>
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Email address</label>
           <input class="form-control" type="text" name="email" value="<?php echo set_value('email'); ?>"/>
           <p> <?php echo form_error('email'); ?> </p>
         </div>
         <div class="form-group">
           <div class="form-row">
             <div class="col-md-6">
               <label for="exampleInputPassword1">Password</label>
               <input class="form-control" type="password" name="password" value="<?php echo set_value('password'); ?>"/>
               <p> <?php echo form_error('password'); ?> </p>
             </div>
            <div class="col-md-6">
               <label for="exampleInputPassword1">Confirm Password</label>
               <input class="form-control" type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
               <p> <?php echo form_error('password_conf'); ?> </p>
             </div>
           </div>
         </div>
          <button style="background-color:#d72dfc;" type="submit" class="btn btn-primary btn-block" name="btnSubmit" value="Daftar">Register</button>
       <!-- </form> -->
       <div class="text-center">
         <a class="d-block small mt-3" href="<?php echo site_url('login');?>">Login Page</a>
       <!--- <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
       </div>
     </div>
   </div>
 </div>

<?php echo form_close();?>

 <!-- Bootstrap core JavaScript-->
 <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
 <!-- Core plugin JavaScript-->
 <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
</body>
</html>
