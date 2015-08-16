<?php 

/*
	
	Template Name: Home Page

*/

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="row">

				<ul class="bxslider">

					<?php if (get_field ( 'slider' )) : while( has_sub_field( 'slider' )) : ?>

						<li>

							<img src="<?php $image = get_sub_field('slide_image'); echo $image['url']; ?>" class="img-responsive"/>

						</li>

					<?php  endwhile; endif; ?>

				</ul>

			</div>

		<?php endwhile; ?> 

	<?php endif; ?>

	<div class="container">

		<h1>Home Page x</h1>

	</div>

<?php get_footer(); ?>
