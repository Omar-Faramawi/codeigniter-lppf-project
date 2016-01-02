<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title><?php echo $title; ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--CSS-->
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/carousel.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
      <link rel='stylesheet' href='<?php echo base_url(); ?>public/css/jquery-ui.min.css' />
      <link href='<?php echo base_url(); ?>public/css/fullcalendar.css' rel='stylesheet' />
      <link href='<?php echo base_url(); ?>public/css/fullcalendar.print.css' rel='stylesheet' media='print' />
      <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/jquery.fancybox.css">
      <?php 
      echo "<style type='text/css'>
            body{
               background-image: url(".UPLOADED_Background_PATH.") !important;
            }
         </style>";
       ?>

      <!--JS-->
      <script src='<?php echo base_url(); ?>public/js/jquery-1.11.3.min.js'></script>
      <script src='<?php echo base_url(); ?>public/js/bootstrap.min.js'></script>
      <script src='<?php echo base_url(); ?>public/js/moment.min.js'></script>
      <script src='<?php echo base_url(); ?>public/js/fullcalendar.min.js'></script>
      <script src='<?php echo base_url(); ?>public/js/jquery.fancybox.js'></script>

   </head>
   <body>
      <div class="container-fluid  NoPadding MenuWrapper">
         <div class="container NoPadding">
            <nav class="navbar navbar-default">
               <div class="container-fluid ">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>public/img/logo.png">
                     </a>
                  </div>
                  <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav">
                        <li class="dropdown">
                           <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About LPPF <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>about" >About</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>mission" >Mission</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>gallery" >Gallery</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>partners" >Partners</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="dropdown">
                           <a href="<?php echo base_url();?>programs" >Programs</a>
                        </li>
                       
                           
                        <!--<li class="dropdown">
                           <a href="<?php echo base_url();?>gallery" >Gallery</a>
                        </li>-->
                        <!--<li class="dropdown">
                           <a href="<?php echo base_url();?>calendar" >Calendar</a>
                        </li>-->
                        
                        <li class="dropdown">
                           <a href="<?php echo base_url();?>polls" >Polls</a>
                        </li>
                        <!--<li class="dropdown">
                           <a href="<?php echo base_url();?>news">News</a>
                        </li>-->
                        <!--<li class="dropdown">
                           <a href="<?php echo base_url();?>publications" >Publications</a>
                        </li>-->
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publications<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>publications" >Publications</a></li>
                                    <li><a href="<?php echo base_url();?>research">Research</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>reports">Reports</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>media">Media</a>
                                    </li>
                                </ul>
                            </li>
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Get Involved<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>partnership">Partnership</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>volunteer">Volunteer</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>training">Training</a>
                                    </li>
                                </ul>
                            </li>
                         <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News and Events<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>news">News</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>calendar">Events</a>
                                    </li>
                                </ul>
                            </li>
                        <li class="dropdown">
                           <a href="<?php echo base_url();?>contact" >Contact Us</a>
                        </li>
                        <li class="dropdown visible-lg">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></a>
                           <ul class="dropdown-menu SearchBox">
                              <input type="text" id="search-input" postto="<?php echo base_url();?>search" class="form-control" placeholder="Search here ..">
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>