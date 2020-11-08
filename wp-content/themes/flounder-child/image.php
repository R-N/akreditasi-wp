<?php
/**
 * The template for displaying image attachments.
 *
 * @package Flounder
 */

get_header();
?>

	<div id="primary" class="content-area image-attachment">
		<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-area">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">

						<div class="entry-attachment">
							<div class="attachment">

								<a href="<?php echo wp_get_attachment_url(); ?>" title="<?php the_title_attribute(); ?>" rel="attachment" target="_blank"><?php
									global $content_width;
									$attachment_size = apply_filters( 'flounder_attachment_size', array( $content_width, $content_width ) ); // Filterable image size.
									echo wp_get_attachment_image( $post->ID, $attachment_size );
								?></a>
							</div><!-- .attachment -->

							<?php if ( ! empty( $post->post_excerpt ) ) : ?>
							<div class="entry-caption">
								<?php the_excerpt(); ?>
							</div><!-- .entry-caption -->
							<?php endif; ?>
						</div><!-- .entry-attachment -->

					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'flounder' ),
							'after'  => '</div>',
						) );
					?>

					</div><!-- .entry-content -->
					
					<?php if ( is_singular() ) {
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					} else {
						flounder_comment_link( '<div class="comment-links clearfix">', '</div>' ); 
					} ?>
					
				</div><!-- .entry-area -->
				
				<div class="entry-meta sidebar-bg"></div>
				<footer class="entry-meta">
					<i class="icon format-icon dashicons dashicons-format-image"></i>
					<?php flounder_posted_on(); ?>
					<?php
						$metadata = wp_get_attachment_metadata();
						
						printf( '<div class="meta full-size"><a href="%1$s">%2$s &times; %3$s</a></div>',
							esc_url( wp_get_attachment_url() ),
							$metadata['width'],
							$metadata['height']
						);

						printf( '<div class="meta parent-post"><a href="%1$s" title="Return to %2$s" rel="gallery">%3$s</a></div>',
							esc_url( get_permalink( $post->post_parent ) ),
							esc_attr( strip_tags( get_the_title( $post->post_parent ) ) ),
							get_the_title( $post->post_parent )
						);
					?>

					<?php edit_post_link( __( 'Edit This', 'flounder' ), '<div class="meta edit-link">', '</div>' ); ?> 

				</footer><!-- .entry-meta -->
			</article><!-- #post-<?php the_ID(); ?> -->
			
			<!-- #image-navigation
			<nav role="navigation" id="image-navigation" class="navigation image-navigation">
				<div class="nav-previous"><?php //previous_image_link( false, __( '<i class="icon inline  dashicons dashicons-arrow-left"></i> Previous', '_s' ) ); ?></div>
				<div class="nav-next"><?php //next_image_link( false, __( 'Next <i class="icon inline  dashicons dashicons-arrow-right"></i>', '_s' ) ); ?></div>
			</nav>
			-->

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>