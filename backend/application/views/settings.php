
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  Settings
               </h1>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="box box-info">
                  <div class="box-header with-border">
                     <h3 class="box-title">Change password</h3>
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
                     <form role="form" method="post" action="settings/chancge_password">
                        <!-- text input -->
                        <div class="form-group">
                           <label>New Password</label>
                           <input type="password" name="newpassword" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                           <label>Confirm Password</label>
                           <input type="password" name="confirmpassword" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                           
                                 <button type='submit' class="btn btn-primary btn-lg">Submit</button>
                              </div>
                     </form>
                  </div>
                  <!-- /.box-body -->
               </div>

            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         