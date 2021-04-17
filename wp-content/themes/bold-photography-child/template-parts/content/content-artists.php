<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bold_Photography
 */

?>

<article id="post-<?php the_ID(); ?>" class="artists-models" >
	<div class="post-wrapper hentry-inner">
        <a href="<?= get_the_permalink() ?>">
            <div class="artists-model-image" style="background:url('<?= get_the_post_thumbnail_url(get_the_ID(),'medium') ?>') no-repeat center center;
            background-size:cover; width:100%;
            ">
            </div>
        </a>

		<div class="artists-model-title">
			<header class="entry-header">
				<?php if ( is_sticky() ) { ?>
					<span class="sticky-post">
						<span class="screen-reader-text"><?php esc_html_e( 'Featured', 'bold-photography' ); ?></span>
					</span>
				<?php } ?>

				<?php
					the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<?php
				endif; ?>
			</header><!-- .entry-header -->

		
		</div><!-- .entry-container -->
	</div><!-- .hentry-inner -->
</article><!-- #post-<?php the_ID(); ?> -->
