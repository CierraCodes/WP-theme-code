<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">

<?php

	wp_head(); ?> 

<?php 
	
	$logo = get_field('logo_new', 'option');
	$logoLink = get_field('logo_links', 'option');
	$headerLink = get_field('header_logo_link', 'option');
?>

</head>

<body <?php body_class(); ?>>

<header>  
	<div class="header-logo">
		<a href="<?php echo $headerLink['url']; ?>" class='header-logo-link'></a>
		<img class='the_header_logo' src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
	</div>

<section id="main-menu" class="main-menu">
	
		
			<div class=" menu-container">
				<?php 
					wp_nav_menu( 
						array(
							'container'      => false,
							'menu_class'     => 'menu-list',
							'theme_location' => 'primary-menu'
						)
					); ?>
				<div class="social-media-holder">
			 <?php 
				$i = 0;
                if( have_rows('social_media_icons', 'option') ) :
                while( have_rows('social_media_icons', 'option') ) : the_row();
                $icon_image = get_sub_field('icon');
                $icon_lnk = get_sub_field('icon_link');
				
            ?>

            <div class="header-social-icon  header-social-icon-<?php echo $i?>">
				<a href="<?php echo $icon_lnk['url'] ?>">
				</a>
				<img src="<?php echo $icon_image['url']?>" alt="">
			</div>
               
			<?php $i++; endwhile; endif; ?>
		</div>	
			</div>
		
		
	
</section>
<div class="menu-control">

	<div id="menu-trigger">
		<span class="sm-line line"></span>
		<span class="md-line line"></span>
		<span class="sm-line line"></span>
	</div>
	
</div>
</header>

