<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Libyan Public Policy Forum</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.5 -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<script src="<?php echo base_url(); ?>public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Bootstrap 3.3.5 -->
      <script src="<?php echo base_url(); ?>public/bootstrap/js/bootstrap.min.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

      <![endif]-->
   </head>
 <body style="padding-top:100px;background-color:#efefef;">

  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <center>
        <h1>Libyan Public Policy Forum</h1>
<div class="panel panel-default">
  <div class="panel-heading">Login</div>
  <div class="panel-body">
    <div class="form-group">
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" class="form-control" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input class="form-control" type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" class="btn btn-primary" value="Login"/>
   </form>       
</div>
  </div>
</div>
          


        </center>
      </div>
    </div>
  </div>
   


 </body>
</html>