<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.head"); ?>
<?php perch_layout("global.header"); ?>

<div class="container main-container">
	<main class="main wrapper">

		<h1 class="page-heading"><?php perch_content('Heading'); ?></h1>
		
		<div class="row">
			<?php perch_content('Contact Form'); ?>
			<div class="contact-text">
				<?php perch_content('Intro'); ?>
				<?php perch_content('Social media'); ?>
			</div>
		</div>

	</main>
</div>
<?php perch_content('Footer'); ?>