<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Flounder
 */

get_header(); ?>
	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title">
					<?php printf( __( '%s', 'flounder' ), '<span>' . the_title() . '</span>' ); ?>
				</h1>
				<?php //echo do_shortcode('[flexy_breadcrumb]'); ?>
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php
					if(function_exists('bcn_display') && !is_front_page()){
						bcn_display();
					}?>
				</div>
			</header><!-- .page-header -->

			<div class="page-content">
				<?php if ( has_post_thumbnail() ): ?>
					<div class="entry-image"><?php
						the_post_thumbnail( 'feature' );

						$thumb_id = get_post_thumbnail_id();
						$thumb_post = get_post( $thumb_id );
						if ( $thumb_post && $thumb_post->post_excerpt )
							printf( '<div class="wp-caption-text">%s</div>', $thumb_post->post_excerpt );
					?></div>
				<?php endif; ?>
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'flounder' ) ); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'flounder' ),
						'after'  => '</div>',
					) );
				?>
			</div>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
