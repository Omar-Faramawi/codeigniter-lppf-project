<div class="container NoPadding ContentWrapper">
   <div class="col-sm-12 NoPadding BigWrapper">
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
   <div class="col-sm-12 AboutSection">
   <?php 
   $state = 0;

   foreach ($row['sections'] as $data) {
      if($state == 0){

         ?>

         <div class="row" style="margin:30px 0;">
         <div class="col-sm-6">
            <div class="col-sm-12">
               <h3 class="PageTitle">
                  <?php echo $data->title; ?>
               </h3>
               <div class="Slogon">
                  <?php echo $data->t_small; ?>
                  <div class="borderBox"></div>
               </div>
               <div class="About-Desc">
                  <?php echo $data->topic; ?>
               </div>
            </div>
         </div>
         <div class="col-sm-6 TextImage">
            <img src="<?php echo UPLOADED_IMAGES_PATH.$data->img; ?>" class="img-responsive" >
         </div>
      </div>

         <?php

         $state = 1;
      }else{

         ?>

         <div class="row" style="margin:30px 0;">
         <div class="col-sm-6 TextImage">
            <img src="<?php echo UPLOADED_IMAGES_PATH.$data->img; ?>" class="img-responsive" >
         </div>
         <div class="col-sm-6">
            <div class="col-sm-12">
               <h3 class="PageTitle">
                  <?php echo $data->title; ?>
               </h3>
               <div class="Slogon">
                  <?php echo $data->t_small; ?>
                  <div class="borderBox"></div>
               </div>
               <div class="About-Desc">
                  <?php echo $data->topic; ?>
               </div>
            </div>
         </div>
      </div>

         <?php

         $state = 0;
      }
   }
   ?>
      
      
   </div>
</div>