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
	<img src="wp-content/themes/inhabitent/images/logos/inhabitent-logo-full.svg" alt="inhabitent-logo">	
	

	</section>


<section class="container">
<h2>Shop Stuff</h2>
<?php

$shopArgs = [
	'taxonomy' => 'product-type',
	'hide_empty' => true,
];

$terms = get_terms ( $shopArgs);

foreach ( $terms as $term ) {
	// echo '<pre>' . var_dump( $term ) . '</pre>';

	// $icon = get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';
	// var_dump( file_exists( $icon ) );
	// var_dump( $icon );
	
	echo '<img src="' . get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg' . '" />';
	echo $term->name;
	echo $term->description;
	echo get_term_link($term);
 }

		   ?>
</section>





<section class="container">
<h2>INHABITENT JOURNAL</h2>
<?php

$args = array ( 
	'post_type' => 'post',
	'numberposts' => '3',
	'posts_per_page' => '3',
);
global $post;
$query = get_posts($args);

foreach ($query as $post) {
	setup_postdata($post);
	the_title();
	echo'<br><a href="' . get_the_permalink() . '">Read More</a><br>';
	
}

wp_reset_postdata();
?>



<?php $journal_query = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $journal_query->have_posts() ) : ?>
   <?php while ( $journal_query->have_posts() ) : $journal_query->the_post(); ?>
	<img src=<?php the_post_thumbnail() ?>
	<p> <?php echo get_the_date() . ' / ';
	 comments_number() ?> </p>
 	  <h2><?php the_title(); ?></h2>
	  
	  <a href="' . get_the_permalink() . '">Read Entry</a>
   <?php endwhile; ?>
   <!-- <?php the_posts_navigation(); ?> -->
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>

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
