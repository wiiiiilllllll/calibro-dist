<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.head"); ?>
<?php perch_layout("global.header"); ?>

<div class="container main-container">
	<main class="main wrapper">
	    <h2 class="page-heading"><?php perch_content('Main heading'); ?></h2>
	    <?php perch_content('Intro'); ?>
	</main>
</div>

<?php perch_content('Call to action'); ?>
<?php perch_layout('global.footer'); ?>
</body>
</html>