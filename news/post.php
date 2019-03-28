<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.head", ["title" => perch_blog_post_field(perch_get("s"), "postTitle", true)]); ?>
<?php perch_layout("global.header"); ?>

<?php
	$slug = perch_get('s'); // sets slug to equal postSlug
	$html = perch_blog_post($slug, True);  // stores post in variable to use later

    if ($html) {
        echo $html; // display post
    }
?>
<?php include "news-nav.php" ?>
	</main>
</div>

<?php perch_content('Call to action'); ?>
<?php perch_layout('global.footer'); ?>
</body>
</html>