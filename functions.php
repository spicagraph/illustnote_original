<?php
// カテゴリーのスラッグを投稿とページ全体の各クラスへ追加
function category_id_class($classes){
    global $post;
    foreach ((get_the_category($post->ID)) as $category) {
        $classes[] = $category->category_nicename;
    }
    return $classes;
}
add_filter('body_class', 'category_id_class');
add_theme_support('post-thumbnails');

// カテゴリーのスラッグをwp_list_categoriesへ追加
function add_cat_slug_class($output, $args){
    $regex = '/<li class="cat-item cat-item-([\d]+)[^"]*">/';
    $taxonomy = isset($args['taxonomy']) && taxonomy_exists($args['taxonomy']) ? $args['taxonomy'] : 'category';

    preg_match_all($regex, $output, $m);

    if (!empty($m[1])) {
        $replace = array();
        foreach ($m[1] as $term_id) {
            $term = get_term($term_id, $taxonomy);
            if ($term && !is_wp_error($term)) {
                $replace['/<li class="cat-item cat-item-' . $term_id . '("| )/'] = '<li class="cat-item cat-item-' . $term_id . ' cat-item-' . esc_attr($term->slug) . '$1';
            }
        }
        $output = preg_replace(array_keys($replace), $replace, $output);
    }
    return $output;
}
add_filter('wp_list_categories', 'add_cat_slug_class', 10, 2);

//Title tag support v4.4 or over
function insg_theme_slug_setup(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'insg_theme_slug_setup');

function insg_theme_name_wp_title( $title = '' ) {
    if( is_home() || is_front_page() ){
        $title = get_bloginfo( 'name', 'display' );
    }
    return $title;
}
add_filter( 'wp_title', 'insg_theme_name_wp_title', 10, 3 ); //TODO 4.4にバージョンアップ後に削除
add_filter( 'pre_get_document_title', 'insg_theme_name_wp_title' );

function insg_title_separator($sep){
    $sep = '|';
    return $sep;
}
add_filter('document_title_separator', 'insg_title_separator');