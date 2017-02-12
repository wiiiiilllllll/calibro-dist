<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.head"); ?>
<?php perch_layout("global.header"); ?>

<?php perch_content('Hero'); ?>
<div class="container main-container">
	<main class="main wrapper">
		<div class="intro row">
			<div class="intro__text">
				<?php perch_content('Intro text'); ?>
			</div>
			<div class="intro__image">
				<?php perch_content('Intro image'); ?>
			</div>
		</div>
	</main>
</div>
<?php perch_content('Call to action'); ?>
<?php perch_content('Footer'); ?>