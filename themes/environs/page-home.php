<?php get_header(); ?>
<?php include('hero.php') ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">


 
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nobis laboriosam nihil ma
    gni temporibus, exercitationem officiis mollitia animi
     consectetur sit, aliquid obcaecati neque aperiam! Commodi voluptate explicabo odit quasi quaerat.
    </h1>
<?php 

$args = array(
    'post_type' => 'post',
    'name' => "About Us"
    // 'p' => 72,
    // 'posts_per_page' => 5,
    // 'category__in'  => array( 9, 10, 15 ),
    // 'category__not_in' => array( 1 )
);

$postlist = new WP_Query( $args );

    if( $postlist->have_posts() ):
        while( $postlist->have_posts() ) : $postlist->the_post();


// <!-- About Start -->
 get_template_part( 'parts/content', 'about-start' );
// <!-- About End -
    endwhile;
        wp_reset_postdata();?>

<?php endif; ?>




                              
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>