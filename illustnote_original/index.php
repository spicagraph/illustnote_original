<?php get_header(); ?>

<?php get_sidebar(); ?>


<div id="postBox" class="clearfix">

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
<!--post-->

<?php
$ancCateSlug = '';
$cats = wp_get_post_categories(get_the_ID());
if(is_array($cats)) {
	foreach($cats as $cat) {
	$cobj = get_category($cat);
	$ancCateSlug = $cobj->slug;
	}
}
?>
<article class="postList <?php echo $ancCateSlug; ?>">
	<div class="heightLine">

<p class="postImage"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></p>
<h1 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
<div class="postDetail clearfix">
	<p class="category <?php echo $ancCateSlug; ?>"><?php the_category(', ') ?></p>
	<time><?php the_time("Y/n/d/") ?></time>
</div>
</div>
</article>

<!--/post-->

	<?php endwhile; ?>

<?php /* ▼2ページ目が存在する場合はページ送りのリンクが表示されます */ ?>
　　　　　		<div class="navigation">
		<?php previous_posts_link(trim(__('新しい記事', 'default'))) ?>
		<?php next_posts_link(trim(__('過去の記事', 'default'))) ?>
			</div>
		<?php else : ?>

		<?php /* ▼記事が無い場合はこれが表示されます */ ?>
　　　　　		記事はありません
		<?php endif; ?>
		<?php /* ▲ここまでがループです */ ?>

</div>

<?php get_footer(); ?>
