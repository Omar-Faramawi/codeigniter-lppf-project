<div class="container NoPadding" style="margin-top:30px;">
   <!-- /.carousel -->
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <?php 
         $counter = 0;
         foreach ($row['images'] as $data) {
            ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $counter; ?>" class="<?php if($counter == 0){ echo 'active'; } ?>"></li>
            <?php
            $counter++;
         }
         ?>
      </ol>
      <div class="carousel-inner" role="listbox">
         <?php 
         $counter = 0;
         foreach ($row['images'] as $data) {
            ?>
            <div class="item <?php if($counter == 0){ echo 'active'; } ?>">
               <img class="first-slide" src="<?php echo UPLOADED_IMAGES_PATH.$data->img; ?>" alt="First slide">
               <div class="container">
               </div>
            </div>
            <?php
            $counter++;
         }
         ?>
      </div>
   </div>
   <!-- /.carousel -->
</div>
<div class="container NoPadding" style="margin-top:10px;">
   <div class="row">
      <div class="col-md-3 ">
         <div class="col-sm-12 NewsSection NoPadding">
            <div class="col-sm-12 NoPadding">
               <h3 class="SectionTitle">
                  Latest News
                  <div class="borderBox"></div>
               </h3>
            </div>
            <div class="col-sm-12 NoPadding">
               <ul>
               <?php
               foreach ($row['news'] as $data) {
                  ?>
                  <li>
                     <div class="NewsTitle">
                        <?php echo $data->title; ?> 
                     </div>
                     <div class="NewsDesc">
                        <?php
                        $length = strlen("is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book");
                        echo substr($data->topic, 0, $length);
                        ?>
                     </div>
                     <div class="ReadMore">
                        <a href="<?php echo base_url(); ?>news/item/<?php echo $data->id; ?>"><span> <img src="<?php echo base_url(); ?>public/img/list-pic.png" ></span> Read More</a>
                     </div>
                  </li>
                  <?php
               }
               ?>
               </ul>
               <p class="clear"></p>
            </div>
            <div class="col-sm-12 ConnectDivDesktop NoPadding">
               <div class="col-sm-12 NoPadding">
                  <h3 class="SectionTitle">
                     Stay Connected
                     <div class="borderBox"></div>
                  </h3>
               </div>
               <ul>
                  <li>
                     <a href="<?php echo $row['links'][0]->facebook; ?>"><img src="<?php echo base_url(); ?>public/img/facebook-home.png" />
                     </a>
                  </li>
                  <li>
                     <a href="<?php echo $row['links'][0]->twitter; ?>"><img src="<?php echo base_url(); ?>public/img/twitter-home.png" />
                     </a>
                  </li>
                  <li>
                     <a href="<?php echo $row['links'][0]->youtube; ?>"><img src="<?php echo base_url(); ?>public/img/youtube-home.png" />
                     </a>
                  </li>
                  <li>
                     <a href="<?php echo $row['links'][0]->linkedin; ?>"><img src="<?php echo base_url(); ?>public/img/linkedin-home.png" />
                     </a>
                  </li>
                  <p class="clear"></p>
               </ul>
            </div>
            <div class="col-sm-12 ConnectDivSmall ">
               <div>
                  <ul>
                     <li>
                        <a href="<?php echo $row['links'][0]->facebook; ?>"><img src="<?php echo base_url(); ?>public/img/facebook-home.png" />
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo $row['links'][0]->twitter; ?>"><img src="<?php echo base_url(); ?>public/img/twitter-home.png" />
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo $row['links'][0]->youtube; ?>"><img src="<?php echo base_url(); ?>public/img/youtube-home.png" />
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo $row['links'][0]->linkedin; ?>"><img src="<?php echo base_url(); ?>public/img/linkedin-home.png" />
                        </a>
                     </li>
                     <p class="clear"></p>
                  </ul>
               </div>
            </div>
         </div>
         <p class="clear"></p>
      </div>
      <div class="col-md-3 ">
         <div class="col-sm-12 PollSection">
            <div class="col-sm-12 NoPadding">
               <h3 class="SectionTitle">
                  Polls
                  <div class="borderBox"></div>
               </h3>
               <div class="Question">
                  <p> <?php echo $row['poll'][0]->question; ?>
                  </p>
               </div>
            </div>
                <div class="col-sm-12">
                     <?php 
                        $array = (array) $row['choice'];
                       foreach($array as $choice){
                        ?>
                        <div class="radio">
                           <label>
                           <input type="radio" name="optradio" id="<?php echo $row['poll'][0]->id; ?>"><?php echo $choice->choice; ?></label>
                        </div>
                        <?php
                       }
                     ?>
                     <p class="clear"></p>
                  </div>
                  <div class="col-sm-12 ">
                     <button class="btn btn-default submitPoll" id='<?php echo $row['poll'][0]->id; ?>'>Submit</button>
                  </div>
                  <div class="col-sm-12 " style="margin-top:5px;">
                     <button class="btn btn-default submitResult" id="<?php echo $row['poll'][0]->id; ?>">Results</button>
                  </div>
                  <div class="col-sm-12 back-btn" style="margin-top:5px;display:none;">
                     <button class="btn btn-default submitResult" id="<?php echo $row['poll'][0]->id; ?>">Back</button>
                  </div>
            <div class="col-sm-12 ReadMoreBox">
               <a href="<?php echo base_url();?>polls"><span style="padding-right:5px;"> <img src="<?php echo base_url(); ?>public/img/list-pic.png" ></span>More Polls</a>
            </div>
         </div>
      </div>
      <div class="col-md-3 ">
         <div class="col-sm-12 AboutUsSection">
            <div class="col-sm-12 NoPadding">
               <h3 class="SectionTitle">
                  About Us
                  <div class="borderBox"></div>
               </h3>
            </div>
            <div class="col-sm-12">
               <p>
                  <?php
                     $length = strlen("is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book");
                     echo substr($row['about'][0]->topic, 0, $length);
                  ?>
               </p>
            </div>
            <img src="<?php echo UPLOADED_IMAGES_PATH.$row['about'][0]->img; ?>" class="img-responsive">
            <div class="col-sm-12 ReadMoreBox">
               <a href="<?php echo base_url();?>about">Read More</a>
            </div>
         </div>
      </div>
      <div class="col-md-3 ">
         <div class="col-sm-12 ArticleSection NoPadding ">
            <div class="col-sm-12 NoPadding ">
               <img src="<?php echo UPLOADED_IMAGES_PATH.$row['mission'][0]->img; ?>" class="img-responsive">
            </div>
            <div class="col-sm-12">
               <p class="title"> “ <?php echo $row['mission'][0]->t_small; ?> ”</p>
               <p class="Desc">
                  <?php
                     $length = strlen("is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book");
                     echo substr($row['mission'][0]->topic, 0, $length);
                  ?>
               </p>
            </div>
            <div class="col-sm-12 ReadMoreBox">
               <a href="<?php echo base_url();?>about">Read More</a>
            </div>
         </div>
      </div>
      <div class="col-md-9 ">
         <div class="col-sm-12 FourmSection NoPadding">
            <div class="col-sm-6 NoPadding">
               <div class="col-sm-12">
                  <h3 class="SectionTitle">
                     Fourm
                     <div class="borderBox"></div>
                  </h3>
               </div>
               <div class="col-sm-12">
                  <img src="<?php echo base_url(); ?>public/img/home-fourm-icon.png">
               </div>
            </div>
            <div class="col-sm-6 NoPadding BG">
            </div>
         </div>
      </div>
   </div>
</div>
