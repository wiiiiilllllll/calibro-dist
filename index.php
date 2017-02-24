<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.head"); ?>
<?php perch_layout("global.header"); ?>

<?php perch_content('Hero'); ?>
<div class="container main-container">
	<main class="main wrapper">
		<div class="intro row">
			<h2 class="page-heading"><?php perch_content('Intro heading'); ?></h2>
			<div class="intro__text">
				<?php perch_content('Intro text'); ?>
			</div>
			<div class="intro__sidebar">
				<?php perch_content('Sidebar'); ?>
			</div>
		</div>
	</main>
</div>
<?php perch_content('Call to action'); ?>
<?php perch_layout('global.footer'); ?>