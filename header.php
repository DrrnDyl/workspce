<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">
		
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">
		<div class="main-wrap">
			<div class="slidey" id="tray">
				<div class="wrap">
					<form id="search" action="<?php echo search_url(); ?>" method="post">
						<label for="term">Search my blog:</label>
						<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
					</form>

					<aside>
						<b>Categories</b>
						<ul>
						<?php while(categories()): ?>
							<li>
								<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
									<?php echo category_title(); ?> <span><?php echo category_count(); ?></span>
								</a>
							</li>
						<?php endwhile; ?>
						</ul>
					</aside>
				</div>
			</div>

			<header>
				<?php if(has_menu_items()): ?>
				<nav>
					<ul class="a">
					<?php while(menu_items()): ?>
						<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
							<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
								<?php echo menu_name(); ?>
							</a>
						</li>
						<?php endwhile; ?>
						<li class="tray">
							<a href="/html/">Menu Item1</a>
						</li>
						<li class="tray">	
							<a href="/css/">Menu Item2</a>
						</li>
						<!-- if you want to add more nav items-->
						<li class="tray">
							<a href="/js/">Menu3</a> 
						</li>
						<li class="tray">
							<a href="/jquery/">A Menu Item</a>
						</li>
					</ul>
					<ul class="b">
						<li>
							<a href="#tray" class="linky"><img src="<?php echo theme_url('img/categories.png'); ?>" alt="Categories" title="View my posts by category"></a>
						</li>
					</ul>	

				</nav>
					<div class="pagetitle col-md-12">
						<h1><?php echo site_name(); ?></h1>
					</div>				
				<?php endif; ?>
			</header>