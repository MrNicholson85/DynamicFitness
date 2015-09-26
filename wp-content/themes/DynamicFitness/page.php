<?php get_header(); ?>

<div class="container">

	<div class="row">

		<div class="col-lg-8">

			<div class="row">

	<?php

	//vars
	$args = array(

		'post_category' => 'workout_routine',
		'post_per_page' => '3'

	);

	$the_query = new WP_Query ( '$args' ); ?>

<?php if ( $the_query->have_posts() ) : ?>

					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<div class="col-lg-6">

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

					<div class="df_post_contnet">

<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php the_excerpt(); ?>

</div>

</div>

<?php endwhile; ?> 

	<?php endif; ?>



</div>

</div>

</div>

</div>

<?php get_footer(); ?>