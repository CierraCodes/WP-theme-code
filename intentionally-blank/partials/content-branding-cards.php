<?php

    $leftorright = get_sub_field('title_to_the_left_or_center');
    $title = get_sub_field('main_title');
    $subtitle = get_sub_field('subtitle');

	$section_id = get_sub_field('branding_cards_section_id');
	$bg_img     = get_sub_field('branding_cards_bg_image');
	$txt_color 	= get_sub_field('branding_cards_txt_color');
    $branding_cta = get_sub_field('branding_cta');
    $branding_bg = get_sub_field('branding_bg_color');

    $button_choice = get_sub_field('button_choice');
    $button = get_sub_field('button');
    $tagline_choice = get_sub_field('tagline_choice');

    $tagline = get_sub_field('tagline');

	 ?>

<section id="<?php if( $section_id ) echo $section_id; ?>"  style="background-image: url(<?php echo $bg_img; ?>);"  class="branding-cards-section has-bg <?php echo $txt_color; ?> ">
	

<div class="container-fluid">	
<div class='branding-cards-txt-holder will_animate <?php echo $leftorright ?>'>
            <div class='hr-holder fade_in_left'>
            <hr>
            </div>
            <div class="sub-text-holder fade_in_left">
                <h1><?php echo $title ?></h1>
                <p><?php echo $subtitle ?></p>
            </div>
        </div>
		
        <div class='branding-cards-holder  will_animate <?php echo $branding_bg; ?> '>
            <?php 
                $i = 1;
                if( have_rows('branding_cards') ) :
                while( have_rows('branding_cards') ) : the_row();
                $pageto = get_sub_field('page_link');
                $icon_image = get_sub_field('icon');
                $icon_txt = get_sub_field('title');
                $icon_content = get_sub_field('card_contents');
            ?>
     
               <div class="branding-cards fade_in_left branding-card-<?php echo $i?>">
            
                         <a href='<?php echo $pageto?>'></a>
                        <div class='branding-header'>
                            <img src="<?php echo $icon_image['url'] ?>" alt="">
                            <h3><?php echo $icon_txt ?></h3>
                        </div>  
                        <hr>
                        <div class='branding-content'>
                            <?php echo $icon_content?>
                        </div>
                </div>
            
                
            <?php $i++; endwhile; endif; ?>
                  
        </div>
        
     
        <div class='global-cta-holder will_animate '>
            <hr class=' tagline-checked-<?php echo $tagline_choice?>'> 
            <?php  if( $tagline_choice == 'checked') {  ?>
                <p class=' taglinee fade_in_left'><?php echo $tagline?></p> 
            <?php } ?> 
            <?php  if( $button_choice == 'checked') {  ?>
                <a class="global-cta-btn fade_in_left" style='background-image: url("/wp-content/uploads/button-bg.jpg");' href='<?php echo $button['url']  ?>'><?php echo $button['title'] ?></a>     
            <?php } ?>  
        </div>
    </div>
   
    
</section>



<script type='text/javascript'>



  jQuery(document).ready(function($){

    $('.branding-cards-holder').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        dots: true,
        arrows: false,
        responsive: [
            {
                    breakpoint: 767,
                    settings: 'unslick'
            }
        ]
    });

});


</script>
	