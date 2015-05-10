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
</script>