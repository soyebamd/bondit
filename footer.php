<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
	</div><!--.inner-wrapper--->
    </div><!-- .site -->
    
  
    
    
    <?php if (is_active_sidebar( 'content_bottom' ) ) { ?>
            <div class="page-services">
            	<div class="inner-wrapper">
                	<?php dynamic_sidebar( 'content_bottom' ); ?>
                </div>    
            </div>
 	<?php }?>
    
  
    
    
    <?php if (is_active_sidebar( 'Bottom' ) ) { ?>
            <div class="bottom">
            	<div class="inner-wrapper">
                	<?php dynamic_sidebar( 'Bottom' ); ?>
                </div>    
            </div>
 	<?php }?>
    
      <?php if (is_active_sidebar( 'content_bottom_buffalo' ) ) { ?>
            <div class="bottom bottom_first">
            	<div class="inner-wrapper">
                	<?php dynamic_sidebar( 'content_bottom_buffalo' ); ?>
                </div>    
            </div>
 	<?php }?>
	
    
    
    
    <!-- RECENT PROJECTS & CLIENTS -->
    <section id="recent-project">
    
    <div  class="inner-wrapper">
    
    <h1 class="services-widget-title">RECENT PROJECTS & CLIENTS</h1>
    
  <article><h3> Wild Horses <br> <span>Michael Mendelsohn Pictures</span></h3><a href="https://www.youtube.com/watch?v=Pdy0mXmlYeo"> <img src="<?php echo get_template_directory_uri(); ?>/images/wild-horses-project.jpg"  class="img-responsive" title="wild horses"> </a></article>
  
  
  <article><h3>  Rob Zombie “31" <br> <span>Bow & Arrow Entertainment</span></h3><a href="http://www.imdb.com/title/tt2537390/"> <img src="<?php echo get_template_directory_uri(); ?>/images/Slow-Learners.jpg"  class="img-responsive" title="Slow Learners"> </a></article>
    
    
    
  <article><h3> The Invitation <br> <span>Gamechanger Films</span></h3><a href="http://www.imdb.com/title/tt2400463/"> <img src="<?php echo get_template_directory_uri(); ?>/images/The-Invitation.jpg"  class="img-responsive" title="The Invitation"> </a></article>
    
    
    
  <article><h3>Sharknado 2 <br> <span>The Asylum</span></h3><a href="http://www.imdb.com/title/tt3062074/"> <img src="<?php echo get_template_directory_uri(); ?>/images/Sharknado.jpg"  class="img-responsive" title="Sharknado 2"> </a></article>
  
  
  
  <article><h3> Beyond Skyline <br> <span>Hydraulx </span></h3><a href="http://www.imdb.com/title/tt1724970/?ref_=nv_sr_1"> <img src="<?php echo get_template_directory_uri(); ?>/images/Beyond-Skyline.jpg"  class="img-responsive" title="Beyond Skyline"> </a></article>
  
  
  
  
  

  
  <article><h3> Arcana  <br> <span>Corporate client</span></h3><a href="http://www.theasylum.cc/"> <img src="<?php echo get_template_directory_uri(); ?>/images/arcana.png"  class="img-responsive" title="Arcana"> </a></article>
  
 
  <article><h3> The Asylum <br> <span>Corporate client</span></h3><a href="http://www.arcana.com/">  <img src="<?php echo get_template_directory_uri(); ?>/images/The-Asylum.jpg"  class="img-responsive" title="The Asylum"> </a></article>
  
  
  
  
  
  <article><h3> Concourse Film trade <br> <span>Corporate client</span></h3><a href="http://concoursefilmtrade.com/"> <img src="<?php echo get_template_directory_uri(); ?>/images/Concourse.png"  class="img-responsive" title="Concourse Film trade"> </a></article>
  
  
  
  
  
  
  
    
    </div>
    
    
    </section>
    
	

	<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer">
            	<div class="main-wrapper">
				<?php if (is_active_sidebar( 'footer-box1' ) ) { ?>
					<div class="footer-box-1">
                <?php dynamic_sidebar( 'footer-box1' ); ?>
            		</div>
            	<?php }?> 
                
                <?php if (is_active_sidebar( 'footer-box2' ) ) { ?>
					<div class="footer-box-2">
                <?php dynamic_sidebar( 'footer-box2' ); ?>
            		</div>
            	<?php }?> 
                
                <?php if (is_active_sidebar( 'footer-box3' ) ) { ?>
					<div class="footer-box-3">
                <?php dynamic_sidebar( 'footer-box3' ); ?>
            		</div>
            	<?php }?> 
                
                <?php if (is_active_sidebar( 'footer-box4' ) ) { ?>
					<div class="footer-box-4">
                <?php dynamic_sidebar( 'footer-box4' ); ?>
            		</div>
            	<?php }?> 
                </div>
             </div>
                  
        
        <div class="site-info">
			
			<?php /*?><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a><?php */?>
           		
           	<div class="main-wrapper">
                	<?php if (is_active_sidebar( 'footer-left' ) ) { ?>
						<div class="footer-left">
                		<?php dynamic_sidebar( 'footer-left' ); ?>
            			</div>
            		<?php }?> 
                    
                    <?php if (is_active_sidebar( 'footer-right' ) ) { ?>
						<div class="footer-right">
                		<?php dynamic_sidebar( 'footer-right' ); ?>
            			</div>
            		<?php }?>   
            </div>
            	
            
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46977503-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>

</body>
</html>
