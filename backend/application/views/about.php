
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  About section
               </h1>
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
                     <form role="form" method="post" action="about/heading" enctype="multipart/form-data">
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
                           <textarea class="form-control" value="xxx" name="paragraph" rows="3" placeholder="Enter ..."></textarea>
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
                     <h3 class="box-title">About sections</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                     <?php
                     foreach($row as $data){
                        ?>
                     <div class="col-sm-4">
                        <div class="box box-widget widget-user" >
                           <div class="widget-user-header bg-black" style="background: url('uploads/<?php echo $data->img;?>') center center; height:170px; background-size:auto 170px; background-repeat:no-repeat;">
                              <h3 class="widget-user-username"><?php echo $data->title; ?></h3>
                              <h5 class="widget-user-desc"><?php echo $data->t_small; ?></h5>
                           </div>
                           <div class="box-footer" style="background-color:#efefef;min-height:155px;">
                              <div class="row">
                                 <div class='col-sm-12'>
                                    <p>
                                       <?php
                                          $length = strlen("section 2 section 2 section 2 section 2 section 2 section 2 section 2 section 2 section 2 section 2 section 2 section 2 section 2 section 2 section 2 section 2 section 2");
                                          echo substr($data->topic, 0, $length)."...";
                                       ?>
                                    </p>
                                    <a href="about/delete_section/<?php echo $data->id; ?>"><i class="fa fa-trash-o"></i> delete</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                        <?php
                     }
                     ?>
                  </div>
                  <div class="box-header with-border">
                     <h3 class="box-title">Add new section</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <?php if($this->session->flashdata('errors-section') != ''){
                           ?><div class="alert alert-danger"><?php echo $this->session->flashdata('errors-section');?></div><?php
                        }else if($this->session->flashdata('success-section') != ''){
                           ?>
                              <div class="alert alert-success"><?php echo $this->session->flashdata('success-section'); ?></div>
                           <?php
                        } ?>
                     <form role="form" method='post' action='about/add_new_section' enctype="multipart/form-data">
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
                           <textarea class="form-control" name="paragraph-sec" rows="3" placeholder="Enter ..."></textarea>
                           <script type="text/javascript">
                                CKEDITOR.replace( 'paragraph-sec' );
                              </script>
                        </div>
                        <div class="form-group" style="margin-bottom:-14px;">
                           <div class="row">
                              <div class="col-sm-6">
                                 <label for="exampleInputFile">Picture</label>
                                 <input type="file" name="sectionimg"  id="exampleInputFile"><br>
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

            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         