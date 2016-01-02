<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?php echo $title; ?></title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.5 -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/fullcalendar/fullcalendar.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/fullcalendar/fullcalendar.print.css" media="print">
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/AdminLTE.min.css">
      
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/skins/skin-blue.min.css">
      <script src="<?php echo base_url(); ?>public/ckeditor/ckeditor.js"></script>


      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

      <![endif]-->
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         <!-- Main Header -->
         <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url();?>" class="logo" style="font-size:14px;">
               <!-- mini logo for sidebar mini 50x50 pixels -->
               <span class="logo-mini"><b>LPPF</b></span>
               <!-- logo for regular state and mobile devices -->
               <span class="logo-lg"><b>Libyan Public Policy Forum</b></span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
               <!-- Sidebar toggle button-->
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
               </a>
            </nav>
         </header>
         <!-- Left side column. contains the logo and sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
               <!-- Sidebar Menu -->
               <ul class="sidebar-menu">
                  <li class="header">Sections</li>
                  <!-- Optionally, you can add icons to the links -->
                  <li <?php  if($title == "Home Section"){ echo "class='active'"; } ?>><a href="home"><i class="fa fa-home"></i> <span>Home</span></a></li>
                  <li <?php  if($title == "About Section"){ echo "class='active'"; } ?>><a href="about"><i class="fa fa-info-circle"></i> <span>About</span></a></li>
                  <li <?php  if($title == "Contact Section"){ echo "class='active'"; } ?>>
                     <a href="contact">
                     <i class="fa fa-envelope"></i> <span>Contact</span>
                     </a>
                  </li>
                  <li <?php  if($title == "Mission Section"){ echo "class='active'"; } ?>><a href="mission"><i class="fa fa-rocket"></i> <span>Our mission</span></a></li>
                  <li <?php  if($title == "Gallery Section"){ echo "class='active'"; } ?>><a href="gallery"><i class="fa fa-picture-o"></i> <span>Gallery</span></a></li>
                  <li <?php  if($title == "Calendar Section"){ echo "class='active'"; } ?>>
                     <a href="calendar">
                     <i class="fa fa-calendar"></i> <span>Calendar</span>
                     </a>
                  </li>
                  <li <?php  if($title == "Polls Section"){ echo "class='active'"; } ?>>
                     <a href="polls">
                     <i class="fa fa-dot-circle-o"></i>
                     <span>Polls</span>
                     </a>
                  </li>
                  <li <?php  if($title == "Publications Section"){ echo "class='active'"; } ?>><a href="publications"><i class="fa fa-file"></i> <span>Publications</span></a></li>
                  <li <?php  if($title == "News Section"){ echo "class='active'"; } ?>><a href="news"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li>
                  <li <?php  if($title == "Partners Section"){ echo "class='active'"; } ?>><a href="partners"><i class="fa fa-users"></i> <span>Partners</span></a></li>
                  <li <?php  if($title == "Programs Section"){ echo "class='active'"; } ?>><a href="programs"><i class="fa fa-tasks"></i> <span>Programs</span></a></li>
                  <li <?php  if($title == "Reports Section"){ echo "class='active'"; } ?>><a href="reports"><i class="fa fa-file-text-o"></i> <span>Reports</span></a></li>
                  <li <?php  if($title == "Media Section"){ echo "class='active'"; } ?>><a href="media"><i class="fa fa-medium"></i> <span>Media</span></a></li>
                  <li <?php  if($title == "Settings"){ echo "class='active'"; } ?>><a href="settings"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
                  <li><a href="<?php echo base_url();?>home/logout"><i class="fa fa-sign-out"></i> <span>Log Out</span></a></li>
               </ul>
               <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
         </aside>