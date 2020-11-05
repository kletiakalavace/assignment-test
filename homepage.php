<?php /* Template Name: HomePage */ 
	get_header();
?>
<main id="primary" class="site-main">
	<div class="video-section">
		<div class="video-url">
		<?php
			$home_video =  get_field('home_video');
		?>
		<?php echo "<video class='play-video' src='$home_video' autoplay='' loop='' muted='muted' playsinline='' controlslist='nodownload'></video>"; ?>
		</div>
		<div class="video-description">
			<div class="video-title">
		    	<h2><?php the_field('title_video'); ?></h2>
			</div>
			<div class="video-button">
				<a class="elementor-animation-grow" href="<?php the_field('button_video'); ?>" target="_blank"><?php the_field('button_video_title'); ?></a>
			</div>
		</div>
	</div><!-- Video section -->
	<div class="divisions-section-shape">
		<div class="elementor-shape elementor-shape-bottom" data-negative="false">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="elementor-shape-fill" d="M738,99l262-93V0H0v5.6L738,99z"></path>
			</svg>		
		</div>
		<div class="divisions-section-title">
			<div class="container-fluid">
				<div class="row">
				<h2><?php the_field('title'); ?></h2>
			</div>
			</div>
			
		</div>
	</div><!-- Divisions shape & title section -->
	<div class="container-fluid">
		<div class="row">
			<?php 
				$args = array( 'post_type' => 'divisions', 'posts_per_page' => 20, );
				$custom_classes = array(
					'divisions-article',
			        'animated ',
			        'col-md-3',
			        'col-sm-6'
			    );
				$the_query = new WP_Query( $args ); 
				?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( $custom_classes ); ?>>
						<div class="flip-box-postType">
							<div class="flip-box__layer flip-box__front">
								<div class="flip-box__layer__overlay">
									<div class="flip-box__layer__inner">
										<div class="flip-box__image">
											<?php the_post_thumbnail(); ?>
										</div>
										<h3><?php the_title(); ?></h3>
									</div>
								</div>
							</div>
							<div class="flip-box__layer flip-box__back">
								<div class="flip-box__layer__overlay">
									<div class="flip-box__layer__inner">
										<div class="entry-content">
										<?php the_content(); ?> 
										</div>
										<a class="flip-box__button" href="<?php the_permalink(); ?> " target="_blank">Learn More</a>
									</div>
								</div>
							</div>
							
							
							
						</div>
					</article>
					<?php wp_reset_postdata(); ?>
					<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
		</div>
	</div><!-- Divisions post type section -->
	<div class="clients-section-shape">
		<div class="elementor-background-overlay"></div>
		<div class="elementor-shape elementor-shape-top" data-negative="true">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="elementor-shape-fill" d="M737.9,94.7L0,0v100h1000V0L737.9,94.7z"></path>
			</svg>	
		</div>
		<div class="clients-section-title">
			<div class="container-fluid">
				<div class="row">
				<h2><?php the_field('header'); ?></h2>
			</div>
			</div>
		</div>
	</div><!-- Clients shape & title section -->
	<div class="container-fluid">
		<div class="row clients-content">
			<div class="col-lg-6 col-md-6 p-0">
				<?php
					$clients_image =  get_field('image_clients');
				?>
				<?php echo "<img class='animated bounceInLeft clients-image' src='$clients_image' />"; ?>
			</div>
			<div class="col-lg-6 col-md-6 p-0">
				<div class="clients-description">
					<h2 class="animated bounceInRight"><?php the_field('title_clients_description'); ?></h2>
					<p class="animated bounceInRight"><?php the_field('description_clients'); ?></p>
				</div>
			</div>
		</div><!-- Clients Content section -->
		<div class="row clients-type">
		    <div class="clients-types col-md-2">
		    	<div class="client-box">
		    		<div class="client-box-img">
			    		<?php
							$icon_client_type1 =  get_field('icon_client_type1');
						?>
					   <?php echo "<img class='client-icon animated slideInUp' src='$icon_client_type1' />"; ?>
					</div>
		    		<span class="title-type"><?php the_field('client_type_1'); ?></span>
		    	</div>
		    </div> 
		    <div class="clients-types col-md-2">
		    	<div class="client-box">
		    		<?php
						$icon_client_type2 =  get_field('icon_client_type2');
					?>
				   <?php echo "<img class='client-icon animated slideInUp' src='$icon_client_type2' />"; ?>
		    		<span class="title-type"><?php the_field('client_type_2'); ?></span>
		    	</div>
		    </div>
		    <div class="clients-types col-md-2">
		    	<div class="client-box">
		    		<?php
						$icon_client_type3 =  get_field('icon_client_type3');
					?>
				   <?php echo "<img class='client-icon animated slideInUp' src='$icon_client_type3' />"; ?>
		    		<span class="title-type"><?php the_field('client_type_3'); ?></span>
		    	</div>
		    </div>
		    <div class="clients-types col-md-2">
		    	<div class="client-box">
		    		<?php
						$icon_client_type4 =  get_field('icon_client_type4');
					?>
				   <?php echo "<img class='client-icon animated slideInUp' src='$icon_client_type4' />"; ?>
		    		<span class="title-type"><?php the_field('client_type_4'); ?></span>
		    	</div>
		    </div>
		    <div class="clients-types col-md-2">
		    	<div class="client-box">
		    		<?php
						$icon_client_type5 =  get_field('icon_client_type5');
					?>
				   <?php echo "<img class='client-icon animated slideInUp' src='$icon_client_type5' />"; ?>
		    		<span class="title-type"><?php the_field('client_type_5'); ?></span>
		    	</div>
		    </div>
		</div><!-- Clients Type section -->
	</div><!-- Clients -->
	<div class="partners-section-shape">
		<div class="elementor-background-overlay"></div>
		<div class="elementor-shape elementor-shape-top" data-negative="false">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="elementor-shape-fill" d="M738,99l262-93V0H0v5.6L738,99z"></path>
			</svg>		
		</div>
		<div class="elementor-shape elementor-shape-bottom" data-negative="true">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="elementor-shape-fill" d="M737.9,94.7L0,0v100h1000V0L737.9,94.7z"></path>
			</svg>		
		</div>
		<div class="partners-section-title">
			<div class="container-fluid">
				<div class="row">
				<h2><?php the_field('header_partners'); ?></h2>
			</div>
			</div>
		</div>
	</div><!-- Partners shape & title section -->
		
	<div class="container-fluid slider-partners">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>			
	</div>

	<div class="results-section-shape">
		<div class="elementor-background-overlay"></div>
		<div class="elementor-shape elementor-shape-top" data-negative="true">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="elementor-shape-fill" d="M737.9,94.7L0,0v100h1000V0L737.9,94.7z"></path>
			</svg>		
		</div>
		<div class="elementor-shape elementor-shape-bottom" data-negative="true">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="elementor-shape-fill" d="M737.9,94.7L0,0v100h1000V0L737.9,94.7z"></path>
			</svg>		
		</div>
		<div class="results-section-title">
			<div class="container-fluid">
				<div class="row">
				<h2>Results</h2>
			</div>
			</div>
		</div>
	</div><!-- Results shape & title section -->

	<div class="counter-resuts">
		<div class="content-counter-results">
			<?php echo do_shortcode( '[COUNTER_NUMBER id=150]' ); ?>
		</div>
	</div><!-- Counter result section -->
	<div class="contact-section-shape">
		<div class="container-contact-section">
			<div class="elementor-background-overlay"></div>
		<div class="elementor-shape elementor-shape-top" data-negative="true">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="elementor-shape-fill" d="M737.9,94.7L0,0v100h1000V0L737.9,94.7z"></path>
			</svg>		
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<br>
					<br>
					<br>
					<br>
					<h2 class="title-heading-contact">Contact Us</h2>
				</div>
				<div class="col-md-6">
					<?php echo do_shortcode( '[contact-form-7 id="154" title="Contact form 1"]' ); ?>
				</div>
			</div>
		</div>
		</div>
		
	</div><!-- Results shape & title section -->
	</main><!-- #main -->
	<?php
get_footer();