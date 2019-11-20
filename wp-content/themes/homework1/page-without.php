<?php 
	/*
	Template Name: Без сайдбара
	*/
?>
<?php get_header(); ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
		<?php the_post(); ?>
			
					<div class="post_section"><span class="bottom"></span>
        
						<span class="comment"><a href="blog_post.html">65</a></span>
					
						<h2><?php the_title(); ?><?php the_post_thumbnail(); ?></h2>
						
						<strong>Date:</strong> <?php the_date(); ?> | <strong>Author:</strong> <?php the_author(); ?>
						
						<a href="#"><img src="images/templatemo_image_01.jpg" alt="image 1" /></a>
						
						<div><?php the_content(); ?></div>
							
					    <div class="cleaner"></div>
						<div class="category">Tags: <a href="#">Freebies</a>, <a href="#">Templates</a></div> <div class="button float_r"><a href="blog_post.html" class="more">Read more</a></div>
						<div class="cleaner"></div>

					</div>
				
        
        <div class="cleaner_h40"><!-- a spacing between 2 posts --></div>
        
    
	</div>
    
    
    
    

	<div class="cleaner"></div>
</div> <!-- end of content wrapper -->


<?php get_footer(); ?>