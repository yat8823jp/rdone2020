<?php
	if ( is_plugin_active( "smart-custom-fields/smart-custom-fields.php" ) ) :
		$args = array (
			'post_type' => 'print'
		);
	endif;
	global $wp_query;
	// $wp_query = new WP_Query( $args );
?>
<?php get_header(); ?>
	<article class="p-thumbnail--webdesign">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="p-thumbnail__imgbox p-single__thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php else : ?>
			<div class="p-thumbnail__imgbox no-thumbnail">
				<img src="<?php echo COMMON_PFIX; ?>/images/common/eyecatch/noimage.jpg" alt="no image" class="attachment-post-thumbnail">
			</div>
		<?php endif; ?>
	</article>
	<?php if ( $wp_query -> have_posts() && get_the_content() ) : ?>
		<article class="p-webdesign">
			<?php while ( $wp_query -> have_posts() ) : $wp_query -> the_post(); ?>
				<article class="p-webdesign__contents">
					<?php the_content(); ?>
				</article>
				<?php if ( SCF::get( 'sitecapturei-mage' ) ) : ?>
					<article class="p-webdesign__imgs">
						<ul>
							<?php
								$images = SCF::get( 'sitecapturei-mage' );
								foreach( $images as $image ) :
									echo '<li>' . wp_get_attachment_image( $image, 'full' ) . '</li>';
								endforeach;
							?>
						</ul>
					</article>
				<?php endif; ?>
			<?php endwhile;
				wp_reset_postdata();
			?>
		</article>
	<?php endif; ?>
<?php get_footer(); ?>
