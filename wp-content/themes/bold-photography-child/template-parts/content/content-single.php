<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bold_Photography
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('fade-in-left'); ?>>
	<?php
		$header_image = bold_photography_featured_overall_image();

		if ( 'disable' === $header_image ) : ?>

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title section-title">', '</h1>' ); ?>

			<?php
				$slug = "";
				if(count(get_the_category()) > 0){
					$category = get_the_category(); 
					$category_parent_id = $category[0]->category_parent;
					if ( $category_parent_id != 0 ) {
						$category_parent = get_term( $category_parent_id, 'category' );
						$slug = $category_parent->slug;
					} else {
						$slug = $category[0]->slug;
					}
				}
			if ( 'post' === get_post_type() && !in_array($slug,['men','women','kids','artists'])) : ?>
			<div class="entry-meta">
				<?php bold_photography_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

	<?php endif; ?>
	<?php bold_photography_single_image(); ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bold-photography' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'bold-photography' ),
				'after'  => '</span></div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="entry-meta">
		<?php if(!in_array($slug,['men','women','kids','artists'])){?>
			<?php bold_photography_entry_footer(); ?>
			<?php }?>
		</div><!-- .entry-meta -->

		<?php bold_photography_author_bio(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
