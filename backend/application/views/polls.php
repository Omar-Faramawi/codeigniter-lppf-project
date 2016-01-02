
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  Polls section
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
                     <form role="form" method="post" action="polls/heading" enctype="multipart/form-data">
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
                     <h3 class="box-title">Add new poll</h3>
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
                     <form role="form" method='post' action='polls/add_new_poll'>
                        <!-- text input -->
                        <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-question"></i></span>
                           <input type="text" name="question" class="form-control" placeholder="Question">
                        </div>
                        <br>
                        <!-- textarea -->
                        <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-circle"></i></span>
                           <input type="text"  name="choice1" class="form-control" placeholder="Choice 1">
                        </div>
                        <br>
                        <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-circle"></i></span>
                           <input type="text" name="choice2"  class="form-control" placeholder="Choice 2">
                        </div>
                        <br>
                        <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-circle"></i></span>
                           <input type="text" name="choice3"  class="form-control" placeholder="Choice 3">
                        </div>
                        <br>
                        <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-circle"></i></span>
                           <input type="text" name="choice4"  class="form-control" placeholder="Choice 4">
                        </div>
                        <br>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-sm-6">
                                 <button class="btn btn-primary btn-lg">Add</button>
                              </div>
                           </div>
                           <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                     </form>
                  </div>
                  <div class="box-header with-border">
                     <h3 class="box-title">Polls</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                     <?php  
                     foreach($row as $data){
                     ?>

                     <div class="box">
                        <div class="box-header">
                           <h3 class="box-title"><?php echo $data['question_value']; ?></h3>
                           <a href='polls/delete_poll/<?php echo $data['question_id']; ?>' class="btn btn-box-tool pull-right" data-toggle="tooltip" data-placement="left" title="Delete poll"><i class="fa fa-times"></i></a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                           <table class="table table-condensed">
                              <tbody>
                                 <tr>
                                    <th style="width: 10px">#</th>
                                    <th>choice</th>
                                    <th>chart</th>
                                    <th style="width: 40px">hits</th>
                                 </tr>
                                 <?php
                                 $counter = 1; 
                                 $colors = array('progress-bar-danger','progress-bar-yellow', 'progress-bar-primary', 'progress-bar-success'); 
                                 $badge_colors = array('bg-red', 'bg-yellow', 'bg-light-blue','bg-green'); 

                                 foreach($data['question_choices'] as $choice){
                                    
                                    ?>
                                    <tr>
                                    <td><?php echo $counter; ?></td>
                                    <td><?php echo $choice['choice1']." - ".$choice['hits']; ?> </td>
                                    <td>
                                       <div class="progress progress-xs">
                                          <div class="progress-bar <?php echo $colors[$counter-1]; ?>" style="width: <?php echo $choice['percentage']; ?>%"></div>
                                       </div>
                                    </td>
                                    <td><span class="badge <?php echo $badge_colors[$counter-1]; ?>"><?php echo $choice['percentage']; ?>%</span></td>
                                 </tr>
                                    <?php
                                    $counter++;
                                 }
                                 ?>
                              </tbody>
                           </table>
                        </div>
                        <!-- /.box-body -->
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
         