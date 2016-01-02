<div class="col-md-3 col-sm-4 ">
      <div class="SideBar">
         <h3 class="SectionTitle">
            Latest News
            <div class="borderBox"></div>
         </h3>
         <div class="col-sm-12">
            <ul>
               <?php 
               foreach ($row['news'] as $data) {
               	?>
				<li>
                  <div class="NewsTitle">
                     <?php echo $data->title; ?>
                  </div>
                  <div class="NewsDesc">
                     <?php echo $data->topic; ?>
                  </div>
                  <div class="ReadMore">
                     <a href="<?php echo base_url(); ?>news/item/<?php echo $data->id; ?>"><span> <img src="<?php echo base_url(); ?>public/img/list-pic.png" ></span> Read More</a>
                  </div>
               </li>
               	<?php
               }
               ?>
            </ul>
         </div>
         <div class="col-sm-12 SeperatorWrapper" >
            <div class="Seperator"></div>
         </div>
         <div class="col-sm-12">
            <h2>PUBLICATIONS</h2>
            <a href="<?php echo base_url(); ?>publications" class="ImgLink"><img  src="<?php echo base_url(); ?>public/img/Publications-sidebar.png" class="img-responsive" ></a>
         </div>
         <div class="col-sm-12">
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
                  <p class="clear"></p>
               </div>
            </div>
         </div>
         <p class="clear"></p>
      </div>
   </div>
</div>