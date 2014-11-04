	<?php get_header(); ?>
       	
        
        <?php if(is_product()) { ?>
        		<?php woocommerce_content(); ?>                
                <?php /*woocommerce_template_single_title(); ?>
                <?php woocommerce_template_single_excerpt(); ?>  
                <?php woocommerce_product_description_tab(); ?>                               
                <?php woocommerce_show_product_images(); ?>
                <?php //woocommerce_show_product_thumbnails(); ?>
                <?php //woocommerce_template_single_meta(); ?>
                <?php woocommerce_output_related_products();*/ ?>               
        <?php } else { ?>
        	<div class="row box-main-content">
                <div class="container-sidebar-woo">
                    <?php get_sidebar('woocommerce'); ?>
                </div>
                <div class="span6 main-content woo-list-products">
                    <?php woocommerce_content(); ?>
                </div>	
            </div>	
        <?php } ?>    
		

    <?php get_footer(); ?>