	<?php get_header(); ?>
		
        <div class="main-content category-content">
        
            <h1 class="archive-title"><?php single_cat_title( '' ); ?></h1>	
            
            <?php if ( have_posts() ) : ?>				
    
                <?php /* The loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>  
                    <?php the_excerpt(); ?>
                    
                <?php endwhile; ?>			
    
            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            
		</div>
        

	<?php get_footer(); ?>