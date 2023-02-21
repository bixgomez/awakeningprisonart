<?php
/**
 * Template Name: Home Page
 *
 * The template for displaying the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Awakening_Prison_Art
 */

get_header();
?>

	<section id="primary">
		<main id="main">

			<?php the_content(); ?>

			<?php
			$args = array(
					'post_type'=> 'artwork',
					'posts_per_page' => -1,
					'order'    => 'ASC'
			);
			$the_query = new WP_Query( $args );
			if($the_query->have_posts() ) :
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					get_template_part( 'template-parts/content/teaser--artwork', 'artwork-teaser',
						array(
							'title' => get_the_title(),
							'dimensions' => get_field('dimensions'),
							'description' => get_field('description'),
							'image_id' => get_post_thumbnail_id( $post ),
						)
					);
				endwhile;
				wp_reset_postdata();
			else:
			endif;
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
