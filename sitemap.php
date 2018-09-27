<?php
    header('Content-type: application/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>
    	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    include('perch/runtime.php');

    perch_pages_navigation([
        'template' => 'sitemap.html',
        'flat' => true,
	    'add-trailing-slash' => true,
	    'hide-extensions' => true
    ]);

    perch_blog_custom([
    	'template' => 'sitemap_blog.html', 
    	'paging' => false,
	    'sort' => 'postDateTime',
	    'sort-order' => 'DESC', 
    	'count' => 6000, 
    ]);

	echo '</urlset>'
?>