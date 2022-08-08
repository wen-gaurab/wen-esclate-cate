<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package escalate-080822
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'escalate-080822' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<!-- Display site logo -->
				<?php if(is_front_page()): ?>
					<!-- check if it is front page -->
					<img src="<?php _e(get_home_url().'/wp-content/uploads/2022/08/moon-7357007_1280-300x200.jpg'); ?>" alt="homepage_logo">
				<?php endif; ?>

				<?php if(is_home()): ?>
					<img src="<?php echo get_home_url().'/wp-content/uploads/2022/08/image-16-2-300x169.png' ?>" alt="blog_logo">
					
				<?php endif; ?>

				<?php if(is_404()): ?>
					<img src="<?php echo get_home_url().'/wp-content/uploads/2022/08/bitcoin-910307_640-150x150.png' ?>" alt="page_not_found_logo">
				
				<?php endif; ?>

				<?php if(is_archive()): ?>
					
					<img src="<?php echo get_home_url().'/wp-content/uploads/2022/08/blue-5059268_1280-150x150.jpg' ?>" alt="archive_logo">
				<?php endif; ?>

				<?php if(is_page() && !is_front_page()): ?>
					
					<img src="<?php echo get_home_url().'/wp-content/uploads/2022/08/cat-7344042_1280-300x200.jpg' ?>" alt="page_logo">
				<?php endif; ?>

				<?php if(is_single()): ?>
					<img src="<?php echo get_home_url().'/wp-content/uploads/2022/08/cropped-bird-7073243_1280-267x300.jpg' ?>" alt="single_page_logo">
				<?php endif; ?>


		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'escalate-080822' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
