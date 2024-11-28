<?php 

function university_files() {
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts',('//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'));
    wp_enqueue_style('font-awesome',('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'));
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'university_files');

add_action('after_setup_theme', 'university_features');

function university_features() {
    register_nav_menus(array(
        'HeaderMenuLocation' => __('Header Menu Location'),
        'footerLocationOne' => __('Footer Location One'),
        'footerLocationTwo' => __('Footer Location Two'),
    ));
    add_theme_support('title-tag');
}

class Custom_Walker_Page extends Walker_Page {
    // Modifiez la méthode start_lvl pour ne pas ajouter un nouveau <ul>
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        // Supprime complètement la création de <ul>
        $output .= '';
    }

    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        // Supprime complètement la fermeture de <ul>
        $output .= '';
    }
}