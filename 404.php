<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.head"); ?>
<?php perch_layout("global.header"); ?>

<div class="container main-container">
	<main class="main wrapper">
		<h1 class="page-heading"><?php perch_pages_title(); ?></h1>
		<?php perch_content('Intro'); ?>
	</main>
</div>
<?php perch_layout('global.footer'); ?>
</body>
</html>