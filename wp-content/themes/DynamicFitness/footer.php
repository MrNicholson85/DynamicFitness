<?php wp_footer(); ?>


<footer class="fadeInBlock">

	<div class="bottom_ledge">

		<div class="container">

			<div class="row">

				<div id="df_footer_about" class="col-lg-4">

					<div id="logo">

                        <a href="<?php bloginfo('url'); ?>">
                            
                            <img src="<?php bloginfo('template_directory'); ?>/img/logo-lg-dark.png" class="img-responsive" />

                        </a>

                    </div>

                    	<hr>

                    <?php the_excerpt(); ?>

				</div>

			</div>

		</div>

	</div>
	<div class="bottom_info">

		<div class="container">

			<div class="row">

				<div class="col-lg-6">

					Copyright &copy; Dynamic Fitness <?php echo date('Y') ?> - All Rights Reserved<br/>
					<span>Site created by <a href="">Darryl Nicholson</a></span>

				</div>
				<div class="col-lg-6">



				</div>

			</div>

		</div>

	</div>

</footer>

</body>

</html>
