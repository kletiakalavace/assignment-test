<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Assignment-test
 */

?>
	<div id="footer-sidebar" class="secondary">
		<div class="container-fluid">
			<div class="row">
				<div id="footer-sidebar1" class="col-md-2 office-city animated slideInUp">
			<?php
				if(is_active_sidebar('footer-sidebar-1')){
				dynamic_sidebar('footer-sidebar-1');
				}
			?>
		</div>
		<div id="footer-sidebar2" class="col-md-2 office-city animated slideInUp">
			<?php
				if(is_active_sidebar('footer-sidebar-2')){
				dynamic_sidebar('footer-sidebar-2');
				}
			?>
		</div>
		<div id="footer-sidebar3" class="col-md-2 office-city animated slideInUp">
			<?php
				if(is_active_sidebar('footer-sidebar-3')){
				dynamic_sidebar('footer-sidebar-3');
				}
			?>
		</div>
		<div id="footer-sidebar4" class="col-md-2 office-city animated slideInUp">
			<?php
				if(is_active_sidebar('footer-sidebar-4')){
				dynamic_sidebar('footer-sidebar-4');
				}
			?>
		</div>
		<div id="footer-sidebar5" class="col-md-2 office-city animated slideInUp">
			<?php
				if(is_active_sidebar('footer-sidebar-5')){
				dynamic_sidebar('footer-sidebar-5');
				}
			?>
		</div>
			</div>
			</div>
		
	</div>
	<footer id="footer-2" class="site-footer">
		<div class="site-info-social-media">
			<div class="header-social-media ">
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
		</div><!-- .site-info-social-media -->
	</footer><!-- #footer-2 -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
