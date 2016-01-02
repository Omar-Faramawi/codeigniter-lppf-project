<div class="container  ContentWrapper NoPadding">
   <div class="col-sm-12 NoPadding SmallWrapper">
      <img src="<?php echo UPLOADED_IMAGES_PATH.$row['heading'][0]->img; ?>" class="img-responsive">
      <div class="col-sm-7 col-centered">
         <div class="Title"><?php echo $row['heading'][0]->page; ?>
         </div>
         <div class="Slogon">
            <?php echo $row['heading'][0]->t_small; ?>
            <div class="borderBox"></div>
         </div>
         <div class="Desc"><?php echo $row['heading'][0]->paragraph; ?></p>
         </div>
      </div>
   </div>
   <div class="col-md-9 col-sm-8 PublicationsSection">
      <div class="col-sm-12 NoPadding">
         <h3 class="PageTitle">
            Media
         </h3>
         <div class="Slogon">
            <?php echo $row['heading'][0]->t_small; ?>
            <div class="borderBox"></div>
         </div>
      </div>
      <div class="col-sm-12">
      <?php
      foreach ($row['items'] as $data) {
         ?>
         <div class="col-sm-6 ">
            <div class="col-sm-12 PublicationBox">
               <div class="col-md-4">
                  <a href="<?php echo $data->link; ?>" target="_blank"><img src="<?php echo base_url(); ?>public/img/Publications-download.png" class="img-responsive"  /></a> 
               </div>
               <div class="col-md-8 title">
                  <p><a href="<?php echo $data->link; ?>" target="_blank">View <br> <?php echo $data->title ?>  </a></p>
               </div>
            </div>
         </div>
         <?php
      }
      ?>
         
      </div>
   </div>
