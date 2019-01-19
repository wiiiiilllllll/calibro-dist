<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.head"); ?>
<?php perch_layout("global.header"); ?>

<?php perch_content('Hero'); ?>
<div class="container main-container">
	<main class="main wrapper">
		<h1 class="page-heading"><?php perch_pages_title(); ?></h1>
		<?php perch_content('Sector'); ?>
		<?php // perch_layout('sector.nav.php'); // Coming soon... ?>
	</main>
</div>
<?php perch_content('Call to action'); ?>
<?php perch_layout('global.footer'); ?>
</body>
</html>