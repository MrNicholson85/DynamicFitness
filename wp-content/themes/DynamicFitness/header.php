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

        <div class="row">

            
                    <div class="col-lg-4">

                        <div id="logo">

                            <img src="<?php bloginfo('template_directory'); ?>/img/logo-lg.png" class="img-responsive" />

                        </div>

                    </div>

            <div id="header" class="col-lg-4">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>

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

            <div class="col-lg-4">

            <div class="header-social pull-right">
                
                <div id="search-cart">

<div class="pull-right">
                    <a href="#" id="cart"><img src="<?php bloginfo('template_directory'); ?>/img/cart.png" /></a>
                </div>

                     <form action="" class="search-form pull-right">
                        <div class="form-group has-feedback ">
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" class="form-control" name="search" id="search" placeholder="search">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </form>

                </div>

            </div>

        </div>

        </div>

    </nav>

 </div>
