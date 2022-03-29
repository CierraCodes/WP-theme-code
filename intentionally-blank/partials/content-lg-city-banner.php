<?php
	$section_id = get_sub_field('lg_bnr_section_id');
	$bg_img     = get_sub_field('lg_bnr_bg_image');
	$bg_color 	= get_sub_field('lg_bnr_bg_color');
	$devicebg = get_sub_field('device_bg');
	$title = get_sub_field('title');

	$insta = get_sub_field('insta');
	$linkedIn = get_sub_field('linkedin');
	$fbimg = get_sub_field('f_icon');

	$instalink = get_sub_field('insta_link');
	$linkedInlink = get_sub_field('linked_link');
	$flink = get_sub_field('f_link');
	 ?>

<section id="<?php if( $section_id ) echo $section_id; ?>"  style="background-image: url(<?php echo $bg_img; ?>), linear-gradient(to bottom, rgba(68, 80, 100, 0.8) 0%, rgba(68, 80, 100, 0) 75%);"  class=" lg-bnr-city has-bg <?php echo $bg_color; ?> ">
	<div class="container-fluid will_animate">	
		<div class='social-hero-wrapper'>
			<div class="social-hero-holder">
				
				<a class='fade_in_left' href="<?php echo $instalink?>"><img src="<?php echo $insta['url']?>"></a>
				
				<a class='fade_in_left' href="<?php echo $linkedInlink?>"><img src="<?php echo $linkedIn['url']?>"></a>

				<a  class='fade_in_left' href="<?php echo $flink?>"><img src="<?php echo $fbimg['url']?>"></a>
			</div>
		</div>
		<div class='device-holder fade_in_left' style="background-image: url(<?php echo $devicebg['url']; ?>);">
			<!-- <img src='<?php if( $devicebg ) echo $devicebg['url']; ?>'/> -->
		</div>
		<div class='left-menu fade_in_left'>
			<div class='left-menu-icon'>
				<img src="/wp-content/uploads/new-icon-white-sm.png" alt="">
			</div>
			<div class='left-menu-content'>
				<?php 
					if( have_rows('menu_links') ) :
					while( have_rows('menu_links') ) : the_row();
					$link = get_sub_field('link');
				?>
					<li><a href='<?php echo $link['url']?>' ><?php echo $link['title']?></a></li>
				<?php endwhile; endif; ?>
			</div>
		
		</div>
		
		<div class="city-hero-title-holder">
		<?php if( $title ) : ?>
			<h1 class='fade_in_left'><?php echo $title?></h1>		
			<?php endif;?>
		</div>	
		<div class="scroll-icon-holder fade_in_up" >
			
			<icon class="fa fa-arrow-down"><a href="#arrow-destination"></a></icon>
		</div>
		<div class="city-with-icons-holder fade_in_up">
            <?php 
				$i = 0;
                if( have_rows('city_icons') ) :
                while( have_rows('city_icons') ) : the_row();
                $cityBg = get_sub_field('city_icon');
                $city = get_sub_field('city');
				
            ?>
	
			<div class="city-with-icon city-with-icon-<?php echo $i?> fade_in_left <?php echo  $city['title']?>">
				<a href="<?php echo $city['url']?>"></a>
				<img src="<?php echo $cityBg['url']?>">
			</div>
			
			<?php $i++; endwhile; endif; ?>
		</div>
		
	</div>
</section>
