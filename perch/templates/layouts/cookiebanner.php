<?php if(!isset($_COOKIE["comply_cookie"])) { ?>
	<div class="cookie-banner" id="cookie-banner">
		<div class="wrapper">
			<?php perch_content('Cookie banner text'); ?>
			<button id="cookie-accept" class="button"><?php perch_content('Cookie banner button'); ?></button>
		</div>
	</div>
<?php } ?>