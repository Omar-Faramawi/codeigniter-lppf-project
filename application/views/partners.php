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
   <div class="col-md-9 col-sm-8 NewsPage">
      <div class="col-sm-12 NoPadding">
         <h3 class="PageTitle">
            <?php echo $row['heading'][0]->page; ?>
         </h3>
         <div class="Slogon">
            <?php echo $row['heading'][0]->t_small; ?>
            <div class="borderBox"></div>
         </div>
      </div>
      <div class="col-sm-12">
         <?php 
            foreach($row['sections'] as $data){
               ?>
                  <div class="col-md-4 col-sm-6">
                     <div class="col-sm-12 NewsBox NoPadding">
                        <img src="<?php echo UPLOADED_IMAGES_PATH.$data->img; ?>" class="img-responsive" >
                        <div class="title">
                           <?php $data->title; ?>
                           <div class="borderBox"></div>
                        </div>
                        <p class="Desc">
                           <?php
                           echo $data->topic;
                           ?>
                        </p>
                     </div>
                  </div>

               <?php      
            }
          ?>
      </div>
   </div>
