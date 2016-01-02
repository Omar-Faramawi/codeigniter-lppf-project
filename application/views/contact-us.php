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
   <div class=" col-sm-6 ContactPage">
      <div class="col-sm-12 NoPadding">
         <h3 class="PageTitle">
            Contact Us
         </h3>
         <div class="Slogon">
            <?php echo $row['heading'][0]->t_small; ?>
            <div class="borderBox"></div>
         </div>
      </div>
      <div class="col-sm-12">
         <div class="ContactWrapper">
            <?php if($this->session->flashdata('errors') != ''){
                           ?><div class="alert alert-danger"><?php echo $this->session->flashdata('errors');?></div><?php
                        }else if($this->session->flashdata('success') != ''){
                           ?>
                              <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                           <?php
                        } ?>
            <form role="form" method='post' action='contact/send_message'>
               <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
               <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
               <input type="text" name="subject" class="form-control" id="exampleInputEmail1" placeholder="Subject">
               <textarea placeholder="Your Message" name="message" class="form-control"></textarea>
               <button class="btn btn-default col-sm-4" type="submit">Send</button>
            </form>
         </div>
      </div>
   </div>
   <div class="col-sm-6">
      <div class="col-sm-12 Map">
         <iframe src="<?php echo $row['heading'][0]->googlemaps;?>" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
   </div>
</div>