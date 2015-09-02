<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name') ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css">

<?php wp_head(); ?>

</head>


<body>

<div class="top_ledge">

    <div class="container">

        <div class="row">


        <div class="col-lg-6 col-md-6 col-sm-6">

            <div class="df_contact">

                <div id="df_phone">

                    <span class="glyphicon glyphicon-earphone ledge-glyf white"></span>1-555-555-5555

                </div>
                <div id="df_contact_form">

                    <div class=" btn-group" role="group">

                        <button type="button" class="btn btn-default dropdown-toggle ledger-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <span class="glyphicon glyphicon-envelope white ledge-glyf"></span> Contact 

                        </button>

                        <ul class="dropdown-menu ledger-dd">

                            <div class="df_cont_form">

                                Contact form here

                            </div>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">

            <div class="df_search_login">

                <div class=" btn-group pull-right" role="group">

                    <button type="button" class="btn btn-default dropdown-toggle ledger-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <span class="glyphicon glyphicon-user white ledge-glyf"></span> Sign-in

                    </button>

                    <ul class="dropdown-menu ledger-dd">

                        <div class="df_user_login">

                            <?php wp_login_form(); ?>

                        </div>

                    </ul>

                </div>

                <div id="df_search" class="pull-right">

                    <?php get_search_form(); ?>

                </div>

            </div>

        </div>

        <span class="clearfix"></span>


</div><!-- /.row -->

</div><!--  /.container -->

</div><!--  /.top_ledge -->

 <div class="container">

    <nav class="navbar navbar-default" role="navigation">

        <div class="row">

            
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-9">

                        <div id="logo">

                            <a href="<?php bloginfo('url'); ?>">
                                
                                <img src="<?php bloginfo('template_directory'); ?>/img/logo-lg.png" class="img-responsive" />

                            </a>
                        </div>

                    </div>
                    <div class="hidden-lg hidden-md hidden-sm col-xs-3">

                <div class="header-social pull-right">
                    
                    <div id="search-cart">

                        <div class="pull-right">

                            <a href="#" id="cart"><img src="<?php bloginfo('template_directory'); ?>/img/cart.png" /></a>

                        </div>

                    </div>

                </div>

            </div>

            <div id="df_header" class="col-lg-5 col-md-6 col-sm-7 col-xs-12">

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

            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-12 hidden-xs">

                <div class="header-social pull-right">
                    
                    <div id="search-cart">

                        <div class="pull-right">

                            <a href="#" id="cart"><img src="<?php bloginfo('template_directory'); ?>/img/cart.png" /></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </nav>

 </div>
