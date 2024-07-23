<?php
/* Template Name: Service Template */
get_header();
?>
<?php
while (have_posts()) :
the_post();
$args = 'Services';
get_template_part('parts/content', 'breadcrumb',$args);
?>



<!-- Services Start -->
<?php get_template_part('parts/content', 'service'); ?>
<!-- Services End -->


<?php endwhile; ?>
<?php
get_footer();
?>