<?php
// カテゴリーのスラッグを投稿とページ全体の各クラスへ追加
function category_id_class( $classes ) {
	global $post;
	foreach ( ( get_the_category( $post->ID ) ) as $category ) {
		$classes[] = $category->category_nicename;
	}
	return $classes;
}
add_filter( 'body_class', 'category_id_class' );
add_theme_support('post-thumbnails');