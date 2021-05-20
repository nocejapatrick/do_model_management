<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bold_Photography
 */

get_header();
$categories = get_the_category( $post->ID );
?>

	<div id="primary" class="<?= ($categories[0]->term_id==5) ? 'content-area' : '' ?>">
		<main id="main" class="site-main">
			<?php 
			if(!is_category('artists')){
			?>
			<div class="archive-posts-wrapper">
			<?php
				$header_image = bold_photography_featured_overall_image();

				if ( 'disable' === $header_image ) : ?>

				<header class="page-header">
					<?php the_archive_title( '<h2 class="page-title section-title">', '</h2>' ); ?>

					<div class="section-description-wrapper section-subtitle">
						<?php the_archive_description(); ?>
					</div>
				</header><!-- .entry-header -->

			<?php endif; ?>
				<?php
				if ( have_posts() ) : ?>

				<div class="section-content-wrapper">
					<div id="infinite-post-wrap" class="<?= ($categories[0]->term_id==5) ? 'archive-post-wrap grid' : 'artists-model-container' ?>">
						<?php
						/* Start the Loop */
						$category = get_queried_object();
						$query = new WP_Query( array(
							'posts_per_page' => 99999,
                            'cat'         => $category->term_id,
						) );

						$posts = $query->posts;

						while ( $query->have_posts() ) : $query->the_post();
							if(has_category(array('hair-makeup','photography','stylist','men','women','kids'))){

								get_template_part( 'template-parts/content/content-artists', get_post_format() );

							}else{

								/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content/content', get_post_format() );

							}
							
							

						endwhile;

						// bold_photography_content_nav();
						?>
					</div><!-- .archive-post-wrap -->
				</div><!-- .section-content-wrap -->

				<?php
					else :

						get_template_part( 'template-parts/content/content', 'none' );

					endif; ?>
			</div><!-- .archive-posts-wrapper -->
			<?php }else{?>
				<header class="page-header">
					<h2 class="page-title section-title">Artists</h2>
					<div class="section-description-wrapper section-subtitle"></div></header>
				<div class="artists-container">
					<div class="artist">
						<a href="/artists/photography/">
							<img src="/wp-content/uploads/2021/04/photography-640x853.jpg" alt="">
							<h4 class="entry-title">
						
								Photograpy
							
							</h4>
						</a>
					</div>

					<div class="artist">
						<a href="/artists/stylist/">
							<img src="/wp-content/uploads/2021/04/stylist-640x853.jpg" alt="">
							<h4 class="entry-title">
									Stylist
							</h4>
						</a>
					</div>

					<div class="artist">
					<a href="/artists/hair-makeup/">
						<img src="/wp-content/uploads/2021/04/hair-and-make-up-640x853.jpg" alt="">
						<h4 class="entry-title">
								Hair & Makeup
						</h4>
					</a>
					</div>
				</div>
			<?php }?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
