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
            <?php echo $row['newsItem'][0]->title; ?>
         </h3>
         <div class="Slogon">
            <?php echo $row['newsItem'][0]->date; ?>
            <div class="borderBox"></div>
         </div>
      </div>
      <div class="col-md-12 col-sm-12" style="padding-left:20px; margin-top:20px;">
      
         <img src="<?php echo UPLOADED_IMAGES_PATH.$row['newsItem'][0]->img; ?>" class="img img-responsive">
         <br><br>
         <p style="line-height:200%;">
            <?php echo $row['newsItem'][0]->topic; ?>
         </p>
      </div>
   </div>
