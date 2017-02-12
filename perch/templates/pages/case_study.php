<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.head"); ?>
<?php perch_layout("global.header"); ?>

<div class="container main-container">
	<main class="main wrapper">

		<code><pre>perch/templates/pages/case_study.php</pre></code>
		<?php perch_content('Main image'); ?>
		<?php perch_content('Title'); ?>
		<?php perch_content('Description'); ?>
		
	</main>
</div>
<?php perch_content('Call to action'); ?>
<?php perch_content('Footer'); ?>