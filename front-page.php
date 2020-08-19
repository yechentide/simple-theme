<?php get_header(); ?>

<main>

<?php
    if( have_posts() ) :
        while( have_posts() ) : the_post(); ?>
            <div class="top-page-visual">
                <?php the_content() ?>
            </div>
        <?php endwhile;
    else :
        echo '<p>There are no posts!</p>';
    endif;
?>

</main>

<?php get_footer(); ?>
