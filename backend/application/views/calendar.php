
         <!-- Content Wrapper. Contains page content -->
      <link rel="stylesheet" type="text/css" href="public/datepicker.css">

         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  Calendar
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
                     <form role="form" method="post" action="calendar/heading" enctype="multipart/form-data">
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

               <div class="box">
                  <div class="box-header">
                     <h3 class="box-title">Events</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                     <table class="table table-condensed">
                        <tr>
                           <th style="width: 10px">#</th>
                           <th>Name</th>
                           <th>Start Date</th>
                           <th>End Date</th>
                           <th style="width: 94px">Action</th>
                        </tr>
                        <?php
                        $counter = 1;
                        foreach ($row as $data) {
                           ?>
                           <tr>
                           <td><?php echo $counter; ?>.</td>
                           <td><?php echo $data->title; ?></td>
                           <td>
                              <?php echo $data->date; ?>
                           </td>
                           <td>
                              <?php echo $data->enddate; ?>
                           </td>
                           <td><a href="calendar/delete_event/<?php echo $data->id;?>"><i class="fa fa-trash-o"></i> delete</a></td>
                        </tr>
                           <?php
                        $counter++;
                        }
                        ?>
                     </table>
                  </div>
                  <!-- /.box-body -->
               </div>

               <div class="box box-info" style="padding-bottom:15px;">
                  <div class="box-header with-border">
                     <h3 class="box-title">Add new event</h3>
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
                     <form role="form" method="post" action="calendar/add_new_event">
                        <!-- text input -->
                        <div class="input-group">
                          <label class="input-group-addon">Start Date :</label>
                          <input type="text" class="datepicker form-control" placeholder="Date" name="date" style="margin-top:0px;">   
                          <span class="input-group-addon" ><i class="fa fa-calendar"></i></span>
                        </div><br>
                        <div class="input-group">
                          <label class="input-group-addon">End Date :</label>
                          <input type="text" class="datepicker form-control" placeholder="Date" name="enddate" style="margin-top:0px;">   
                          <span class="input-group-addon" ><i class="fa fa-calendar"></i></span>
                        </div>
                        <br>
                        <div class="form-group">
                           <label>Title</label>
                           <input type="text" name="title" class="form-control" placeholder="Enter ...">
                        </div>
                        <!-- textarea -->
                        <div class="form-group">
                           <label>details</label>
                           <textarea class="form-control" name="paragraph" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                        <div class="form-group" style="margin-bottom:-14px;">
                           <div class="row">
                              <div class="col-sm-6">
                
                              </div>
                              <div class="col-sm-6">
                                 <button class="btn btn-primary pull-right">Submit</button>
                              </div>
                           </div>
                           <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                     </form>
                  </div>
                  <!-- /.box-body -->
               </div>
               <!-- /.row -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
