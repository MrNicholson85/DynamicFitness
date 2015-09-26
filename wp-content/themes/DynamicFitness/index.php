<?php 

/*
	
	Template Name: Home Page

*/

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			

				<div class="col-lg-12">

					<div class="row">

				<ul class="bxslider">

					<?php if (get_field ( 'slider' )) : while( has_sub_field( 'slider' )) :

						//vars
						$main_hero_image = get_sub_field('slide_image');
						$hero_title = get_sub_field('slider_title');
						$hero_message = get_sub_field('slider_message');
						$hero_link = get_sub_field('slide_image');
						$cap_placement = get_sub_field('caption_placement');

					 ?>

						<li>

							<div class="caption">
							  <div class="container">
							    <div class="vertical-align-wrap">


							    	<div class="vertical-align <?php echo $cap_placement; ?>">

							        <h1><?php echo $hero_title ?></h1>
							        <span><?php echo $hero_message; ?></span>

							        <a href="#">Learn More</a>

							      </div>
							    </div>
							  </div>
							</div>

							<img src="<?php echo $main_hero_image['url']; ?>" class="img-responsive"/>

						</li>

					<?php  endwhile; endif; ?>

				</ul>

			</div>

			</div>

		<?php endwhile; ?> 

	<?php endif; ?>

	<div class="clearfix"></div>

	<div id="social_container" class="teal fadeInBlock">

		<div class="container">

			<div class="row">

				<h2> Connect With Us </h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>

				<div id="qt_container">

					<span class="social" id="facebook">

						<img src="<?php bloginfo('template_directory'); ?>/img/facebook-1024.png" class="img-responsive" />

					</span>

					<span class="social" id="twitter">

						<img src="<?php bloginfo('template_directory'); ?>/img/twitter-1024.png" class="img-responsive" />

					</span>

					<span class="social" id="youtube">

						<img src="<?php bloginfo('template_directory'); ?>/img/youtube-1024.png" class="img-responsive" />

					</span>

					<span class="social" id="linkedin">

						<img src="<?php bloginfo('template_directory'); ?>/img/linkedin-1024.png" class="img-responsive" />

					</span>

					<span class="last social" id="instagram">

						<img src="<?php bloginfo('template_directory'); ?>/img/instagram-1024.png" class="img-responsive" />

					</span>

				<div class="clearfix"></div>

			</div>

			</div>

		</div>

	</div>

	<div class="site_intro fadeInBlock">

		<div id="info_background">

		<div class="container">

			<div class="info_content col-lg-8">

				<div class="row">


					<div class="col-lg-12" id="intro_header">

						<h1>HEALTH AND FITNESS</h1>
						<span>A PLACE FOR YOUR FITNESS GOAL</span>

					</div>

				</div>

				<p><?php the_content(); ?></p>

			</div>

		</div>

	</div>	

	</div>

	<div class="recent_workouts fadeInBlock">


		<div class="container">

			<div class="row">

				<div class="col-lg-12" id="df_workout_blk">

					<h2>Recent Workouts:</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
					<a href="" class="df_workout_btn teal">Search Workouts</a>

				</div>

					<?php
					//vars
					$custom_args = array(
				'category_name' => 'workout_routine',
      'post_type' => 'post',
      'posts_per_page' => 3,
    );

  $custom_query = new WP_Query( $custom_args ); ?>

  <?php if ( $custom_query->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

					<ul class="bxslider">

					<?php if (get_field ( 'slider' )) : while( has_sub_field( 'slider' )) :

						//vars
						$main_hero_image = get_sub_field('slide_image');

					?>

					<li>

						<img src="<?php echo $main_hero_image['url']; ?>" class="img-responsive"/>

					</li>

					<?php  break; endwhile; endif; ?>

					</ul>
					
					    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					    <?php the_excerpt(); ?>

					    </div>
					
					<?php endwhile; ?>

					

					<?php endif; ?>

			</div>

		</div>


	</div>

	<div class="trainers fadeInBlock teal">

		<div class="container">

			<div class="row">

			<?php
			//vars
			$custom_args = array(
				'category_name' => 'trainers',
		      'post_type' => 'post',
		      'posts_per_page' => 3,
		    );

		  $custom_query = new WP_Query( $custom_args ); ?>

  <?php if ( $custom_query->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

							<div class="col-lg-3">

								<ul class="bxslider">

					<?php if (get_field ( 'slider' )) : while( has_sub_field( 'slider' )) :

						//vars
						$main_hero_image = get_sub_field('slide_image');

					?>

					<li>

						<img src="<?php echo $main_hero_image['url']; ?>" class="img-responsive"/>

					</li>

					<?php  break; endwhile; endif; ?>

					</ul>

								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								<?php the_content(); ?>

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

		</div>

	</div>

	</div>

<?php get_footer(); ?>
