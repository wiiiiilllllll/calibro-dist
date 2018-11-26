<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>

<?php

	if (perch_get('s') === false) {
		echo '<script>window.location.replace("/news/");</script>';
	}

	$slug = perch_get('s'); // sets slug to equal postSlug

	$data = perch_blog_custom(array(
	    'filter'=>'postSlug',
	    'match'=>'eq',
	    'value'=>$slug,
	    'skip-template'=>true, 
	)); // grabs data of current post

	$data = $data[0]; // not sure why this is required, but code breaks without it

	$date = $data['postDateTime']; // sets the date variable to the posts published date

	$prev = perch_blog_custom(array(
	    'count'=>1,
	    'filter'=>'postDateTime',
	    'match'=>'lt',
	    'sort'=>'postDateTime',
	    'sort-order'=>'DESC',
	    'value'=>$date,
	    'template'=>'blog/post_prev.html'
	), true); // stores post in a variable to use later

	$next = perch_blog_custom(array(
	    'count'=>1,
	    'filter'=>'postDateTime',
	    'match'=>'gt',
	    'sort'=>'postDateTime',
	    'sort-order'=>'ASC',
	    'value'=>$date,
	    'template'=>'blog/post_next.html'
	), true); // stores post in a variable to use later

	$class = (empty($prev) ? "news-nav--right" : "string.empty"); // for alignment if there's no prev link
?>

<div class="news-nav <?php echo $class ?>">
<?php
    if (!empty($prev)){
        echo $prev;
	}

	if (!empty($next)){
	    echo $next;
	}
?>
</div>