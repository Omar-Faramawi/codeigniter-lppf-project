<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Home section
         <!--<small>Optional description</small>-->
      </h1>
      <!--<ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
         <li class="active">Here</li>
         </ol>-->
   </section>
   <!-- Main content -->
   <section class="content">
      <!-- Your Page Content Here -->
      <div class="box box-info">
         <div class="box-header with-border">
            <h3 class="box-title">Stay connected links</h3>
         </div>
         <div class="box-body">
            <?php if($this->session->flashdata('errors') != ''){
               ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('errors');?></div>
            <?php
               }else if($this->session->flashdata('success') != ''){
                  ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php
               } ?>
            <form method="post" action="home/update_facebook">
               <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                  <input type="text" name="facebook" class="form-control" placeholder="Facebook page link">
                  <span class="input-group-btn">
                  <button class="btn btn-default btn-flat" ><i class="fa fa-plus"></i></button>
                  </span>
               </div>
            </form>
            <br>
            <form method="post" action="home/update_twitter">
               <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                  <input type="text" name='twitter' class="form-control" placeholder="Twitter account link">
                  <span class="input-group-btn">
                  <button class="btn btn-default btn-flat" ><i class="fa fa-plus"></i></button>
                  </span>
               </div>
            </form>
            <br>
            <form method="post" action="home/update_youtube">
               <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                  <input type="text" name="youtube" class="form-control" placeholder="Youtube channel link">
                  <span class="input-group-btn">
                  <button class="btn btn-default btn-flat" ><i class="fa fa-plus"></i></button>
                  </span>
               </div>
            </form>
            <br>
            <form method="post" action="home/update_linkedin">
               <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                  <input type="text" name="linkedin" class="form-control" placeholder="Linkedin profile link">
                  <span class="input-group-btn">
                  <button class="btn btn-default btn-flat" ><i class="fa fa-plus"></i></button>
                  </span>
               </div>
            </form>
            <br>
            <form method="post" action="home/update_forum">
               <div class="input-group">
                  <span class="input-group-addon">Forum</span>
                  <input type="text" name="forum" class="form-control" placeholder="Forum link">
                  <span class="input-group-btn">
                  <button class="btn btn-default btn-flat" ><i class="fa fa-plus"></i></button>
                  </span>
               </div>
            </form>
         </div>
         <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <div class="box box-info">
         <div class="box-header with-border">
            <h3 class="box-title">Slider images</h3>
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
                           foreach ($slider as $data) {
                               ?>
                        <div class='col-sm-6'>
                           <img class='img-responsive' src='<?php echo base_url(); ?>uploads/<?php echo $data->img; ?>' alt='Photo' style="height:300px;">
                           <a href="home/slider_image_delete/<?php echo $data->id; ?>"><i class="fa fa-trash-o"></i> delete</a>
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
                              ?>
                           <div class="alert alert-danger"><?php echo $this->session->flashdata('errors-section');?></div>
                           <?php
                              }else if($this->session->flashdata('success-section') != ''){
                                 ?>
                           <div class="alert alert-success"><?php echo $this->session->flashdata('success-section'); ?></div>
                           <?php
                              } ?>
                           <form method="post" action="home/slider_image_add" enctype="multipart/form-data">
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
      </div>

      <!-- -->
      <div class="box box-info">
         <div class="box-header with-border">
            <h3 class="box-title">Background image</h3>
         </div>
         <div class="box-body">
            <div class="post">
               <div class='row margin-bottom'>
                  <div class='col-sm-12'>
                     <div class="form-group">
                        <div class="row">
                           <?php if($this->session->flashdata('errors-section2') != ''){
                              ?>
                           <div class="alert alert-danger"><?php echo $this->session->flashdata('errors-section2');?></div>
                           <?php
                              }else if($this->session->flashdata('success-section2') != ''){
                                 ?>
                           <div class="alert alert-success"><?php echo $this->session->flashdata('success-section2'); ?></div>
                           <?php
                              } ?>
                           <form method="post" action="home/background_image_add" enctype="multipart/form-data">
                              <div class="col-sm-6">
                                 <label for="exampleInputFile">Upload image</label>
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
      </div>

      <!-- /.box -->
      <div class="box box-info">
         <div class="box-header with-border">
            <h3 class="box-title">Volunteer</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
            <?php if($this->session->flashdata('errorsvolunteer') != ''){
               ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('errorsvolunteer');?></div>
            <?php
               }else if($this->session->flashdata('successvolunteer') != ''){
                  ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('successvolunteer'); ?></div>
            <?php
               } ?>
            <form role="form" method="post" action="home/volunteer" enctype="multipart/form-data">
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
                  <textarea class="form-control" name="paragraph-vl" rows="3" placeholder="Enter ..."></textarea>
                  <script type="text/javascript">
                                CKEDITOR.replace( 'paragraph-vl' );
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

      <!-- /.box -->
      <div class="box box-info">
         <div class="box-header with-border">
            <h3 class="box-title">Training</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
            <?php if($this->session->flashdata('errorstraining') != ''){
               ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('errorstraining');?></div>
            <?php
               }else if($this->session->flashdata('successtraining') != ''){
                  ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('successtraining'); ?></div>
            <?php
               } ?>
            <form role="form" method="post" action="home/training" enctype="multipart/form-data">
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
                  <textarea class="form-control" name="paragraph-tra" rows="3" placeholder="Enter ..."></textarea>
                  <script type="text/javascript">
                                CKEDITOR.replace( 'paragraph-tra' );
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

      <!-- /.box -->
      <div class="box box-info">
         <div class="box-header with-border">
            <h3 class="box-title">Partnership</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
            <?php if($this->session->flashdata('errorspartnership') != ''){
               ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('errorspartnership');?></div>
            <?php
               }else if($this->session->flashdata('successpartnership') != ''){
                  ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('successpartnership'); ?></div>
            <?php
               } ?>
            <form role="form" method="post" action="home/partnership" enctype="multipart/form-data">
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
                  <textarea class="form-control" name="paragraph-pra" rows="3" placeholder="Enter ..."></textarea>
                  <script type="text/javascript">
                                CKEDITOR.replace( 'paragraph-pra' );
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

      <!-- /.box -->
      <div class="box box-info">
         <div class="box-header with-border">
            <h3 class="box-title">Research</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
            <?php if($this->session->flashdata('errorsresearch') != ''){
               ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('errorsresearch');?></div>
            <?php
               }else if($this->session->flashdata('successresearch') != ''){
                  ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('successresearch'); ?></div>
            <?php
               } ?>
            <form role="form" method="post" action="home/research" enctype="multipart/form-data">
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
                  <textarea class="form-control" name="paragraph-res" rows="3" placeholder="Enter ..."></textarea>
                  <script type="text/javascript">
                                CKEDITOR.replace( 'paragraph-res' );
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
         <div class="box-header with-border">
            <h3 class="box-title">Add research item</h3>
         </div>
         <table class="table table-condensed">
                        <tr>
                           <th style="width: 10px">#</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th style="width: 94px">Action</th>
                        </tr>
                        <?php
                        $counter = 1;
                        foreach ($researchSections as $data) {
                           ?>
                           <tr>
                           <td><?php echo $counter; ?>.</td>
                           <td><?php echo $data->title; ?></td>
                           <td><?= $data->desc; ?></td>
                           
                           <td><a href="home/delete_research/<?php echo $data->id;?>"><i class="fa fa-trash-o"></i> delete</a></td>
                        </tr>
                           <?php
                        $counter++;
                        }
                        ?>
                     </table>
         <!-- /.box-header -->
         <div class="box-body">
            <?php if($this->session->flashdata('errorsresearch-item') != ''){
               ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('errorsresearch-item');?></div>
            <?php
               }else if($this->session->flashdata('successresearch-item') != ''){
                  ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('successresearch-item'); ?></div>
            <?php
               } ?>
            <form role="form" method="post" action="home/research_item" enctype="multipart/form-data">
               <!-- text input -->
               
               <!-- textarea -->
               <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" name="paragraph-res-item" rows="3" placeholder="Enter ..."></textarea>
                  <script type="text/javascript">
                                CKEDITOR.replace( 'paragraph-res-item' );
                              </script>
               </div>
               <div class="form-group" style="margin-bottom:-14px;">
                  <div class="row">
                     <div class="col-sm-6">
                        <label for="exampleInputFile">Upload file</label>
                        <input type="file" id="exampleInputFile" name="research-file"><br>
                     </div>
                     <div class="col-sm-6">
                        <button class="btn btn-primary pull-right btn-lg">Submit</button>
                     </div>
                  </div>
                  <!--<p class="help-block">Example block-level help text here.</p>-->
               </div>
            </form>
         </div>
      </div>

      <!-- /.box -->
      <div class="box box-info">
         <div class="box-header with-border">
            <h3 class="box-title">Terms of services</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
            <?php if($this->session->flashdata('errorsterms') != ''){
               ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('errorsterms');?></div>
            <?php
               }else if($this->session->flashdata('successterms') != ''){
                  ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('successterms'); ?></div>
            <?php
               } ?>
            <form role="form" method="post" action="home/terms" enctype="multipart/form-data">
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
                  <label>Terms</label>
                  <textarea class="form-control" name="paragraph-terms" rows="3" placeholder="Enter ..."></textarea>
                  <script type="text/javascript">
                                CKEDITOR.replace( 'paragraph-terms' );
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
      <!-- /.box -->
      <div class="box box-info">
         <div class="box-header with-border">
            <h3 class="box-title">Privacy Policy</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
            <?php if($this->session->flashdata('errorsprivacy') != ''){
               ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('errorsprivacy');?></div>
            <?php
               }else if($this->session->flashdata('successprivacy') != ''){
                  ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('successprivacy'); ?></div>
            <?php
               } ?>
            <form role="form" method="post" action="home/privacy" enctype="multipart/form-data">
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
                  <label>Privacy Policy</label>
                  <textarea class="form-control" name="paragraph-prv" rows="3" placeholder="Enter ..."></textarea>
                  <script type="text/javascript">
                                CKEDITOR.replace( 'paragraph-prv' );
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
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
