

	<div class="container ContentWrapper NoPadding">


		<div class="col-sm-12 NoPadding SmallWrapper">
			<img src="<?php echo UPLOADED_IMAGES_PATH.$row['heading'][0]->img; ?>" class="img-responsive">
			<div class="col-sm-7 col-centered">
				<div class="Title"><?php echo $row['heading'][0]->page; ?>

				</div>
				<div class="Slogon"><?php echo $row['heading'][0]->t_small; ?>
					<div class="borderBox"></div>
				</div>
				<div class="Desc"><?php echo $row['heading'][0]->paragraph; ?></p>

				</div>
			</div>

		</div>
		<div class="col-sm-12 CalenderPage">
			<div class="col-sm-12 NoPadding">
				<h3 class="PageTitle">
                  Calendar
                </h3>
				<div class="Slogon"><?php echo $row['heading'][0]->t_small; ?>
					<div class="borderBox"></div>
				</div>
			</div>
			<div class="col-sm-12 Calendar">
			<div id='calendar'></div>
			</div>

		</div>

	</div>
	