<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
<header class="l-header p-header--webdesign">
	<p class="p-backtop"><a href="/">← To the top page of Rish inc.</a></p>
	<div class="c-inner">
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

					$tags = get_the_terms( $post -> ID, 'type_tag');
					$type_tags = 'Website[ ';
					if ( ! is_array( $tarms ) ) {
						foreach( $tags as $tag ) {
							if ( $tag === end( $tags ) ) {
								$type_tags .= $tag -> name;
							} else {
								$type_tags .= $tag -> name . ', ';
							}
						}
					}
					$type_tags .= ' ]'; ?>
					<h1><?php echo esc_html( $title ); ?></h1>
					<?php if ( $url ) : ?>
						<a href="<?php echo $url ?>" target="_blank" class="p-header--webdesign__url"><?php echo $url ?></a>
					<?php endif; ?>
					<?php if ( $tags ) : ?>
						<p class="p-header--webdesign__tag"><?php echo esc_html( $type_tags ); ?></p>
					<?php endif; ?>
					<?php if ( $date ) : ?>
						<p class="p-header--webdesign__date"><?php echo esc_html( $date ); ?></p>
					<?php endif; ?>
					<?php echo imgdescription(); ?>
				<?php endwhile; ?>
			<?php endif;
		?>
	</div><!--./c-inner-->
</header>
