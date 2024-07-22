<?php get_header(); ?>
<?php include('hero.php') ?>

<?php
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'about',
    'order' => 'ASC',
);
$postlist = new WP_Query($args);
if ($postlist->have_posts()) :
    while ($postlist->have_posts()) : $postlist->the_post();

        /*  About Start   */
        get_template_part('parts/content', 'about-start');
    /*   About End  */
    endwhile;
    wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_footer(); ?>