<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php echo get_template_part( "/components/traking/google_analytics" ); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<?php if (is_home() || is_front_page()) :?>
	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<?php else: ?>
	<meta property="og:title" content="<?php the_title(); ?>">
	<?php endif ;?>
	<?php if (is_home() || is_front_page()) :?>
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
	<?php else: ?>
	<meta property="og:url" content="<?php the_permalink() ?>">
	<?php endif ;?>
	<meta property="og:description" content="<?php bloginfo('description'); ?>">

	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/favicon.ico">
	<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="48x48" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/favicon-48x48.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/favicon-160x160.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/favicon-196x196.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/favicon-32x32.png">
	<link rel="manifest" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#2d88ef">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-65107369-1', 'auto');
		ga('send', 'pageview');
	</script>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo COMMON_PFIX; ?>/images/common/ico/favicons/favicon.ico">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="p-bgborder is-fade"></div>
	<?php wp_body_open(); ?>
	<?php if( is_front_page() || is_home() ) : ?>
		<header class="l-header">
			<h1 class="p-logo--header">
			<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
				<!-- Generator: Adobe Illustrator 24.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
				<svg class="p-logo--header__svg logo-img is-responsive" version="1.1" id="レイヤー_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
					y="0px" viewBox="0 0 421.6 176.9" style="enable-background:new 0 0 421.6 176.9;" xml:space="preserve">
					<path class="p-logo--header__svg__path" d="M227.2,108.8c-27,45-50.7,53.7-62,39c-6.9-8.9-13.7-13.1-17.9-14.9c-1.2-0.6-2.4-1.2-3.5-1.8
						c1.7,0,3.6,0,5.7,0.2c24,1.1,72.5-6.1,48-105.6c-0.4-3-0.7-5.7-1-8.3c2.4-5.3,4.6-11.2,4.9-13.8c0.3-2.6-4.5-7-5.8,1.3
						c-0.8,5-0.2,5.3,0.3,12.5c-1,2.4-2,4.7-2.8,6.5C180.2,48.4,102.4,187.8,0.2,150.1c-6,37.3,109.3-7.3,62,18.9c0.3,1,2.8,2.3,12.4-3.4
						c26.8-15.9,87.9-71.4,119.1-142.5c0.2-0.1,1.5-2.9,2.2-4.6c0.2,3,0.4,7,0.5,12.6c-0.5,23.9-6.3,81.8-50.3,96.9
						c-1.8,0.6-3.6,1-5.2,1.4c-5.3-2.6-10.4-4.4-15.1-2c-2.4,1.2-6,4,2.4,4.5c3,0.2,7.5-0.4,14.4-1c0.2,0.1,0.4,0.3,0.6,0.4
						c-0.1,0-0.2,0-0.2,0c0.2,0.1,0.4,0.2,0.6,0.3c0.9,0.6,1.9,1.3,2.8,2.1c7.5,7.6,7.3,25.3,28,37c13.3,7.5,34,9,45.2-5.2
						C179.2,173.8,228.6,113.9,227.2,108.8z M199,1.5c2.4,0.6,0.1,7.6-2.6,14.3C195.7,6.8,196.5,0.9,199,1.5z M124.5,129.8
						c2-3.1,8.7-3.6,15.6-0.1C130.3,131.9,123.2,131.8,124.5,129.8z"/>
					<g>
						<path class="p-logo--header__svg__path" d="M244,145.2c-0.7,0.4-1.9,1.2-3.6,2.4c-1.7,1.2-3.3,2.4-4.8,3.7c-1.5,1.3-3,2.5-4.4,3.7c-1.4,1.2-3,2.6-4.8,4.3
							c-1.1,0.8-1.8,1.1-2.1,0.8c-0.3-0.3-0.3-0.6,0-1c0.3-0.4,0.6-0.9,1-1.5c0.4-0.4,1.3-1.2,2.5-2.2c1.3-1,2.7-2.2,4.3-3.6
							c1.6-1.3,3.3-2.7,4.9-4c1.7-1.3,3.1-2.4,4.4-3.3c2.8-2,5-3.2,6.7-3.8c1.7-0.6,3.5-0.8,5.5-0.8c2.2-0.1,3.5,0,3.9,0.5
							c0.3,0.5-0.2,1.4-1.6,2.8c-2,2.1-3.8,4.2-5.5,6.4c-1.7,2.2-3.6,4.5-5.7,7c-1.8,2.2-3.4,4.2-4.6,6c-1.3,1.8-2.2,3.2-2.9,4.3
							c-1.3,2.4-1.5,3.9-0.6,4.6c0.6,0.7,1.3,0.9,2.2,0.5c0.9-0.3,1.9-0.7,2.8-1.2c1.1-0.6,2.6-1.4,4.3-2.6c1.7-1.2,3.4-2.5,4.9-3.9
							c2.2-1.8,4.2-3.4,5.9-4.8c1.7-1.4,3.1-2.7,4.2-3.8c0.6-0.3,1.1-0.6,1.7-1.1c0.6-0.4,1-0.5,1.3-0.2c0.3,0.3,0.1,0.7-0.4,1.4
							c-0.6,0.6-1,1.1-1.3,1.4c-1.3,1.3-3.2,3-5.8,5.2c-2.6,2.2-4.9,4.1-6.8,5.7c-2.1,1.7-4.8,3.5-8.1,5.6c-3.3,2-6.7,3-10.2,3
							c-2.2,0-3.9-0.5-4.9-1.6c-1-1-1.5-2.3-1.4-3.9c0-1.4,0.3-2.8,0.9-4.1c0.6-1.3,1.4-2.6,2.2-3.9c1.1-1.7,2.4-3.4,3.8-5.1
							c1.4-1.7,2.9-3.5,4.4-5.1c1.5-1.7,3-3.2,4.3-4.6c1.3-1.4,2.4-2.4,3.3-3.1V145.2z M273.4,110.1c1.4,0,2.3,0.5,2.7,1.6
							c0.4,1,0,2.3-1.3,3.9c-1.3,1.7-2.9,3-5,4.1c-2.1,1-3.7,1.6-4.8,1.6c-0.6-0.7-0.9-1.7-0.9-3c-0.1-1.3,0.2-2.7,0.7-4.1
							c0.7-1.5,1.8-2.6,3.3-3.2c1.5-0.6,3.2-0.8,5.1-0.8H273.4z"/>
						<path class="p-logo--header__svg__path" d="M285.8,167.9c1.3-0.6,2.7-1.3,4.3-2.1c1.6-0.8,3.3-1.8,4.9-2.9c2.9-1.8,5.6-3.7,8.1-5.7c2.4-2,4.4-3.5,5.8-4.6
							c0.4-0.4,0.9-0.8,1.5-1.2c0.6-0.3,1-0.4,1.3-0.1c0.3,0.3,0.1,0.7-0.4,1.4c-0.6,0.6-1,1.1-1.3,1.4c-1.1,1-2.7,2.3-4.7,4.1
							c-2,1.8-4.2,3.4-6.6,4.9c-2.4,1.5-4.7,2.9-6.9,4.1c-2.2,1.2-4.3,2.2-6.3,3c-2,0.8-4.6,1.7-7.9,2.5c-3.3,0.8-6.5,1.3-9.8,1.3
							c-2.8,0-5.1-0.4-6.8-1.2c-1.7-0.8-3.1-1.7-4-2.9c-0.9-1.2-1.5-2.6-1.8-4.1c-0.3-1.5-0.3-3,0-4.4c0.4-2.9,1.8-5.5,4-7.8
							c2.2-2.2,4.6-3.2,7.1-2.9c1.5,0,2.6,0.5,3.2,1.5c0.6,1,0.7,2,0.4,2.9c-0.4,1.8-2,3.6-4.6,5.2c-0.8,0.6-1.8,1.4-2.9,2.4
							c-1.1,1.1-1.7,2.3-1.9,3.9c-0.1,1.7,0.4,3,1.5,3.9c1.1,0.9,2.7,1.4,4.6,1.4c2.1,0,4.4-0.9,6.8-2.6c2.4-1.7,4.9-4.7,7.2-8.7
							c1-1.5,1.9-3.4,2.8-5.6c0.9-2.2,1.8-4.3,2.6-6.4c0.8-2.1,1.6-4,2.4-5.8c0.8-1.7,1.4-3,2-3.7v-0.2c-1.1,1.1-2.6,2.4-4.5,3.8
							c-1.9,1.4-3.7,2.8-5.6,4.2c-1.4,1.1-2.9,2.2-4.5,3.1c-1.6,1-2.8,1.6-3.5,1.9c-1,0.6-1.7,0.7-2.1,0.4c-0.1-0.4,0.2-1,1-1.9
							c1.1-0.7,2.4-1.6,4-2.6c1.5-1.1,3.2-2.1,4.8-3.3c2-1.4,3.9-2.9,5.9-4.5c2-1.6,4.1-3.5,6.5-5.6c0.3-0.4,0.7-1,1.4-1.8
							c0.6-0.8,1.3-1.4,2-1.8c1.1-1,2.2-1.6,3.4-1.9c1.1-0.3,2-0.4,2.7-0.4c2.4,0,3.2,0.5,2.3,1.6c-0.8,1-2,2-3.4,2.8
							c-1,0.7-1.9,1.3-2.8,1.7c-0.9,0.4-1.6,0.9-2.2,1.5c-0.8,0.8-1.3,1.7-1.4,2.6c-0.1,0.9-0.1,1.9-0.1,3c0.1,2.9,0.2,5.8,0.1,8.6
							c-0.1,2.8-0.7,5.7-2,8.6c-0.7,1.5-1.7,3.2-2.9,4.8c-1.3,1.7-2.5,2.9-3.8,3.8V167.9z"/>
					</g>
					<g>
						<path class="p-logo--header__svg__path" d="M379.1,106.6c-11.6,8.4-41.4,29-42.6,29.8c-0.8,1-4.7,5.9-6.1,7.7c-1.4,1.8-2.9,3.8-4.4,6
							c-1.5,2.2-3.1,4.4-4.6,6.7c-1.5,2.2-2.9,4.2-4.2,6l0.6,0.2c2.5-2.1,5.2-4.4,8.2-6.8c2.9-2.4,6.2-5.1,9.9-7.9
							c3.6-2.8,7.6-5.4,11.8-7.8c4.2-2.4,7.9-3.6,11.1-3.6c2.2,0,4,0.5,5.1,1.5c1.2,1,1.6,2.4,1.4,4.2c-0.3,2-1.3,4.1-3.1,6.3
							c-1.8,2.2-3.6,4.4-5.2,6.5c-3.5,4.2-5.8,7.2-6.9,9c-1.5,2.4-1.8,3.9-0.8,4.6c0.6,0.4,1.3,0.5,2.3,0.3c1-0.2,1.9-0.5,2.7-0.9
							c1.3-0.6,2.7-1.4,4.4-2.5c1.7-1.1,3.6-2.4,5.7-4c2.4-1.8,4.3-3.4,5.9-4.8c1.5-1.4,2.9-2.7,4.2-3.8c0.4-0.3,0.9-0.6,1.5-1
							c0.6-0.4,1-0.5,1.3-0.2c0.3,0.3,0.1,0.7-0.4,1.4c-0.6,0.6-1,1.1-1.3,1.4c-1.3,1.3-3,2.9-5.2,4.9c-2.2,2-4.8,4-7.6,6
							c-2.2,1.7-5,3.5-8.3,5.4c-3.3,1.9-6.8,2.9-10.4,2.9c-2.1,0-3.7-0.5-4.9-1.4c-1.2-0.9-1.6-2.1-1.4-3.7c0.3-2.4,1.4-4.9,3.3-7.5
							c1.9-2.6,3.7-5,5.6-7.2c1.5-2,3-3.8,4.5-5.5c1.5-1.7,2.9-3.3,4.3-4.8c0.4-0.6,0.7-1.1,0.8-1.7c0.1-0.6-0.1-1-0.6-1.3
							c-0.6-0.3-1.4-0.2-2.6,0.2c-1.2,0.4-2.1,0.8-2.8,1c-2,1-4.3,2.3-7.1,4.1c-2.8,1.8-5.9,4-9.2,6.6c-2.2,1.8-4.3,3.5-6.2,5
							c-1.9,1.5-3.7,3-5.6,4.5c-1.8,1.5-3.6,3-5.5,4.5c-1.8,1.5-3.9,3.2-6.3,5c-1.7,1.3-3.5,1.9-5.5,1.9c-1.5,0-2.6-0.2-3.2-0.5
							c-0.6-0.4-0.4-1.3,0.4-2.9c2.2-4.2,5.1-8.9,8.6-14.1c0.8-1.1,1.8-2.4,2.8-3.9c1-1.5,2.2-3,3.5-4.5v-0.2c-1.5,1.4-3,2.8-4.5,4.1
							c-1.5,1.3-2.6,2.4-3.5,3.3c-1.1,1-1.9,1.2-2.3,0.6c-0.3-0.3,0.2-1,1.5-2.3c2-1.7,4.1-3.5,6.3-5.5c2.2-2,4.5-4,6.9-5.9
							c1-1.3,12.3-20.1,62.7-72.3c30.7-31.8,36.5-18.3,36.8-15.8C423.9,76.1,391.1,98,379.1,106.6z M411.2,70.5
							c4.1-6.6,6.4-13.4,1.8-14.8c-6.8-2-18.3,11.8-26.6,20.3c-14.2,14.6-35.4,40-47.2,55.6C371.6,110.1,403.2,83.3,411.2,70.5z"/>
					</g>
					<path class="p-logo--header__svg__path" d="M421.6,61.8"/>
				</svg>
			</h1><!--/.l-header__logo-->
			<img src="<?php echo get_template_directory_uri( "" ); ?>/images/top/header/001.jpg" alt="ヘッダー用背景：空の写真" class="mv">
			<div class="l-header--bg"></div>
		</header>
	<?php else : ?>
		<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
		<header class="l-header p-taxonomy-webdesign">
			<div class="p-taxonomy-webdesign__inner">
				<p class="p-backtop"><a href="/">← To the top page of Rish inc.</a></p>
				<?php global $wp_query;
				if( $wp_query -> have_posts( $args ) ) :
					while( $wp_query -> have_posts() ) :
						$wp_query -> the_post();
						$title = get_the_title();
						if( is_plugin_active( "smart-custom-fields/smart-custom-fields.php" ) ) {
							$url = esc_url( SCF::get( "url" ) );
							$release_date = date_create( ( SCF::get( "releasedate" ) ) );
							$date =  date_format( $release_date, 'M.Y' );
						}
						$tags = get_terms( 'type_tag');
						$type_tags = 'Website[';
						if ( ! is_array( $tarms ) ) {
							foreach( $tags as $tag ) {
								if ( $tag === end( $tags ) ) {
									$type_tags .= $tag -> name;
								} else {
									$type_tags .= $tag -> name . ', ';
								}
							}
						}
						$type_tags .= ']';
						if ( $url ) {
							?><a href="<?php echo $url ?>" target="_blank"><?php echo $url ?></a><br><?php
						}
						if ( $tags ) {
							echo $type_tags . "<br>";
						}
						if ( $date ) {
							echo $date . "<br>";
						}
					endwhile; ?>
				<?php endif; ?>
			</div><!--./p-taxonomy-webdesign__inner-->
		</header>
	<?php endif; ?>
