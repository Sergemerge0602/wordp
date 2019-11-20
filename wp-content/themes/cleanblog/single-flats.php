<?php get_header(); ?>
		<div id="templatemo_sidebar">
            <div id="templatemo_rss">
            
                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>
                
            </div>
			
            
  
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
    	
        <div id="templatemo_main">
        
            
            <?php the_post(); ?>
			
				<div class="post_section">
				
				<?php 
					$cities = get_the_terms($post->ID, 'city'); 
				?>
				<div>
					<strong>Город:</strong>
					<?php foreach($cities as $city){ ?>
						<a href="<?php echo get_term_link((int)$city->term_id) ?>">
							<?php echo $city->name ?>
						</a> 
					<?php } ?>
				</div>
					
					<span class="comment"><a href="blog_post.html">128</a></span>
				
					<h2><?php the_title(); ?></h2>
					
					<?php the_post_thumbnail('thumbnail'); ?>
					
					<div><?php the_content(); ?></div>
					
					
				</div>	
	
			<aside>
				<h2>Оставить заявку</h2>
				<form>
					<input type="hidden" name="id_flat" value="<?php echo $post->ID ?>">
					<div>
						<div>Телефон</div>
						<div>
							<input type="text" name="phone">
						</div>
					</div>
					<input class="flat-app-btn" type="button" value="Отправить">
				</form>
			</aside>
                
            
                
		</div>
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>



<?php get_footer(); ?>