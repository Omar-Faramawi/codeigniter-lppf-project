<div class="container  ContentWrapper NoPadding">
   <div class="col-sm-12 NoPadding SmallWrapper">
      <img src="<?php echo base_url(); ?>public/img/Publications-banner.jpg" class="img-responsive">
      <div class="col-sm-7 col-centered">
         <div class="Title" style="padding-top: 119px;">Search
         </div>
         <div class="Slogon">
            
            <div class="borderBox"></div>
         </div>
      </div>
   </div>
   <div class="col-md-9 col-sm-8 PublicationsSection">
      <div class="col-sm-12 NoPadding">
         <h3 class="PageTitle">
            Search
         </h3>
      </div>
      <div class="col-sm-12" style="margin-top:20px;">
      	
		<?php
		if(count($row) == 0){
			?>
			<div class="well">No Results found</div>
			<?php
		}
		foreach ($row as $result) {
			if($result->type == "news"){
				?>
			<div class="well"><?php echo $result->title." - <a href='".base_url().$result->type."/item/".$result->id."'>".$result->type."</a>"; ?></div>
			
			<?php
			}else{
			?>
			<div class="well"><?php echo $result->title." - <a href='".base_url().$result->type."'>".$result->type."</a>"; ?></div>
			
			<?php
			}
		}
		?>
		
      </div>
   </div>
