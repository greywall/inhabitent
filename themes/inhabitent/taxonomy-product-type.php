<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">				
					<div class="taxonomy-header-title">
						<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
						<p class="taxonomy-category-description"> 
							<?php echo term_description(); ?> 
						</p>
					</div>				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="product-grid">
				<div class="thumbnail-wrapper">	
					 <a href="<?php echo get_the_permalink(); ?>">
						<?php the_post_thumbnail(); ?> 
					</a>
				</div>	
				<div class="product-info">
					<h2 class="product-title-name">
					<?php the_title(); ?>					
					<span class="dots">..............................</span>
					<span class="product-price">
					<?php echo '$'; echo CFS()->get( 'product_price' ); echo '.00'; ?>
					</span>	
					</h2>		
				</div>
			</div>	

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
