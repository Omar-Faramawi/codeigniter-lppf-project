<div class="container  ContentWrapper NoPadding">
   <div class="col-sm-12 NoPadding SmallWrapper">
      <img src="<?php echo UPLOADED_IMAGES_PATH.$row['heading'][0]->img; ?>" class="img-responsive">
      <div class="col-sm-7 col-centered">
         <div class="Title" style="padding-top: 119px;"><?php echo $row['heading'][0]->page; ?>
         </div>
         <div class="Slogon">
            <?php echo $row['heading'][0]->t_small; ?>
            <div class="borderBox"></div>
         </div>
         
      </div>
   </div>
   <div class="col-md-9 col-sm-8 MissionSection">
      <div class="col-sm-12" style="margin-top:30px;">
      <div class="title">
               <?php echo $row['heading'][0]->page; ?>
               <div class="borderBox"></div>
            </div>
            
            <div class="Desc" style="line-height: 200%;">
               <?php echo $row['heading'][0]->paragraph; ?>
            </div>
      </div>
   </div>
  