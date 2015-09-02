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

	<div class="social_container">

		<div class="container">

			<div class="row">

				<ul>

					<li>Social Here</li>

				</ul>

			</div>

		</div>

	</div>

	<div class="container fadeInBlock">

		<h1>Home Page x</h1>

		<p><?php the_content(); ?></p>

	</div>

<?php get_footer(); ?>
