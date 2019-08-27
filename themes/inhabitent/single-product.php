<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="content-holder container">
	
		<div class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
		</div><!-- .entry-header -->

		<div class="product-details-holder">
			<div>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>

			<div class="product-price">
				$<?php echo CFS()->get( 'product_price' );?>.00
			</div>


			<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
			</div><!-- .entry-content -->
		
			<div class="social-media-buttons">

			<button class="black-btn"><i class="fa fa-facebook"></i> Like</p>
			<button class="black-btn"><i class="fa fa-twitter"></i> Tweet</p>
			<button class="black-btn"><i class="fa fa-pinterest"></i> Pin</p>
			
			</div>

		</div>
	
	</div> <!--content-holder ending-->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

			

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
