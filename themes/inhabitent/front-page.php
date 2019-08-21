<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<section class="hero-image-home">
	<img class="hero-logo-home" src="wp-content/themes/inhabitent/images/logos/inhabitent-logo-full.svg" alt="inhabitent-logo">	
	

	</section>


<section class="container shop-products">
<h2>Shop Stuff</h2>

<div class="all-product-types">
<?php
$shopArgs = [
	'taxonomy' => 'product-type',
	'hide_empty' => true,
];

$terms = get_terms ( $shopArgs);

foreach ( $terms as $term ) {
	
	
	echo '<div class="product-type-holder">';
	echo '<img src="' . get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg' . '" />';
	
	echo '<p>' . $term->description . '</p>';
	 
	?>
	 <p> <a href="<?php echo get_term_link($term)?>" class="btn"> <?php echo $term->slug . ' stuff' ?>
	 </a>
	 </p> 

	 
	<?php
	echo '</div>';
 }

		   ?>
</div>		   

</section>





		<section class="latest-entries">
			<div class="container">

				<h2>Inhabitent Journal</h2>
				<div class="journal-content">
					<?php
						$args = array ( 
							'post_type' => 'post',
							'numberposts' => '3',
							'posts_per_page' => '3',
						);
					?>
					<?php $journal_query = new WP_Query( $args ); /* $args set above*/ ?>
					<?php if ( $journal_query->have_posts() ) : ?>
					<?php while ( $journal_query->have_posts() ) : $journal_query->the_post(); ?>
				
					<div class="journal-holder">
					
						
						<div class="thumbnail-wrapper">
							<img class="wp-post-image" src=<?php the_post_thumbnail() ; ?>
						</div> <!-- #end of div class thumbnail-wrapper -->

						<div class="entry-meta post-info-wrapper">
							<p> 
								<?php echo get_the_date() . ' / ';
							comments_number() ; ?> 
							</p>
							<h3 class="entry-title">
								<a href="<?php get_the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h3>
						</div> <!-- #end of div class post-infowrapper -->
						<a class="black-btn" href=" <?php get_the_permalink() ?> ">Read Entry</a>
					
					
					</div>  <!-- #end of div class journal-holder -->
						<?php endwhile; ?>
						<?php the_posts_navigation(); ?>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<h3>Nothing found!</h3>
						<?php endif; ?>
						</div> <!-- #end of div class journal-content -->
			</div> <!-- #end of div class container -->
		</section> <!-- #end of div class latest-enteries -->

		<section class="adventures container">
			<h2 class="entry-title">Latest Adventures</h2>
			<div>
				<div>
					<div class="adventures-image-wrapper">	
					<a href="#"><img class="adventures-block-images" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/canoe-girl.jpg' ?>"></a>
					</div>
					<div class="adventures-details">
					<h2>Getting Back to Nature in a Canoe</h2>
					<a class="black-btn" href="#">Read Entry</a>
					</div>
				</div>		
				<div>
					<div class="adventures-image-wrapper">	
					<a href="#"><img class="adventures-block-images" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/beach-bonfire.jpg' ?>"></a>
					</div>
					<div class="adventures-details">
					<h2>A Night with friends at the Beach</h2>
					<a class="black-btn" href="#">Read Entry</a>
					</div>
				</div>	
				<div>
					<div class="adventures-image-wrapper">	
					<a href="#"><img class="adventures-block-images" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/mountain-hikers.jpg' ?>"></a>
					</div>
					<div class="adventures-details">
					<h2>Taking in the view at Big Mountain</h2>
					<p><a class="black-btn" href="#">Read Entry</a>
					</div>
				</div>	
				<div>	
					<div class="adventures-image-wrapper">	
					<a href="#"><img class="adventures-block-images" src="<?php echo get_template_directory_uri() . '/images/adventure-photos/night-sky.jpg' ?>"></a>
					</div>
					<div class="adventures-details">
					<h2>Star-Gazing at the Night Sky</h2>
					<a class="black-btn" href="#">Read Entry</a>
					</div>
				</div>	
			</div>		
		
		</section>				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
