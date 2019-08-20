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
			<h1>Shop Stuff</h1>
			<div class="product-description">
				<?php
				$arg = [
					'taxonomy' => 'product-type',
					'hide_empty' => false,
				];
				$terms = get_terms($arg);
				foreach($terms as $term){ ?>
				<p>
					<a class="tax-desc" href="<?php echo get_term_link($term); ?>"> 
						<?php echo $term->slug ?>
					</a>
				</p>
				<?php	
				};
				?>
			</div>	<!-- end of product-description -->
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
					<?php echo CFS()->get( 'product_price' ); ?>
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
