		<?php
		/**
		 *  The template for displaying Front Page.
		 *
		 *  @package accountant
		 */
		get_header();
		if ( get_option( 'show_on_front' ) == 'page' ){?>
  			<section class="wide-nav">
				<div class="wrapper">
					<h3><?php the_title(); ?></h3>
				</div><!--/div .wrapper-->
			</section><!--/section .wide-nav-->
		</header><!--/header-->
		<section id="content">
			<div class="wrapper cf">
				<div id="posts">
					<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						
					?>
					<div class="post">
						
						<div class="post-excerpt">
							<?php the_content(); ?>
						</div><!--/div .post-excerpt-->
												
						
					</div><!--/div .post-->
					<?php endwhile; else: ?>
                    	<p><?php _e('Sorry, no posts matched your criteria.', 'lawyeria-lite'); ?></p>
                	<?php endif; ?>
				</div><!--/div #posts-->
				<?php get_sidebar(); ?>
			</div><!--/div .wrapper-->
		</section><!--/section #content-->
<?php } else { ?>
			<div id="subheader" class="cf" style="background-image: url('<?php
				if ( get_theme_mod( 'lawyeria_lite_frontpage_subheader_bg', get_template_directory_uri() . "/images/full-header.jpg" ) ) {
				    echo get_theme_mod( 'lawyeria_lite_frontpage_subheader_bg',get_template_directory_uri() . "/images/full-header.jpg" );
			     }
			 ?>');">
				<div class="subheader-color cf">
					<div class="wrapper cf">
						<div class="full-header-content full-header-content-no-sidebar">
								<?php
									if ( get_theme_mod( 'lawyeria_lite_frontpage_header_title','Lorem ipsum dolor sit amet, consectetur adipscing elit.' ) ) {
										echo '<h3>';
										echo get_theme_mod( 'lawyeria_lite_frontpage_header_title','Lorem ipsum dolor sit amet, consectetur adipscing elit.' );
										echo '</h3>';
									}
								?>
							
								<?php
									if ( get_theme_mod( 'lawyeria_lite_frontpage_header_content','Ut fermentum aliquam neque, sit amet molestie orci porttitor sit amet. Mauris venenatis et tortor ut ultrices. Nam a neque venenatis, tristique lacus id, congue augue. In id tellus lacus. In porttitor sagittis tellus nec iaculis. Nunc sem odio, placerat a diam vel, varius.' )) {
										echo '<p>';
											echo get_theme_mod( 'lawyeria_lite_frontpage_header_content','Ut fermentum aliquam neque, sit amet molestie orci porttitor sit amet. Mauris venenatis et tortor ut ultrices. Nam a neque venenatis, tristique lacus id, congue augue. In id tellus lacus. In porttitor sagittis tellus nec iaculis. Nunc sem odio, placerat a diam vel, varius.' );
										echo '</p>';	
									}
								?>
						</div><!--/div .header-content-->
						<div class="subheader-features">
							<div class="feature">
								1.700+
								<span>Trusted clients</span>
							</div><!--/.feature-->
							<div class="feature">
								$180.000.000
								<span>Recovered for your clients</span>
							</div><!--/.feature-->
							<div class="feature">
								98%
								<span>Succesful cases</span>
							</div><!--/.feature-->
							<div class="feature">
								10.600
								<span>Personal injury cases</span>
							</div><!--/.feature-->
						</div><!--/.subheader-features-->
					</div><!--/div .wrapper-->
				</div><!--/div .full-header-color-->
			</div><!--/div #subheader-->
			<div class="second-subheader">
				<div class="wrapper">
					<h3>
						<?php
						if( get_theme_mod( 'lawyeria_lite_frontpage_subheader_title','Lorem Ipsum is simply dummy text of the printing and type setting industry.' ) ) {
							echo get_theme_mod( 'lawyeria_lite_frontpage_subheader_title','Lorem Ipsum is simply dummy text of the printing and type setting industry.' );
						}
						?>
					</h3><!--/h3-->
				</div><!--/div .wrapper-->
			</div><!--/div .second-subheader-->
		</header><!--/header-->
		<section id="features">
			<div class="wrapper cf">
				<div class="features-box">
					
						<?php
							if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_icon',get_template_directory_uri().'/images/features-box-icon-one.png' ) ) { 
							
								echo '<div class="features-box-icon">';
							
									echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_icon', get_template_directory_uri().'/images/features-box-icon-one.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title' ).'" />';
									
								echo '</div>';
							}
							
							if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title','Lorem' ) ) {
							
								echo '<h4>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title','Lorem' );
									
								echo '</h4>';	
							}
							
							if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_content','Go to Appearance - Customize, to add content.' ) ) {
							
								echo '<p>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_content','Go to Appearance - Customize, to add content.' );
									
								echo '</p>';	
							}
						?>
				</div><!--/div .features-box-->
				<div class="features-box">
					
						<?php
							if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_icon', get_template_directory_uri().'/images/features-box-icon-two.png' ) ) {
							
								echo '<div class="features-box-icon">';
								
									echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_icon',get_template_directory_uri().'/images/features-box-icon-two.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ).'" />';
									
								echo '</div>';	
							} 
							if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ) ) {
							
								echo '<h4>';
							
									echo get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' );
									
								echo '</h4>';	
							}
					
							if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_content', 'Go to Appearance - Customize, to add content.' ) ) {
							
								echo '<p>';
							
									echo get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_content', 'Go to Appearance - Customize, to add content.' );
									
								echo '</p>';	
							}
						?>
				
				</div><!--/div .features-box-->
				<div class="features-box">
					
						<?php
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_icon',get_template_directory_uri().'/images/features-box-three.png' ) ) { 
							
								echo '<div class="features-box-icon">';
								
									echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_icon', get_template_directory_uri().'/images/features-box-three.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' ).'" />';
								
								echo '</div>';
								
							}	
				
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' ) ) {
							
								echo '<h4>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' );
									
								echo '</h4>';	
							}
						
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_content','Go to Appearance - Customize, to add content.' ) ) {
							
								echo '<p>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_content','Go to Appearance - Customize, to add content.' );
									
								echo '</p>';	
							}
						?>
					
				</div><!--/div .features-box-->
			</div><!--/div .wrapper-->
		</section><!--/section #features-->
		<section id="about-us">
			<div class="wrapper">
				<div class="about-us-container cf">
					<h3>Who we are?</h3>
					<h4>That clients' success determines our own. So we ensure both by clients' success determines our collaborating with our clients to achieve their goals.</h4>
					<div class="about-us-box left">
						Apart and limply monstrous far much added you oyster bawled lost in hey due so armadillo tpangolin sexual aboard much alas dragonfly be more some fallacious and barbarous a less much more sat before fishily thus somberly or restful flexed best wherever squinted drew much oh sloth as some when scornfully cut involuntarily at audible goodness Apart and limply omberly or best estful flexed wherever squinted drew much oh sloth as some when scornfully.
					</div><!--/.about-us-box-->
					<div class="about-us-box right">
						Apart and limply monstrous far much added be oyster bawled lost in hey due so armadillo pangolin sexual aboard much alas dragonfly the more some fallacious and barbarous a less much more sat before fishily thus somberly or restful flexed wherever squinted drew much oh sloth as best of th some when scornfully cut involuntarily at audible goodness.
					</div><!--/.about-us-box-->
				</div><!--/.about-us-container.cf-->
			</div><!--/.wrapper-->
		</section><!--/#about-us-->
		<?php
		/*
		<section id="content">
			<div class="wrapper">
				<div class="content-article cf" role="main">
					
						<?php
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thecontent_image',get_template_directory_uri().'/images/content-article-image.png' )) {

								echo '<div class="content-article-image">';
								
									echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_thecontent_image',get_template_directory_uri().'/images/content-article-image.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_thecontent_title','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_thecontent_title','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.' ).'" />';
									
								echo '</div>';	
							
							}
					
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thecontent_title','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.' ) ) {
							
								echo '<h3>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_thecontent_title','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.' );
									
								echo '</h3>';	
							}

							if ( get_theme_mod( 'lawyeria_lite_frontpage_thecontent_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.' ) ) {
							
								echo '<p>';
									echo get_theme_mod( 'lawyeria_lite_frontpage_thecontent_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.' );
								echo '</p>';	
							}
						?>
					
				</div><!--/div .content-article .cf-->


			</div><!--/div .wrapper-->
		</section><!--/section #content-->
		*/
		?>
		<?php } get_footer(); ?>