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
	 <p> <a href="<?php get_term_link($term)?>" class="btn"> <?php echo $term->slug . ' stuff' ?>
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

<h2>INHABITENT JOURNAL</h2>
<div class="journal-content">
<?php
$args = array ( 
	'post_type' => 'post',
	'numberposts' => '3',
	'posts_per_page' => '3',
);

//The code below is not used but is kept for reference.
// global $post;
// $query = get_posts($args);

// foreach ($query as $post) {
// 	setup_postdata($post);
// 	the_title();
// 	echo'<br><a href="' . get_the_permalink() . '">Read More</a><br>';	
// }
// wp_reset_postdata(); 
?>



<?php $journal_query = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $journal_query->have_posts() ) : ?>
   <?php while ( $journal_query->have_posts() ) : $journal_query->the_post(); ?>
	<div>	

	<div class="thumbnail-wrapper">
   <img class="wp-post-image" src=<?php the_post_thumbnail() ; ?>
	</div>

	<div class="entry-meta post-info-wrapper">
	<p> 
		
		<?php echo get_the_date() . ' / ';
	 comments_number() ; ?> 
	 
	</p>


	   <h3 class="entry-title">
		   <a href="<?php get_the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h3>

	</div>
	  
	  <a class="black-btn" href=" <?php get_the_permalink() ?> ">Read Entry</a>
</div> 
   <?php endwhile; ?>
   <?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h3>Nothing found!</h3>
<?php endif; ?>
</div>
</div>
</section>


		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
