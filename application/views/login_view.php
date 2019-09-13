<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>

    <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('css/sb-admin.css');?>" rel="stylesheet">

  </head>
  <body class="bg-dark">
 
      <div class="container">
       <div class="card card-login mx-auto mt-5">
       <div class="card-header">Login</div>
       <div class="card-body">
         <form class="form-signin" action="<?php echo site_url('index.php/login/auth');?>" method="post">
           <?php echo $this->session->flashdata('msg');?>
           <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
           <input type="password" name="password" class="form-control" placeholder="Password" required>
           <div class="checkbox">
             <label>
               <input type="checkbox" value="remember-me"> Remember me
             </label>
           </div>
           <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
         </form>
         </div>
       </div>
       </div> <!-- /container -->
 
   
  </body>
</html>