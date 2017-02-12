<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.head"); ?>
<?php perch_layout("global.header"); ?>

<div class="container main-container">
	<main class="main wrapper">
		<h1 class="page-heading"><?php perch_content('Heading'); ?></h1>
		<div class="team-container row">
			<?php perch_content('Team Members'); ?>
		</div>
	</main>
</div>
<?php perch_content('Call to action'); ?>
<?php perch_content('Footer'); ?>