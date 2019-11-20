<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> />
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="keywords" content="free css templates, tripod, blog, theme" />
<meta name="description" content="Tripod - free CSS template provided by templatemo.com" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    	
        <div id="site_title">
			<div id="color_logo">
				<a href="<?php echo home_url() ?>" class="logo"><?php bloginfo('name'); ?></a>
            </div>
        </div>
        
        <div id="templatemo_rss">
            <a href="" target="_parent">SUBSCRIBE<br /><span>OUR FEED</span></a>
    	</div>
    
    </div> <!-- end of header -->
    
    <div id="templatemo_menu">
	<?php wp_nav_menu([
			'theme_location' => 'top',
			'conteiner'      => null,
			'items_wrap'     => '<ul>%3$s</ul>',
		]); 
	?>  	
    </div> <!-- end of templatemo_menu -->

</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">