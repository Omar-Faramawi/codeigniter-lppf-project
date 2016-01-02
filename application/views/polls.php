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
   <div class="col-md-9 col-sm-8 PollsSection">
      <div class="col-sm-12 NoPadding">
         <h3 class="PageTitle">
            Polls
         </h3>
         <div class="Slogon">
            <?php echo $row['heading'][0]->t_small; ?>
            <div class="borderBox"></div>
         </div>
      </div>
      <div class="col-sm-12">
         <?php
         array_pop($row);
         foreach($row as $data){
            ?>
            <div class="col-sm-4 ">
               <div class="col-sm-12 PollWrapper">
                  <div class="col-sm-12 NoPadding ">
                     <div class="Question">
                        <p><?php echo $data['question_value']; ?>
                        </p>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <?php 
                       foreach($data['question_choices'] as $choice){
                        ?>
                        <div class="radio">
                           <label>
                           <input type="radio" name="optradio" id="<?php echo $data['question_id'];?>"><?php echo $choice['choice1']; ?></label>
                        </div>
                        <?php
                       }
                     ?>
                     <p class="clear"></p>
                  </div>
                  <div class="col-sm-12 ">
                     <button class="btn btn-default submitPoll" id='<?php echo $data['question_id'];?>'>Submit</button>
                  </div>
                  <div class="col-sm-12 " style="margin-top:5px;">
                     <button class="btn btn-default submitResult" id="<?php echo $data['question_id'];?>">Results</button>
                  </div>
                  <div class="col-sm-12 back-btn" style="margin-top:5px;display:none;">
                     <button class="btn btn-default submitResult" id="<?php echo $data['question_id'];?>">Back</button>
                  </div>
               </div>
            </div>
            <?php
         }
         ?>
      </div>
   </div>


