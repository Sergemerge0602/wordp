<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>"/>
<meta name="keywords" content="clean blog template, html css layout" />
<meta name="description" content="Clean Blog Template is provided by templatemo.com" />

<?php wp_head(); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 1600
        });
    });
</script>

</head>
<body <?php body_class(); ?>>

<div id="templatemo_wrapper">

	<div id="templatemo_menu">
    <?php 
		wp_nav_menu([
			'theme_location' => 'topmenu',
			'container'      => null,
			'items_wrap'     => '<ul>%3$s</ul>'
		]); 
	?>        
    
    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <a href="<?php echo home_url(); ?>" class="logo" target="_parent"><?php bloginfo('name');?><span><?php bloginfo('description');?></span></a>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
        