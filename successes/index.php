<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.head"); ?>
<?php perch_layout("global.header"); ?>

<div class="container main-container">
	<main class="main wrapper">

		<div class="row blocks-container">

			<?php
				// Conjures the content but doesn't actually display it
			    perch_content_create('Successes', [
			     'template'   => 'success_detail.html',
			     'multiple'    => true,
			     'edit-mode' => 'listdetail',
			    ]);
		    ?>
	
		    <?php
		    	// Detect if we're on the "Our Successes" list page
		    	// or a single Success detail page
		    	// (detected via the current page URL)
		        if (perch_get('s')) { // Detail mode
		        	perch_content_custom('Successes', [
	        	     'template' => 'success_detail.html',
	        	     'filter' => 'slug',
	        	     'match' => 'eq',
	        	     'value' => perch_get('s'),
	        	     'count' => 1,
	        	    ]);
	
		        } else { // List mode
		        	?>
					<h1 class="page-heading"><?php perch_content('Heading'); ?></h1>
					<?php
		        	perch_content_custom('Successes', [
						'template' => 'success_list.html',
	        	    ]);
		        }
			?>
		</div>
		
	</main>
</div>
<?php perch_content('Call to action'); ?>
<?php perch_layout('global.footer'); ?>
<script>loadJS('/js/calibro.min.js',function(){blocks.init()})</script>
</body>
</html>