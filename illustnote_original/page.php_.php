<?php get_header(); ?>


<?php get_sidebar(); ?>

<div class="clearfix">
<div id="postPageBox">

<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
<!--post-->

<article class="post">

<h2 class="title"><?php the_permalink() ?></h2>
	<time><?php echo get_the_date(); ?></time>
<p class="postImage"><img src="images/im_dammy_01.jpg" width="193" height="158"></p>

<div class="entry">
<?php get_template_part( 'content', 'single' ); ?>

</div>
</article>

<!--/post-->
<?php endwhile; ?>
		<?php else : ?>

		<?php /* ▼記事が無い場合はこれが表示されます */ ?>
　　　　　		記事はありません

		<?php endif; ?>
		
		<?php comments_template(); ?>
		

</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>