<!DOCTYPE HTML>
<!--
	This ProcessWire Blog Profile is based on:
		Strongly Typed by HTML5 UP
		html5up.net | @ajlkn
		Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en">
	<head>
		<title><?= $blogSettings->blog_headline ?> | <?= $page->title ?></title>

		<link rel="shortcut icon" href="<?= $config->urls->templates ?>images/blogicon.png" type="image/png" />
		<link rel="icon" href="<?= $config->urls->templates ?>images/blogicon.png" type="image/png" />

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?= $config->urls->templates ?>assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?= $config->urls->templates ?>assets/css/main.css?ts=<?= time() ?>" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?= $config->urls->templates ?>assets/css/ie8.css" /><![endif]-->
		<link rel='stylesheet' type='text/css' href='<?=$config->urls->FieldtypeComments?>comments.css' />
		<link rel='stylesheet' type='text/css' href='<?=$config->urls->templates?>styles/blog.css' />
		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?= $pages->get('/posts/')->httpUrl ?>rss/" />
		<!-- Insert code in header linke GG Ana or FB Pxl -->
		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '2167594380164545');
		fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=2167594380164545&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53650294-2"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-53650294-2');
		</script>
		<!-- End Global site tag (gtag.js) - Google Analytics -->

	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="<?= $pages->get('/')->url ?>" class="logo"><strong><?= $blogSettings->blog_headline ?></strong></a>
									<ul class="icons">
									<?php foreach($blogSettings->blog_ext_links as $social) {
										if($social->blog_active) echo makeSocialLink($social);
									} ?>
									</ul>
								</header>

