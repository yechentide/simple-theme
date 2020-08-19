<?php

define("THEME_ROOT", get_template_directory_uri());
function setup() {
    add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
    add_theme_support( 'menus');
}

add_action( 'after_setup_theme', 'setup' );



// https://sterfield.co.jp/designer/wordpress%E3%81%A7%E3%81%AE%E3%83%9A%E3%83%BC%E3%82%B8%E3%81%94%E3%81%A8%E3%81%AEcss%E3%82%84js%E3%81%AE%E8%AA%AD%E3%81%BF%E8%BE%BC%E3%81%BF%E3%81%AE%E6%8C%AF%E3%82%8A%E5%88%86%E3%81%91%E3%82%92functi/
function custom_theme_assets() {
    wp_enqueue_style( 'entire-style', THEME_ROOT.'/css/entire.css', array(), filemtime(THEME_ROOT.'/css/entire.css') );
    wp_enqueue_style( 'header-style', THEME_ROOT.'/css/header.css', array(), filemtime(THEME_ROOT.'/css/header.css') );
    wp_enqueue_style( 'footer-style', THEME_ROOT.'/css/footer.css', array(), filemtime(THEME_ROOT.'/css/footer.css') );
    wp_enqueue_script( 'header-script', THEME_ROOT.'/js/header.js', array(), filemtime(THEME_ROOT.'/js/header.js') );

    if (is_home()) {
        wp_enqueue_style( 'top-main-style', THEME_ROOT.'/css/top-main.css', array(), filemtime(THEME_ROOT.'/css/top-main.css') );
    } else {
        wp_enqueue_style( 'detail-slider-style', THEME_ROOT.'/css/detail-slider.css', array(), filemtime(THEME_ROOT.'/css/detail-slider.css') );
        wp_enqueue_style( 'detail-popup-style', THEME_ROOT.'/css/detail-popup.css', array(), filemtime(THEME_ROOT.'/css/detail-popup.css') );
        wp_enqueue_style( 'detail-textAnime-style', THEME_ROOT.'/css/detail-textAnime.css', array(), filemtime(THEME_ROOT.'/css/detail-textAnime.css') );

        wp_enqueue_style( 'detail-slider-script', THEME_ROOT.'/js/detail-slider.js', array(), filemtime(THEME_ROOT.'/js/detail-slider.js') );
        wp_enqueue_style( 'detail-popup-script', THEME_ROOT.'/js/detail-popup.js', array(), filemtime(THEME_ROOT.'/js/detail-popup.js') );
        wp_enqueue_style( 'detail-textAnime-script', THEME_ROOT.'/js/detail-textAnime.js', array(), filemtime(THEME_ROOT.'/js/detail-textAnime.js') );
    }
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );



// https://wemo.tech/1180#index_id3
// https://teratail.com/questions/284632
function customize_img_attribute($content) {
      $re_content = preg_replace( '/(<img[^>]*)width="\d+"\s+height="\d+"\s/', '$1', $content );
      return $re_content;
}
add_filter('the_content','customize_img_attribute');



?>
