	
    <?php get_header(); ?>

    <div class="container--box">

        <section class="Asesoria u-flex u-row-wrap u-dir-col">        
 
            <div class="Asesoria-desc">
                <h3 class="Asesoria--title u-blue">¿Quiere que lo asesoremos sin costo?</h3>
                <p class="Asesoria--desc hidden-phone"><span class="u-blue">Una mala presentación puede darle millones de pérdidas a su negocio.</span> Conozca cómo puede aumentar el valor de su compañía con una solución innovadora para exhibit su marca.</p>
            </div>

            <div class="Asesoria-desc">
                <div id="homenews" class="box-newsletter">
                    <div class="inner-box-newsletter">
                        <div class="inner-box-newsletter">
                            <?php echo do_shortcode('[mailchimpsf_form]'); ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

		<?php endwhile; else: ?>

            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

		<?php endif; ?>        

    <?php get_footer(); ?>