<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.head"); ?>
<?php perch_layout("global.header"); ?>

<div class="container main-container">
	<main class="main wrapper">
		<h1 class="page-heading"><?php perch_pages_title(); ?></h1>
		<?php
		perch_content_custom('Service', array(
			'page'=>'/services/**/*',
			'template'=>'service_abstract.html',
			'each' => function($item) {
				// process as necessary, then return the modified item
				$item['page_title'] = 
					perch_page_attribute('pageTitle', array( '_id' => $item['_pageID'], ), true);
				return $item;
			}
		));
		?>
	</main>
</div>
<?php perch_content('Call to action'); ?>
<?php perch_layout('global.footer'); ?>