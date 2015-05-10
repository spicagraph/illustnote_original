
<p class="linkTop"><a href="#wrapper">ページのトップへ戻る</a></p>

<footer>

<!--div class="tagBox clearfix">
<h2>Tag</h2>
<?php wp_tag_cloud('smallest=100&largest=100&unit=%&format=list&orderby=count&order=DESC'); ?>
</section-->

<div class="profileBox">
<h2>Profile</h2>
<p class="snsImage"><img src="<?php bloginfo('template_url'); ?>/images/ic_sns.jpg" width="100" height="100"></p>
<ul>
<li><a href="https://twitter.com/spicagraph" target="_blank">twitter</a></li>
<li><a href="http://www.facebook.com/ayaka.sumida" target="_blank">Facebook</a></li>
<li><a href="http://spicagraph.com" target="_blank">website</a></li>
<li class="profile">spicagraph(スピカグラフ)角田綾佳<br>
大阪枚方でweb・DTPデザイン制作をしているフリーランスです。イラストや参考にしたサイトのご紹介、アプリケーションの技術向上を目指すブログです。ツッコミ・アドバイスお待ちしてます！</li>
</ul>
</div>



</footer>


	</div>
	
<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(function(){
	jQuery('.singlePost h2').each(function(i){ //←class名やh2などのタグは適宜変えるとよいですよ
		if(i < 9){
			jQuery(this).attr('class','h20' + (i+1));
		} else {
			jQuery(this).attr('class','h2' + (i+1));
		}
	});
});
$(function(){
    $('.singlePost img').addClass('.entryImage');
});
</script>

</body>
</html>
