<?php get_header(); ?>

    <main>
        
        <div id="title" data-splitting><?php the_title(); ?></div>

        <div class="about">
            <?php
                $content = $post->post_content;
                $content = strip_shortcodes($content);
                echo $content;
            ?>
        </div>

    </main>

<?php get_footer(); ?>
