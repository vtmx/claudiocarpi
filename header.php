<html lang="en" class="no-js">
	<head>
		<!-- Metatags -->
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Title -->
		<title>
		<?php if ( is_front_page() ): ?>
			<?php bloginfo( 'name' ); ?> | Photographer
		<?php else: ?>
			<?php bloginfo( 'name' ); ?> | <?php wp_title(''); ?>
		<?php endif; ?>
		</title>

		<!-- Styles -->
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/dist/css/style.css">

		<!-- Scripts -->
		<script src="<?php bloginfo( 'template_url' ); ?>/dist/js/modernizr.js"></script>

		<!-- Icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/manifest.json">
		<link rel="mask-icon" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/safari-pinned-tab.svg" color="#ffffff">
		<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/favicon.ico">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<!-- SEO -->
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="author" content="Claudio Carpi">
		<meta name="robots" content="index, follow">
		<link rel="author" href="humans.txt">

		<!-- Facebook -->
		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="website">
		<meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
		<meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
		<meta property="og:url" content="<?php bloginfo( 'url' ); ?>">
		<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
		<meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/dist/img/screenshot-social.jpg">

		<!-- Google+ -->
		<link rel="canonical" href="<?php bloginfo( 'url' ); ?>">

		<!-- Twitter -->
		<meta name="twitter:card" content="<?php bloginfo( 'name' ); ?>">
		<meta name="twitter:domain" content="<?php bloginfo( 'url' ); ?>">
		<meta name="twitter:site" content="<?php bloginfo( 'url' ); ?>">
		<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?>">
		<meta name="twitter:description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="twitter:creator" content="Claudio Carpi">
		<meta name="twitter:image:src" content="<?php bloginfo( 'template_url' ); ?>/dist/img/screenshot-social.jpg">

		<?php // Theme options ?>
		<?php if (  get_field('home-logo-color') || get_field('home-logo-opacity') ): ?>
			<style>
				<?php if (  get_field('home-logo-color')  ): ?>
					/* Logo color */
					.home-logo a {
						fill: <?php the_field('home-logo-color'); ?>;
					}
				<?php endif; ?>

				<?php if (  get_field('home-logo-opacity')  ): ?>
					/* Logo opacity */
					.home-logo {
						<?php if ( get_field('home-logo-opacity') == 10 ): ?>
							opacity: 1;
						<?php else: ?>
							opacity: .<?php the_field('home-logo-opacity'); ?>;
						<?php endif; ?>
					}
				<?php endif; ?>
			</style>
		<?php endif; ?>
	</head>

	<body <?php body_class(); ?>>
		<!--[if lt IE 8]><p class="browserupgrade">You are using an outdated browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

		<div hidden>
			<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
				<symbol id="instagram" viewBox="0 0 169.063 169.063"><title>instagram</title><path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752 c17.455,0,31.656,14.201,31.656,31.655V122.407z"/><path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/><path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78 C135.661,29.421,132.821,28.251,129.921,28.251z"/></symbol>
				<symbol id="arrow-up" viewBox="0 0 306 306"><title>arrow-up</title><polygon points="153,58.65 0,211.65 35.7,247.35 153,130.05 270.3,247.35 306,211.65 "/></symbol>
				<symbol id="close" viewBox="0 0 357 357"><title>close</title><polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 214.2,178.5 "/></symbol>
			</svg>
		</div>
