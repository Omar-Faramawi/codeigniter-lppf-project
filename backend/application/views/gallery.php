
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  Gallery section
                  <!--<small>Optional description</small>-->
               </h1>
               <!--<ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                  <li class="active">Here</li>
                  </ol>-->
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="box box-info">
                  <div class="box-header with-border">
                     <h3 class="box-title">Heading Elements</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                     <?php if($this->session->flashdata('errors') != ''){
                           ?><div class="alert alert-danger"><?php echo $this->session->flashdata('errors');?></div><?php
                        }else if($this->session->flashdata('success') != ''){
                           ?>
                              <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                           <?php
                        } ?>
                     <form role="form" method="post" action="gallery/heading" enctype="multipart/form-data">
                        <!-- text input -->
                        <div class="form-group">
                           <label>Title</label>
                           <input type="text" name="title" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                           <label>Small title</label>
                           <input type="text" name="stitle" class="form-control" placeholder="Enter ...">
                        </div>
                        <!-- textarea -->
                        <div class="form-group">
                           <label>Paragraph</label>
                           <textarea class="form-control" name="paragraph" rows="3" placeholder="Enter ..."></textarea>
                           <script type="text/javascript">
                                CKEDITOR.replace( 'paragraph' );
                              </script>
                        </div>
                        <div class="form-group" style="margin-bottom:-14px;">
                           <div class="row">
                              <div class="col-sm-6">
                                 <label for="exampleInputFile">Heading background</label>
                                 <input type="file" id="exampleInputFile" name="aboutimg"><br>
                              </div>
                              <div class="col-sm-6">
                                 <button class="btn btn-primary pull-right btn-lg">Submit</button>
                              </div>
                           </div>
                           <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                     </form>
                  </div>
                  <!-- /.box-body -->
               </div>
               <div class="box box-info">
                  <div class="box-header with-border">
                     <h3 class="box-title">Gallery images</h3>
                  </div>
                  <div class="box-body">
                     <div class="post">
                        <!--<div class='user-block'>
                           <img class='img-circle img-bordered-sm' src='<?php echo base_url(); ?>public/dist/img/user6-128x128.jpg' alt='user image'>
                           <span class='username'>
                             <a href="#">Adam Jones</a>
                             <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                           </span>
                           <span class='description'>Posted 5 photos - 5 days ago</span>
                           </div><!-- /.user-block -->
                        <div class='row margin-bottom'>
                           <!--<div class='col-sm-6'>
                              <img class='img-responsive' src='<?php echo base_url(); ?>public/dist/img/photo1.png' alt='Photo'>
                              </div><!-- /.col -->
                           <div class='col-sm-12'>
                              <div class='row'>
                                 <?php 
                                 foreach ($row as $data) {
                                     ?>
                                 <div class='col-sm-6'>

                                    <img class='img-responsive' src='<?php echo base_url(); ?>uploads/<?php echo $data->img; ?>' alt='Photo' style="height:300px;">
                                    <a href="gallery/delete_image/<?php echo $data->id; ?>"><i class="fa fa-trash-o"></i> delete</a>
                                 </div>
                                     <?php  # code...
                                 }
                                  ?>
                                 
                                 <!-- /.col -->
                              </div>
                              <!-- /.row -->
                           
                           <!-- /.col -->
                        <!-- /.row -->
                        <br>
                        <div class="form-group">
                           <div class="row">
                           <?php if($this->session->flashdata('errors-section') != ''){
                           ?><div class="alert alert-danger"><?php echo $this->session->flashdata('errors-section');?></div><?php
                        }else if($this->session->flashdata('success-section') != ''){
                           ?>
                              <div class="alert alert-success"><?php echo $this->session->flashdata('success-section'); ?></div>
                           <?php
                        } ?>
                           <form method="post" action="gallery/add_new_image" enctype="multipart/form-data">
                              <div class="col-sm-6">
                                 <label for="exampleInputFile">Upload images</label>
                                 <input type="file" name='img' id="exampleInputFile"><br>
                              </div>
                              <div class="col-sm-6">
                                 <button href="" class="btn btn-primary pull-right" >upload</button>
                              </div>
                           </form>
                           </div>
                           <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                        </div>
                     </div>
                     <!-- /.post -->
                  </div>
               </div>

            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
       