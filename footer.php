	
        <a class="hidden-phone hidden-tablet hidden-desktop" href="http://www.globotech.com/stands-ferias-eventos/display-tipo-skyline/" target="_blank" onclick="ga('send', 'event', 'ebook', 'clic', 2);">

    		<?php if( is_page( 'skyline' ) || is_page( 'energy' ) ) : ?>

                <img src="<?php echo get_template_directory_uri()?>/img/landing/Banner-E-book-Skyline_07.jpg" alt="Conviertase en un expositor exitoso">

                <?php else : ?>

                <img src="<?php echo get_template_directory_uri()?>/img/landing/Banner-eBook-10-claves.jpg" alt="Conviertase en un expositor exitoso">

            <?php endif; ?>

        </a>

	</div> <!-- /container -->

    <div class="box_marcas hidden-phone hidden-tablet hidden-desktop">

    	<div class="container">

            <div class="box_inner_marcas">

            	<div style="padding-top:15px;">

                <ul id="listado_marcas">	

                    <li><img src="<?php bloginfo('template_url'); ?>/img/logos/logo-avianca.png" /></li>

                    <li><img src="<?php bloginfo('template_url'); ?>/img/logos/logo-tigo.png" /></li>

                    <li><img src="<?php bloginfo('template_url'); ?>/img/logos/logo-bancolombia.png" /></li>

                    <li><img src="<?php bloginfo('template_url'); ?>/img/logos/logo-exito.png" /></li>

                    <li><img src="<?php bloginfo('template_url'); ?>/img/logos/logo-nutresa.png" /></li>

                </ul>

                </div>

            </div>

		</div>

    </div>

    

<?php if( !is_page( 373 ) ) : ?>

<section class="hidden-phone Learn-home">
<h2 class="u-blue u-uppercase">Aprenda a exhibir mejor con globotech</h2>
<div class="u-flex Learn-home--box">
<div class="Learn-home--item u-flex-1"><a href="http://www.globotech.com/stands-ferias-eventos/10-claves-para-planear-una-exhibicion-en-ferias-o-eventos/" target="_blank"><figure><img src="http://192.168.0.11/globotech/stands-ferias-eventos/wp-content/themes/globotheme/img/home/Imagen3.png" alt="" />
</figure></a>
<div class="figcaption">

Consejos de marketing que le ayudarán a convertirse en un expositor exitoso.

</div></div>
<div class="Learn-home--item u-flex-1"><a href="http://www.globotech.com/stands-ferias-eventos/display-tipo-skyline/" target="_blank"><figure><img src="http://192.168.0.11/globotech/stands-ferias-eventos/wp-content/themes/globotheme/img/home/Imagen4.png" alt="" />
</figure></a>
<div class="figcaption">

9 Claves para entender a fondo un Pop Up Display.

</div></div>
<div class="Learn-home--item u-flex-1"><a href="http://www.globotech.com/stands-ferias-eventos/casos-de-exito/" target="_blank"><figure><img src="http://www.globotech.com/stands-ferias-eventos/wp-content/themes/globotheme/img/home/Imagen5.png" alt="" />
</figure></a>
<div class="figcaption">

Los nuevos modelos de visual marketing se enfocan en llevar la marca a donde están los clientes.

</div></div>
<div class="Learn-home--item u-flex-1"><a href="http://www.globotech.com/stands-ferias-eventos/stands-en-alta-definicion/" target="_blank"><figure><img src="http://www.globotech.com/stands-ferias-eventos/wp-content/themes/globotheme/img/home/img_42.png" alt="" /><p class="Learn-home--download">Descargar</p></a>
</figure>
<div class="figcaption">

Stands en alta definición

</div></div>
</div>

</section>

<?php endif; ?>

    <footer class="Footer">

        <div class="Footer-box u-flex">

            <!-- Contacto -->
            <div class="Footer-box-list u-flex-1">   
                <h3 class="Footer--title u-lightSeaGreen">CONTACTO</h3>
                <address class="Footer--address">
                    <p class="Footer--subtitle u-lightSeaGreen">Bogotá</p>
                    <p class="Footer--direction">Dir. Carrera 15A No. 122 - 60</p>
                    <h3 class="Footer--number"><span class="u-lightSeaGreen"><strong>Tel.</strong></span> 637 18 00</h3>
                </address>

                <address class="Footer--address">
                    <p class="Footer--subtitle u-lightSeaGreen">Medellín</p>
                    <p class="Footer--direction">Carrera 43A No. 16A Sur - 38 Of. 1204</p>
                    <h3 class="Footer--number"><span class="u-lightSeaGreen"><strong>Tel.</strong></span> 314 22 22</h3>
                </address>
            </div>

            <!-- Pagos -->
            <div class="Footer-box-list u-flex-1"> 
                <h3 class="Footer--title u-lightSeaGreen">ACEPTAMOS</h3>
                <img class="Footer--img" src="http://www.globotech.com/stands-ferias-eventos/wp-content/themes/globotheme/img/home/img_16_16.png" /> 
                <img class="Footer--img" src="http://www.globotech.com/stands-ferias-eventos/wp-content/themes/globotheme/img/home/img_16_19.png" />
                <img class="Footer--img" src="http://www.globotech.com/stands-ferias-eventos/wp-content/themes/globotheme/img/home/img_16_31.png" />
            </div>

            <div class="hidden-phone Footer-box-list u-flex-1">   
                <h3 class="Footer--title u-lightSeaGreen">CATÁLOGO VIRTUAL</h3>
                <a href="catalogo/Catalogo-Globotech2014.pdf" target="_blank">
                    <img src="http://www.globotech.com/stands-ferias-eventos/wp-content/themes/globotheme/img/home/img_45.png">
                    <p class="Footer--download">Descargar</p>
                </a>       
            </div>

            <!-- News -->
            <!-- <div class="Footer-box-list border-col">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Col #2')) : ?>
                <?php endif; ?>

          		<div class="box-noticias">

            		<ul class="list-noticias">

                		<?php query_posts( 'post_type=post&posts_per_page=2&cat=16'); ?>

                		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    		<li>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php the_title(); ?><?php //the_excerpt(); ?>
                                </a>
                                <strong>Publicado. <?php echo get_the_date(); ?></strong>
                            </li>   

                		<?php endwhile; endif; wp_reset_query(); ?>

            		</ul>

        		</div>

            </div> -->

            <!-- Financiación -->        
            <!-- <div class="Footer-box-list border-col cleartablet">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Col #3')) : ?>
                <?php endif; ?>
            </div> -->

        </div>

  	</footer>

    <div class="footer-1">
        <p class="Footer-firma">2014 Globotech - Todos los derechos reservados</p>
    </div>

</div> <!-- /contenedor -->

<?php wp_footer(); ?>

</body>

<script src="<?php bloginfo('template_url'); ?>/js/classie.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/utilities.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.menu-aim.js"></script> 
<script type="text/javascript">

    var $menu = $(".nav-desktop .dropdown-menu");
    // jQuery-menu-aim: <meaningful part of the example>
    // Hook up events to be fired on menu row activation.

    $menu.menuAim({
        activate: activateSubmenu,
        deactivate: deactivateSubmenu
    });

    // jQuery-menu-aim: </meaningful part of the example>
    // jQuery-menu-aim: the following JS is used to show and hide the submenu
    // contents. Again, this can be done in any number of ways. jQuery-menu-aim
    // doesn't care how you do this, it just fires the activate and deactivate
    // events at the right times so you know when to show and hide your submenus.

    function activateSubmenu( row ) {

        var $row = $(row),
            submenuId = $row.data("submenuId"),
            $submenu = $("#" + submenuId),
            height = $menu.outerHeight(),
            width = $menu.outerWidth();

		if ( $submenu.hasClass( 'popover-right' ) ) {

			// Show the submenu

			$submenu.css({
				display: "block",
				top: -1,
				left: - $submenu.outerWidth() +1 ,  // main should overlay submenu
				height: height - 4  // padding for main dropdown's arrow
			});

		}

		else {				
			// Show the submenu
			$submenu.css({
				display: "block",
				top: -1,
				left: width - 3,  // main should overlay submenu
				height: height - 4  // padding for main dropdown's arrow
			});
		}

        // Keep the currently activated row's highlighted look
        $row.find("a").addClass("maintainHover");

    }



    function deactivateSubmenu(row) {

        var $row = $(row),
            submenuId = $row.data("submenuId"),
            $submenu = $("#" + submenuId);

        // Hide the submenu and remove the row's highlighted look
        $submenu.css("display", "none");
        $row.find("a").removeClass("maintainHover");

    }



    $(document).click(function() {

        // Simply hide the submenu on any click. Again, this is just a hacked
        // together menu/submenu structure to show the use of jQuery-menu-aim.
        $(".popover").css("display", "none");
        $("a.maintainHover").removeClass("maintainHover");

    });	



</script>

<script src="<?php bloginfo('template_url'); ?>/js/flexisel/js/jquery.flexisel.js" type="text/javascript"></script>
<script type="text/javascript">

	$(window).load(function() {	

		$("#listado_marcas").flexisel({

			visibleItems: 5,
			animationSpeed: 600,
			autoPlay: true,
			autoPlaySpeed: 3000,
			pauseOnHover: true,	
			enableResponsiveBreakpoints: true,

			responsiveBreakpoints: {

			  portrait: {
				changePoint:480,
				visibleItems: 1
			  }, 

			  landscape: {
				changePoint:640,
				visibleItems: 2
			  },

			  tablet: {
				changePoint:768,
				visibleItems: 3
			  }

			}

		 });

	 });		 	

</script>

<script>

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-51795435-1', 'globotech.com');
    ga('send', 'pageview');

</script>

</html>