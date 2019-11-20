<?php get_header(); ?>
		<div id="templatemo_sidebar">
            <div id="templatemo_rss">
            
                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>
                
            </div>
			
            <?php get_sidebar(); ?>
  
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
    	<div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">
                    <li class="sliderImage">
                        <a href=""><img src="assets/images/slider/1.jpg" alt="1" /></a>
                        <span class="top"><strong>Project 1</strong><br />Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                    </li>
                    <li class="sliderImage">
                        <a href=""><img src="assets/images/slider/2.jpg" alt="2" /></a>
                        <span class="bottom"><strong>Project 2</strong><br />uisque eget elit quis augue pharetra feugiat.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="assets/images/slider/3.jpg" alt="3" />
                        <span class="left"><strong>Project 3</strong><br />Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="assets/images/slider/4.jpg" alt="4" />
                        <span class="right"><strong>Project 4</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </li>
                    <li class="clear sliderImage"></li>
                </ul>
            </div>
        </div>
        
        <div id="templatemo_main">
        
            
            <?php if (have_posts()): 
				while (have_posts()): the_post(); ?>
				<div class="post_section">
					<span class="comment"><a href="blog_post.html">128</a></span>
				
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
		
					<?php echo get_the_date('F d, Y'); ?> | <strong>Author:</strong> <?php the_author(); ?> | <strong>Category:</strong> <?php the_category(); ?>
					
					<?php the_post_thumbnail('thumbnail'); ?>
					
					<p><?php echo CFS() -> get('intro'); ?></p>
					<a href="<?php echo the_permalink(); ?>">Continue reading...</a>
				</div>	
				<?php endwhile; ?>
            <?php else: ?>
				Записей нет!
            <?php endif; ?>
            
			<?php the_posts_pagination(); ?>	

                
            
                
		</div>
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>



<?php get_footer(); ?>