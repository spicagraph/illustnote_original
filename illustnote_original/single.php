<?php get_header(); ?>


<div class="clearfix">
<div id="postPageBox">

<?php while ( have_posts() ) : the_post(); ?>
<!--post-->

<article class="post">
<hgroup>
<h1 class="title"><?php the_title(); ?></h1>
	<div class="postDetail">
	<p class="category"><?php the_category(', ') ?></p>
	<time><?php echo get_the_date(); ?></time>
	</div>
</hgroup>

<div class="entry">
 <?php the_content(); ?>
 
<?php echo get_the_tag_list('タグ：',',',''); ?>

<p class="linkIndex"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">イラストノート　トップページへ戻る</a></p>



		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=430781653625264";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="<?php echo the_permalink();?>" data-num-posts="5" data-width="700"></div>
<!--/post-->
<?php endwhile; // end of the loop. ?>
</div>
</article>

</div>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>