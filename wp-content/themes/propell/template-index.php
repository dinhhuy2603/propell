<?php


get_header();

// Custom logic before including index.php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        // Display the page content
        the_content();
    }
}

// Include your existing index.php content here
include 'index.php';

// Custom logic after including index.php
?>

<?php
get_footer();
