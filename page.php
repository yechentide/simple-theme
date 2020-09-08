<?php get_header(); ?>

    <main class="pages-main">

        <div id="title" data-splitting><?php the_title(); ?></div>

        <div class="text-container text-container-hidden">
            <div class="text-wrapper">
                <?php
                    if( have_posts() ) :
                        while( have_posts() ) : the_post();
                            $content = get_the_content();
                            $content = strip_tags( $content );
                            $content = trim($content);
                            $str = preg_replace( '/(\n\n\n\n)/', '<br><br>', $content );
                            echo '<span>';
                            echo $str;
                            echo '</span>';
                        endwhile;
                    endif;
                ?>
            </div>
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">

                <?php
                    $content = $post->post_content;
                    $content = strip_shortcodes($content);

                    $pattern = '/<img.*?src\s*=\s*[\"|\'](.*?)[\"|\'].*?>/i';
                    preg_match_all($pattern, $content, $all_imgs);
                    // var_dump($all_imgs);

                    foreach($all_imgs[1] as $img_url) {
                        echo '<div class="swiper-slide"><img src="' . $img_url . '" alt=""></div>';
                    };

                ?>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination hidden"></div>
        </div>



    </main>

<?php get_footer(); ?>
