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
		<div class="page-header container">
			<h1 class="shop-stuff-title">Shop Stuff</h1>
			<div class="product-description">
				<?php
				$arg = [
					'taxonomy' => 'product-type',
					'hide_empty' => false,
				];
				$terms = get_terms($arg);
				foreach($terms as $term){ ?>
				<div>
				<p>
					<a class="tax-desc" href="<?php echo get_term_link($term); ?>"> 
						<?php echo $term->slug ?>
					</a>
				</p>
				</div>
				<?php	
				};
				?>
			</div>	<!-- end of product-description -->
			</div><!-- .page-header -->
			<div class="product-grid container">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
			
				<div class="product-grid-item">
					<div class="thumbnail-wrapper">	
						<a href="<?php echo get_the_permalink(); ?>">
							<?php the_post_thumbnail(); ?> 
						</a>
					</div>	
					<div class="product-info">
						<h2 class="product-title-name">
						<?php the_title(); ?>	
						</h2>				
						<div class="dots"></div>
						<div class="product-price">
						<?php echo '$'; echo CFS()->get( 'product_price' ); echo '.00'; ?>
						</div>	
				</div>
				</div>
				
			<?php endwhile; ?>
			</div> <!-- End of product grid -->
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
