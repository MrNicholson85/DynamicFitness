<?php 

/*
	
	Template Name: Home Page

*/

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="row">

				<div class="col-lg-12">

				<ul class="bxslider">

					<?php if (get_field ( 'slider' )) : while( has_sub_field( 'slider' )) : ?>

						<li>

							<div class="column left">
							  <div class="container">
							    <div class="vertical-align-wrap">
							      <div class="vertical-align vertical-align--middle">
							        <h1>Programs &amp; Workouts</h1>
							        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</span>
							        <a href="#">Learn More</a>
							      </div>
							    </div>
							  </div>
							</div>

							<img src="<?php $image = get_sub_field('slide_image'); echo $image['url']; ?>" class="img-responsive"/>

						</li>

					<?php  endwhile; endif; ?>

				</ul>

			</div>

			</div>

		<?php endwhile; ?> 

	<?php endif; ?>

	<div class="container">

		<h1>Home Page x</h1>

	</div>

<?php get_footer(); ?>
