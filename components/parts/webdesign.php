<?php
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if ( is_plugin_active( "smart-custom-fields/smart-custom-fields.php" ) ) :
		$sticky = SCF::get( 'sticky' );
		$args = array (
			'post_type' => 'webdesign',
			'meta_query' => array (
				array (
					'key' => 'sticky',
					'value' => true
				)
			)
		);
		$wp_query = new WP_Query( $args );
		if ( $wp_query -> have_posts() ) : ?>
			<ul class="p-top--webdesign__items__list--sticky">
				<?php while ( $wp_query -> have_posts() ) : $wp_query -> the_post(); ?>
					<li>
						<figure class="p-top--webdesign__items__list__figure p-stack">
							<div class="p-stack__bg">
								<div class="imgrap">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
								</div>
							</div>
							<figcaption class="c-img-description">
								<?php
									if ( SCF::get( 'url' ) ) : ?>
										<dl>
											<dt class="c-img-description__title"><?php the_title(); ?></dt>
											<dd class="c-img-description__link">
												<a href="<?php echo esc_html( SCF::get( 'url' ) ); ?>" target="_blank"><?php echo esc_html( str_replace( array( 'http://', 'https://' ) , '', SCF::get( 'url' ) ) ); ?></a>
											</dd>
										</dl>
									<?php else : ?>
											<p class="c-img-description__title"><?php the_title(); ?></p>
									<?php endif; ?>
									<?php echo imgdescription();
								?>
							</figcaption>
						</figure>
					</li>
				<?php endwhile;
					wp_reset_postdata();
				?>
				</ul>
			<?php
		endif;
		$args = array (
			'post_type' => 'webdesign',
			'meta_query' => array (
				array (
					'key' => 'sticky',
					'value' => true,
					'compare' =>  '!='
				)
			)
		);
		$wp_query = new WP_Query( $args );
		if ( $wp_query -> have_posts() ) : ?>
			<ul class="p-top--webdesign__items__list">
				<?php while ( $wp_query -> have_posts() ) : $wp_query -> the_post(); ?>
					<li>
						<figure class="p-top--webdesign__items__list__figure">
							<div class="imgrap">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'webdesign-thumb' ); ?></a>
							</div>
							<figcaption>
								<?php if ( SCF::get( 'url' ) ) : ?>
									<dl class="c-img-description">
										<dt class="c-img-description__title"><?php the_title(); ?></dt>
										<dd class="c-img-description__link">
											<a href="<?php echo esc_html( SCF::get( 'url' ) ); ?>" target="_blank"><?php echo esc_html( str_replace( array( 'http://', 'https://' ) , '', SCF::get( 'url' ) ) ); ?></a>
										</dd>
									</dl>
								<?php else : ?>
									<p class="c-img-description__title"><?php the_title(); ?></p>
								<?php endif; ?>
								<?php echo imgdescription(); ?>
							</figcaption>
						</figure>
					</li>
				<?php
					endwhile;
					wp_reset_postdata();
				?>
			</ul>
		<?php endif;
	endif;
?>
