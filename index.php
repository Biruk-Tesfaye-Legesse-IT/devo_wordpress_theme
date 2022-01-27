<?php 
// adds default header or from header.php
get_header();
?>

<?php get_search_form(); ?>
<?php get_template_part('template-parts/blog/blog', 'design'); ?>


<?php

get_footer();
?>