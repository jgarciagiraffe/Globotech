    <?php get_header(); ?>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>  
        <?php //the_content(); ?>
        <?php the_excerpt(); ?>
      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

    <?php get_footer(); ?>