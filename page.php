    <?php get_header(); ?>

    	<div class="Content--single">
        <!-- <div class="container-sidebar">
			<?php get_sidebar(); ?>
		</div> -->
		
		<div class="main-content page-content page-content-<?php echo get_the_ID(); ?>">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php /*<h1><?php the_title(); ?></h1>*/ ?>
			  	<?php the_content(); ?>

			<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
		</div>		
		</div>

    <?php get_footer(); ?>