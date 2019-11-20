<?php 
	/*
	Template Name: Лендинг для главной
	*/
?>
<?php get_header(); ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
		<?php the_post(); ?>
			
					<div class="post_section"><span class="bottom"></span>
        
						<span class="comment"><a href="blog_post.html">65</a></span>
						<?php the_post(); 
						/* Надежнее зарегать зону в functions.php */
							wp_nav_menu([
								'menu' 			 => 12,
								'conteiner'      => null,
								'items_wrap'     => '<ul>%3$s</ul>',
							]); 
						?>
						<h2><?php the_title(); ?><?php the_post_thumbnail(); ?></h2>
						
						<section id = "app">
							<h2>Оставить заявку</h2>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
						</section>
						<section id = "text">
							<h2>Текст</h2>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
						</section>
						<section id = "about">
							<h2>О товаре</h2>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
							<p>Текст ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
						</section>
						<section id = "reviews">
							
							<?php $posts = homework1_show_reviews() ?>
							<h2>Отзывы</h2>
							<div class="reviews-box owl-carousel owl-theme">
								<?php foreach($posts as $post): ?>
									<div class="reviewItem">
										<div class="reviewItem__title"><?php echo $post->post_title; ?></div>
										<div class="reviewItem__content"><?php echo $post->post_content; ?></div>
											
										
									</div>
								<?php endforeach; ?>
							</div>
						</section>
					</div>
				
        
        <div class="cleaner_h40"><!-- a spacing between 2 posts --></div>
        
    
	</div>
    
    
    
    

	<div class="cleaner"></div>
</div> <!-- end of content wrapper -->


<?php get_footer(); ?>