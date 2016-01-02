
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  Publications section
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
                     <form role="form" method="post" action="publications/heading" enctype="multipart/form-data">
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
                     <h3 class="box-title">Publications</h3>
                     <?php if($this->session->flashdata('errors-section') != ''){
                           ?><div class="alert alert-danger"><?php echo $this->session->flashdata('errors-section');?></div><?php
                        }else if($this->session->flashdata('success-section') != ''){
                           ?>
                              <div class="alert alert-success"><?php echo $this->session->flashdata('success-section'); ?></div>
                           <?php
                        } ?>
                     <form role="form" method="post" action="publications/add_new_publication" enctype="multipart/form-data">
                     <br>
                        <input type="file" id="exampleInputFile" name="file"><br>
                        description : <input type='text' name='desc'><br><br>
                        <button href="" class="btn btn-primary" style="width:85px;"  data-toggle="tooltip" data-placement="left" title="Add new publication"><i class="fa fa-plus"></i></button>
                     </form>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                     <table class="table table-condensed">
                        <tr>
                           <th style="width: 10px">#</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th>Date</th>
                           <th style="width: 94px">Action</th>
                        </tr>
                        <?php
                        $counter = 1;
                        foreach ($row as $data) {
                           ?>
                           <tr>
                           <td><?php echo $counter; ?>.</td>
                           <td><?php echo $data->title; ?></td>
                           <td><?= $data->desc; ?></td>
                           <td>
                              <?php echo $data->date; ?>
                           </td>
                           <td><a href="publications/delete_publication/<?php echo $data->id;?>"><i class="fa fa-trash-o"></i> delete</a></td>
                        </tr>
                           <?php
                        $counter++;
                        }
                        ?>
                     </table>
                  </div>
                  <!-- /.box-body -->
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         