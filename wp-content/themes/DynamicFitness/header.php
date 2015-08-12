<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('name') ?></title>
<?php wp_head(); ?>
</head>


<body>

 <div class="container">

    <nav class="navbar navbar-default" role="navigation">

        <div class="container">

            <div id="header">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>

                    <div id="logo">

                        <img src="<?php bloginfo('template_directory'); ?>/img/logo-lg.png" class="img-responsive" />

                    </div>

            </div>

                <?php

                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                
                ?>

            </div>

        </div>

    </nav>

 </div>
