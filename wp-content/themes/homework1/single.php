<?php get_header(); ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
		<?php the_post(); ?>
			
					
        
						<?php get_template_part('single-templates/content', get_post_format()); ?>

					
				
        
        <div class="cleaner_h40"><!-- a spacing between 2 posts --></div>
        
    
	</div>
    
    <div id="templatemo_sidebar_one">
    
	<?php get_sidebar(); ?>

    </div>
    
    <div id="templatemo_sidebar_two">
    	<?php dynamic_sidebar('sidebar-right2'); ?>
        <div class="banner_250x200">
    		<a href="" target="_parent"><img src="images/250x200_banner.jpg" alt="templates" /></a>
        </div>
        
        <div class="banner_125x125">
        	<a href="" target="_parent"><img src="images/templatemo_ads.jpg" alt="web 1" /></a>
            <a href="" target="_parent"><img src="images/templatemo_ads.jpg" alt="web 2" /></a>
    		<a href="" target="_parent"><img src="images/templatemo_ads.jpg" alt="templates 2" /></a>
    		<a href="" target="_parent"><img src="images/templatemo_ads.jpg" alt="templates 1" /></a>
        </div>
       
        <div class="cleaner_h40"></div>
        
        <div class="sidebar_two_box">
        
            <h4>Useful Resources</h4>
            <ul class="templatemo_list">
                <li><a href="" target="_parent">Free CSS Templates</a></li>
                <li><a href="" target="_parent">Flash Templates</a></li>
                <li><a href="" target="_parent">Website Templates</a></li>
                <li><a href="" target="_parent">Web Design Blog</a></li>
                <li><a href="" target="_parent">Flash Web Gallery</a></li>
                <li><a href="#">Curabitur sed lacinia</a></li>
                <li><a href="#">Vestibulum laoreet tincidunt</a></li>
                <li><a href="#">Nullam nec mi enim</a></li>
                <li><a href="#">Aliquam quam nulla</a></li>
                <li><a href="#">Curabitur non felis massa</a></li>
            </ul>
    	</div>
        
    </div>

	<div class="cleaner"></div>
</div> <!-- end of content wrapper -->


<?php get_footer(); ?>