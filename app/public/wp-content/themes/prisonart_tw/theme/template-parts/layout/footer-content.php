<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Awakening_Prison_Art
 */

?>

<footer id="colophon">

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<aside role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'prisonart_tw' ); ?>">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
		<nav aria-label="<?php esc_attr_e( 'Footer Menu', 'prisonart_tw' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_class'     => 'footer-menu',
					'depth'          => 1,
				)
			);
			?>
		</nav>
	<?php endif; ?>

	<div class="text-center">
			&copy;<?php echo date_i18n( 'Y' );?> <?php echo get_bloginfo( 'name' );?>
	</div>

</footer><!-- #colophon -->
