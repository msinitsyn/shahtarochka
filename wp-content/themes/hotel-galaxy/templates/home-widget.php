<?php 
$hotel_galaxy_default_setting=hotel_galaxy_default_setting(); 
$hotel_galaxy_settings = wp_parse_args(get_option( 'hotel_galaxy_option', array() ), $hotel_galaxy_default_setting ); 
?>

<section class="feature-section animate" data-anim-type="fadeInRight" data-anim-delay="800" >
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title animate fadeInRight">
					<h1 class="heading head-m feature-title">
						<?php 
						if($hotel_galaxy_settings['service_title']){
							echo esc_attr($hotel_galaxy_settings['service_title']);
						}else{
							echo _e('Our Services','hotel-galaxy');
						} 
						?>
					</h1>
					<div class="pagetitle-separator"></div>
				</div>
			</div>
		</div>		
		<div class="row">
			<?php 
			if ( is_active_sidebar( 'home-services' ) ) {
				dynamic_sidebar( 'home-services' );
			} else{
				?>
				<div class="col-md-4 col-sm-6 animate zoomIn" data-anim-type="zoomIn" data-anim-delay="200">
					<div class="feature-col service-item">
						<a class="sr-icon" href="#"><i class="fa fa-bookmark" style="color:#daf6a6"></i></a>
						<h3>							
							<a href="#">
								<?php echo _e('Бесплатное бронирование','hotel-galaxy'); ?>
							</a>
						</h3>					
						<p><?php echo _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,','hotel-galaxy');?></p>						
						
					</div>
				</div><!-- .services-item -->	
				<div class="col-md-4 col-sm-6 animate zoomIn" data-anim-type="zoomIn" data-anim-delay="200">
					<div class="feature-col service-item">
						<a class="sr-icon" href="#"><i class="fa fa-wifi" style="color:#ffc300"></i></a>
						<h3>							
							<a href="#">
								<?php echo _e('Бесплатный Wi-Fi','hotel-galaxy'); ?>
							</a>
						</h3>					
						<p><?php echo _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,','hotel-galaxy');?></p>						
						
					</div>
				</div><!-- .services-item -->
				<div class="col-md-4 col-sm-6 animate zoomIn" data-anim-type="zoomIn" data-anim-delay="200">
					<div class="feature-col service-item">
						<a class="sr-icon" href="#"><i class="fa fa-car" style="color:#2ecc71"></i></a>
						<h3>							
							<a href="#">
								<?php echo _e('Бесплатная парковка','hotel-galaxy'); ?>
							</a>
						</h3>					
						<p><?php echo _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,','hotel-galaxy');?></p>						
						
					</div>
				</div><!-- .services-item -->		
				<?php } ?>			
			</div>
		</div>
	</section>