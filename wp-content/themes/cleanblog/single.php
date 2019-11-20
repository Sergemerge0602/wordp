<?php get_header(); ?>
		<div id="templatemo_sidebar">
            <div id="templatemo_rss">
            
                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>
                
            </div>
			
            <?php get_sidebar(); ?>
  
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
    	
        <div id="templatemo_main">
        
            
            <?php the_post(); ?>
			
				<div class="post_section">
				
					<?php get_template_part('single-templates/content', get_post_format()); ?>
					
				</div>	
	

                
            
                
		</div>
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>



<?php get_footer(); ?>