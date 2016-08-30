<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>">
    <title>
	<?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?>
	</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed"
          href="<?php bloginfo('rss2_url'); ?>"/>
    <meta name="viewport" content="width=device-width">
<script type="text/javascript" src="//webfont.fontplus.jp/accessor/script/fontplus.js?Us35dpSZzmU%3D&aa=1&ab=2&aa=1" charset="utf-8"></script>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3&appId=430781653625264";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div id="wrapper">

