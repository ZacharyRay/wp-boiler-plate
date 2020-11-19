<?php 
get_header(); 

while(have_posts()) {
    the_post(); ?>

    <h2><a href="<?= the_permalink() ?>"><?= the_title(); ?></a></h2>
    <?php 
        the_content();
    ?>
    <h1>this is the frontpage</h1>
    <?php
} ?>

<!-- custom query example -->
<div class="latest-posts">
        <?php
        $homepagePosts = new WP_Query(array(
            'posts_per_page' => '2'
        ));
            while ($homepagePosts->have_posts()) {
                $homepagePosts->the_post();
        ?>
            <?php the_title(); ?>
        <?php } wp_reset_postdata(); ?>
</div>

<?php
get_footer();
?>
