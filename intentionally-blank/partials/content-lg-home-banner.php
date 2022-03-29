<?php
	$section_id = get_sub_field('lg_bnr_section_id');
	$bg_img     = get_sub_field('lg_bnr_bg_image');
	$bg_color 	= get_sub_field('lg_bnr_bg_color');
	$logoh = get_sub_field('logoh');

	$nyImg = get_sub_field('ny_bg');
	$miamiImg = get_sub_field('miami_bg');
	$atlantaImg = get_sub_field('atlanta_bg');
	$laImg = get_sub_field('la_bg');

	 ?>

<section id="landing-page-home<?php if( $section_id ) echo $section_id; ?>"  style="background-image: url(<?php if( $bg_img ) echo $bg_img['url']; ?>);"  class=" lg-bnr-home <?php echo $bg_color; ?> ">
	<div class="container-fluid will_animate">



		<div class="city-holder fade_in_left">
	
	
            <?php 
				$i = 0;
                if( have_rows('city_icons') ) :
                while( have_rows('city_icons') ) : the_row();
                $icon_image = get_sub_field('city_icon');
                $icon_txt = get_sub_field('city_name');
                $icon_bg = get_sub_field('city_bg');

				
            ?>
               
			<div class="lg-bnr-city-icon lg-bnr-city-icon-<?php echo $i?> <?php echo $icon_txt['title']?>">
				<a href='<?php echo $icon_txt['url']; ?>'>
				<h1><?php echo $icon_txt['title']; ?></h1> 
					<img class='hover-one' src="<?php echo $icon_image['url']; ?>"/>
					
				</a>
				
			</div>
			

 
			<?php $i++; endwhile; endif; ?>

		</div>
		<div class="logo-holder-hp fade_in_left">
			<img src='<?php echo $logoh?>'/>
		</div>
		<div class="slogan-holder fade_in_left">

			<p class='slogan-show'></p>

		
            <?php 
				$i = 0;
                if( have_rows('slogans') ) :
                while( have_rows('slogans') ) : the_row();
                $slogan = get_sub_field('slogan');
				
            ?>	
	
		
				<p class='slogan-hide slogan-hide-<?php echo $i?>'><?php echo $slogan ?></p>
			

 
			<?php $i++; endwhile; endif; ?>

	
			
		</div>
	</div>
</section>

<script type='text/javascript'>




const slogan1 = $('.slogan-hide-0').html();
const slogan2 = $('.slogan-hide-1').html();
const slogan3 =  $('.slogan-hide-2').html();

jQuery(document).ready(function($){

 
var typed = new Typed('.slogan-show', {
    strings: [slogan1, slogan2, slogan3],
    typeSpeed: 70,
    loop: true,
    backDelay: 3000,
    fadeOut: true,
    smartBackspace: false,
    showCursor: false

});

});




</script>



