<?php get_header(); ?>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="p-single__thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php else : ?>
		<div class="no-thumbnail">
			<img src="<?php echo COMMON_PFIX; ?>/images/common/eyecatch/noimage.jpg" alt="no image" class="attachment-post-thumbnail">
		</div>
	<?php endif; ?>
<?php get_footer(); ?>
