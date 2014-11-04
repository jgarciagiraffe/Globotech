    	
    	</div> <!-- /container -->
        
        <!-- <hr> -->
               
      	
        <footer>
        	<div class="container footer_inner_1">
  				<div class="footer_inner_2">
                    <div>
                      <div style="text-align:center;"><img src="<?php echo get_template_directory_uri()?>/img/landing/footer-info.png" /></div>
                      <div class="clearfix"></div>
                    </div>
                </div>
			</div>        
      	</footer>
        <div class="footer-1"></div>
      
    </div> <!-- /contenedor -->
    <?php wp_footer(); ?>

  </body>
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
        function activateSubmenu(row) {
            var $row = $(row),
                submenuId = $row.data("submenuId"),
                $submenu = $("#" + submenuId),
                height = $menu.outerHeight(),
                width = $menu.outerWidth();
			
			if ($submenu.hasClass('popover-right'))
			{
				// Show the submenu
				$submenu.css({
					display: "block",
					top: -1,
					left: - $submenu.outerWidth() +1 ,  // main should overlay submenu
					height: height - 4  // padding for main dropdown's arrow
				});
			}
			else
			{				
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
    
    
    
    <?php /*<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>*/ ?>

</html>