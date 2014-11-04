    
    <!DOCTYPE html>

    <html lang="en">

    <head>

        <meta charset="utf-8" />
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />
        <link href="<?php echo get_template_directory_uri();?>/css/mixins.css" rel="stylesheet" />
        <link href="<?php echo get_template_directory_uri();?>/css/font.css" rel="stylesheet" />
        <link href="<?php echo get_template_directory_uri();?>/css/home.css" rel="stylesheet" />

        <?php ?>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->    

        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>

        <!-- Le fav and touch icons -->

        <link rel="shortcut icon" href="../assets/ico/favicon.ico" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png" />
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css' />

    </head>

    <body>

        <section class="Header-top u-flex u-centerJustify">

            <div class="Header-top--content">

                <address class="Header-top--address u-flex u-endJustify">
                    <p class="Header-top--address-desc u-stretchAlignSelf">LLÁMENOS 
                        <div class="Header-top--address--icons">
                            <span class="icon-phone"></span><span>6747919</span>
                        </div>
                    </p>

                    <div class="Header-top--search u-flex u-row">
                        <form role="search" method="get" id="searchform" class="Header-top--form u-flex u-row" action="<?php echo home_url( '/' ); ?>">

                            <input type="text" value="" name="s" id="s" class="u-flex-10" placeholder="¿Qué tipo de display necesita?" />
                            <input type="submit" id="searchsubmit" class="u-flex-2" value="Buscar" />
                            <input type="hidden" name="post_type" value="product" />

                        </form>
                    </div>
                </address>

            </div>

        </section>

        <section id="navbar" class="Header-bottom u-flex u-row-wrap u-centerJustify">

            <div class="Header-bottom--content">
            
                <a href="<?php echo home_url( '/' )?>">
                    <figure class="Header-bottom--logo">
                        
                            <img src="<?php echo get_template_directory_uri()?>/img/home/Imagen1.jpg" alt="">

                        <div id="bt-menu" class="hidden-desktop bt-menu-phone u-flex u-row-wrap u-endJustify">
                            <a href="#" class="bt-menu-trigger">
                                <span></span>
                            </a>
                        </div>
                        
                    </figure>
                </a>
                
                <?php include 'includes/nav-desktop.php'; ?>

            </div>

        </section>

        <?php include 'includes/nav-responsive.php'; ?>

        <?php if ( is_front_page() || is_page() ) { ?>

        <div id="contenedor" class="Container">

            <div class="buscador-galeria">

                <div class="container" style="overflow:hidden;">

                    <?php if ( is_front_page() ) { ?>

                        <?php } elseif ( is_page() && has_post_thumbnail() ) {

                            $precio_desde = get_post_meta( get_the_ID(), 'precio_desde', true );

                            $link_aplicaciones = get_post_meta( get_the_ID(), 'link_aplicaciones', true );                                

                            echo '<a href="'.get_home_url().$link_aplicaciones.'" class="btn-ver-aplicaciones">';

                            echo '<div class="box-main-image">';

                            echo '<div>'.the_post_thumbnail().'</div>';

                            if(!empty($precio_desde)) { echo '<div class="precio_desde"><sup>DESDE</sup> <span>'.$precio_desde.'</span></div>'; }

                            echo '</div>';  

                            echo '</a>';

                        } ?>

                </div>

            </div>

            <?php if ( is_page( 9 ) ) : ?>

                <section class="hidden-phone Header--banner">
                    <figure class="Header--banner-img">
                        <img src="<?php echo get_template_directory_uri()?>/img/home/Imagen2.jpg" />
                    </figure>
                </section>

            <?php endif ?>
            
            <?php

            }

            ?>

            <div class="container">