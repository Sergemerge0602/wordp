<?php 

	add_action('wp_enqueue_scripts', 'cleanblog_media');
	add_action('after_setup_theme', 'cleanblog_after_setup');
	add_action('widgets_init', 'cleanblog_widgets');
	add_action('init', 'cleanblog_post_types');
	
	add_shortcode('cleanblog_phone', 'cleanblog_phone');
	add_shortcode('cleanblog_recent', 'cleanblog_recent');
	
	add_filter('widget_text', 'do_shortcode');
	
	add_filter('pre_get_document_title', function($t){
		if(is_single()){
			$t = CFS()->get('tag_title');
		}
		return $t;
	});
	
	add_filter('document_title_separator', function($sep){
		return '|';
	});
	
	function cleanblog_media(){
		
		wp_enqueue_style('cleanblog-main', get_stylesheet_uri());
		//wp_enqueue_style('cleanblog-main1', get_template_directory_uri() . '/assets/s3slider.css');
		//wp_enqueue_style('cleanblog-main2', get_template_directory_uri() . '/assets/css_pirobox/css_page.css');
		//wp_enqueue_style('cleanblog-404', get_template_directory_uri() . '/assets/css/style.css');
		
		
		wp_enqueue_script('cleanblog-main', get_template_directory_uri() . '/assets/js/jquery.js');
		wp_enqueue_script('cleanblog-main1', get_template_directory_uri() . '/assets/js/jquery.min.js');
		wp_enqueue_script('cleanblog-main2', get_template_directory_uri() . '/assets/js/piroBox.1_2.js');
		wp_enqueue_script('cleanblog-main3', get_template_directory_uri() . '/assets/js/piroBox.1_2_min.js');
		//wp_enqueue_script('cleanblog-main4', get_template_directory_uri() . '/assets/js/s3Slider.js');
		
	}
	
	function cleanblog_after_setup(){
		
		register_nav_menu('topmenu', 'Для шапки!');
		
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-formats', array( 'aside', 'quote' ) );
		
		add_image_size( 'cleanblog-mini', 400, 150, true );
	}
	
	function cleanblog_widgets(){
		
		register_sidebar([
			'name'          => 'Sidebar Left',
			'id'            => 'sidebar-left',
			'description'   => 'Левая колонка',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n"
		]);
	}
	
	function cleanblog_phone(){
		return '+7 808 902 32 16';
	}
	
	function cleanblog_recent($atts){
		$atts = shortcode_atts(array(
			'cnt' => 5
		), $atts );
		
		$str = '';
		
		$args = array(
			'numberposts' => $atts['cnt'],
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'post'
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
			
			$str .= "<div>
						<div><em>$dt</em></div>
						<div><strong>$title</strong></div>
						<a href=\"$link\">Далее...</a>
					</div>";
		}

		wp_reset_postdata(); // сброс
		
		return $str;
		
		
	}	
	
	function cleanblog_post_types(){
		
		register_post_type('flats', [
			'labels' => array(
				'name'               => 'Квартиры', // основное название для типа записи
				'singular_name'      => 'Квартира', // название для одной записи этого типа
				'add_new'            => 'Добавить новую', // для добавления новой записи
				'add_new_item'       => 'Добавление квартиры', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование квартиры', // для редактирования типа записи
				'new_item'           => 'Новая квартира', // текст новой записи
				'view_item'          => 'Смотреть квартиру', // для просмотра записи этого типа.
				'search_items'       => 'Искать квартиры', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Квартиры', // название меню
			),
			'public'              => true,
			'menu_position'       => 25,
			'menu_icon'           => 'dashicons-category', 
			'hierarchical'        => false,
			'supports'            => array('title', 'editor', 'thumbnail'),
			'has_archive'         => true
		]);
		
		register_taxonomy('city', array('flats'), array(
			'labels'                => array(
				'name'              => 'Города',
				'singular_name'     => 'Город',
				'search_items'      => 'Найти город',
				'all_items'         => 'Все города',
				'view_item '        => 'Посмотреть город',
				'edit_item'         => 'Редактировать город',
				'update_item'       => 'Обновить город',
				'add_new_item'      => 'Добавить новый город',
				'new_item_name'     => 'Добавить новый',
				'menu_name'         => 'Города',
			),
			'description'           => '', // описание таксономии
			'public'                => true,
			'hierarchical'          => false
		));
	}	
?>	