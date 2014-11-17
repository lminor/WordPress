<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Masonry
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    
		<div class="site-info">
       
	    <?php if ( has_nav_menu( 'footer' ) ) : ?>
        
		    <?php wp_nav_menu( array(
	            'fallback_cb'	  =>  false,
			    'container_class' => 'footer-navigation',
			    'theme_location'  => 'footer' )
			    ); 
		    ?>
            
            <?php endif; ?>
            
        <div class="site-credits">
            <?php printf( __( 'MinorHouse' ) ); ?>
        </div><!-- .site-credits --> 
            
		</div><!-- .site-info -->
        
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
