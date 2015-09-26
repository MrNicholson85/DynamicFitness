<?php get_header(); ?>

<div class="container">

	<div class="row">

	<div class="col-lg-8">

<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

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

<h1><?php the_title(); ?></h1>
<?php the_content(); ?>

</div>

<?php endwhile; ?> 

	<?php endif; ?>

</div>

</div>

</div>

<?php get_footer(); ?>