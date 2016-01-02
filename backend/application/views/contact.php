
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  Contact section
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
                     <form role="form" method="post" action="contact/heading" enctype="multipart/form-data">
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
                        <div class="form-group">
                           <label>Google maps embed URL</label>
                           <p>
                              1- Navigate to <a target='_blank' href="https://www.google.com.eg/maps?source=tldsi&hl=en">google maps</a><br>
                              2- Use Search google maps to find your location, zoom in to right place<br>
                              3- On the left side Box, click on share icon<br>
                              4- Share Embed box appears over the map, click on Embed map<br>
                              5- Find <xmp><iframe src="https://www.google.com/maps/emb..... etc"</xmp><br>
                              6- Copy only the text between the double quotes and paste it in the input below<br>
                           </p>
                           <input type="text" name="googlemaps" class="form-control" placeholder="Enter ...">
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
                     <h3 class="box-title">Messages</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                  <?php
                  foreach ($row['emails'] as $email) {
                     $time = strtotime($email->date);
                     $myFormatForView = date("m/d/y g:i A", $time);
                     ?>
                     <div class="box">
                        <div class="box-header">
                           <a class="pull-right" href="contact/delete/<?php echo $email->id;?>"><i class="glyphicon glyphicon-trash"></i></a>
                           <h3 class="box-title"><?php echo $email->subject; ?> <small><?php echo $myFormatForView; ?></small></h3>
                        </div>
                         <div class="box-body">
                            <p>
                               <label>Name : </label> <?php echo $email->name; ?><br>
                               <label>Email : </label> <?php echo $email->email; ?><br>
                               <label>Message : <br></label> <?php echo $email->message; ?><br>
                            </p>
                         </div>
                     </div>
                     <?php
                  }
                  ?>
                     


                   
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
        