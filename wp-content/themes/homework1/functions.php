<?php 
	add_action('wp_enqueue_scripts', 'homework1_media');
	add_action('after_setup_theme', 'homework1_after_setup');
	add_action('widgets_init', 'homework1_widgets');
	
	add_action('init', 'homework1_post_types');
	
	add_filter('document_title_parts', function($parts){
		//$parts['tagline'] .= '!';
		return $parts;
	});
	
	add_filter('document_title_separator', function($sep){
		return '|';
	});
	
	add_filter('widget_text', 'do_shortcode');
	add_shortcode('homework1_recent', 'homework1_recent');
	
	add_shortcode('phone', 'show_phone');
		function show_phone(){
			return '+066 331 1313 131';
		}
	
	add_filter('pre_get_document_title', function($t){
		if(is_single()){
			$t = CFS()->get('tag_title');
		}
		return $t;
	});
	
	add_filter('the_content', function($content){
		return str_replace ('-[]-', '!!!', $content);
	});
	
	function homework1_media(){
		wp_enqueue_style('homework1-owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
		wp_enqueue_style('homework1-owl1', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
		wp_enqueue_style('homework1-main', get_stylesheet_uri());
		
		wp_enqueue_script('homework1-script-main', get_template_directory_uri() . '/assets/js/jquery.min.js');
		wp_enqueue_script('homework1-script-mainowl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
		wp_enqueue_script('homework1-script-main1', get_template_directory_uri() . '/assets/js/piroBox.1_2.js');
		wp_enqueue_script('homework1-script-main2', get_template_directory_uri() . '/assets/js/piroBox.1_2_min.js');
	}
	
	function homework1_after_setup(){
		register_nav_menu('Top', 'Для шапки');
		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
		add_theme_support('post-formats', array('aside', 'quote'));
	}	
	
	function homework1_widgets (){
		register_sidebar ([
			'name' 		    => 'Sidebar right',
			'id'   		    => 'sidebar-right',
			'description'   => 'Правая колонка',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n",
			'before_title'  => '<h4 class="widgettitle">',
			'after_title'   => "</h4>\n"
		]);
		
		register_sidebar ([
			'name' 		    => 'Sidebar right2',
			'id'   		    => 'sidebar-right2',
			'description'   => 'Правая колонка2',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n"
		]);
	}
	
	function homework1_post_types(){
		register_post_type('reviews', [
			'labels' => [
				'name'               => 'Отзывы', // основное название для типа записи
				'singular_name'      => 'Отзыв', // название для одной записи этого типа
				'add_new'            => 'Добавить новый', // для добавления новой записи
				'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
				'new_item'           => 'Новый отзыв', // текст новой записи
				'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
				'search_items'       => 'Искать отзывы', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Отзывы', // название меню
			],
			'public'              => true,
			'menu_position'       => 25,
			'menu_icon'           => 'dashicons-format-quote', 
			'hierarchical'        => false,
			'supports'            => array('title', 'editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		]);
	}
	
	function homework1_show_reviews(){
		$args = array(
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'reviews'
		);
		
		return get_posts($args);	
	}
	
	function homework1_recent($atts){
		$atts = shortcode_atts(array(
			'cnt' => 7
		), $atts );
		
		$str = '';
		
		$args = array(
			'numberposts' => $atts['cnt'],
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'post',
		);
		
		$posts = get_posts($args);
		
		global $post;
		
		foreach( $posts as $post ){
			//$str .= "<div>{$post->post_title}</div>"; // Список постов
			setup_postdata($post);
			
			$link  = get_the_permalink();
			$title = get_the_title();
			$dt    = get_the_date();
			$intro = CFS()->get('intro');
			
			//$str .= get_the_permalink();
			
			$str .= "<div>
						<div><em>$dt</em></div>
						<div><strong>$title</strong></div>
						<div>$intro</div>
						<a href=\"$link\">Далее...</a>
					</div>";
		}

		wp_reset_postdata(); // сброс
		
		return $str;
		
		
	}	
	/*function homework1_get_title($title){
		return str_replace('&#8212', '|', '$title');
	}*/
	

?>	