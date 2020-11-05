<?php
/**
 * The header for Assignment-test theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package Assignment-test
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'assignment-test' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container-fluid p-0">
			 <div class="row w-100">
					<div class="col-custom-1 header-section-logo">
						<div class="site-branding">
							<?php
							the_custom_logo();?>
							<?php if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$assignment_test_description = get_bloginfo( 'description', 'display' );
							if ( $assignment_test_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $assignment_test_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
							<?php endif; ?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-custom-11">
						 <div class="row w-100 m-0 h-100">
						 	<div class="col-custom-10">
						 		<nav id="site-navigation" class="main-navigation">
								
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>
								</nav><!-- #site-navigation -->
						 	</div>
						 	<div class="col-custom-2 col-social-header">
						 		<div class="header-contact-information">
									<div class="header-social-media animated fadeInRight">
										<a class="social-icon-facebook" href="https://www.facebook.com/gemcorpusa/" target="_blank">
											<span class="">Facebook-f</span>
											<i class="fab fa-facebook-f"></i>
										</a>
										<a class="social-icon-instagram" href="https://www.instagram.com/gemcorpusa/" target="_blank">
											<span class="">Instagram</span>
											<i class="fab fa-instagram"></i>					
										</a>
										<a class="social-icon-linkedin" href="https://www.linkedin.com/company/gem-office-technologies/" target="_blank">
											<span class="">Linkedin-in</span>
											<i class="fab fa-linkedin-in"></i>					
										</a>
										<a class="social-icon-youtube" href="https://www.youtube.com/channel/UCOWEr9NE2h58htxre8PZphQ" target="_blank">
											<span class="">Youtube</span>
											<i class="fab fa-youtube"></i>					
										</a>	
									</div><!-- #social-media -->
									<span class="header-contact-phone">1(855)GEM-1984</span>
								</div>
						 	</div>
						 </div>
						
						
				    </div>
			</div>
		</div>
	</header><!-- #masthead -->
