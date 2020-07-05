<?php 
//Template Name: Elementor Page
get_header();
the_post();
echo '<div class="elementor-page-wraper">';
the_content();
echo '</div>';
get_footer();
 ?>