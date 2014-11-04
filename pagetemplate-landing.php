<?php
/*
Template Name: Landing Page
*/
?>
    <?php get_header("landing"); ?>

    	<div class="content-landing">        
            <div class="<?php if( !is_page( 'thank-you-page' ) ) echo 'main-content-landing' ?> page-content page-content-<?php echo get_the_ID(); ?>">
            	<div class="main-content-landing-inner">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php /*<h1><?php the_title(); ?></h1>*/ ?>
                        <?php the_content(); ?>
        
                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, this page does not exist.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>	
<?php if( !is_page( 'thank-you-page' ) ) : ?>
            <div class="sidebar-landing">
            	<div class="sidebar-landing-inner">
					<?php //get_sidebar(); ?>
                    <div class="sidebar-landing-form">
                    <?php
                    $shortcode_form = get_post_meta( get_the_ID(), 'landing-form', true );	
                    echo do_shortcode($shortcode_form); 	
                    ?>
                    </div>
                </div>
            </div>
<?php endif; ?>	
		</div>

    <?php get_footer("landing"); ?>