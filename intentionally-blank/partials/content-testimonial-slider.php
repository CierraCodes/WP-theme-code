<?php

$leftorright = get_sub_field('title_to_the_left_or_center');
    $title = get_sub_field('main_title');
    $subtitle = get_sub_field('subtitle');

    	$section_id = get_sub_field('test_slider_section_id');
        $bg_img     = get_sub_field('test_slider_bg_image');
        $bg_color 	= get_sub_field('test_slider_bg_color');

        $button_choice = get_sub_field('button_choice');
        $button = get_sub_field('button');

	 ?>

<section id="<?php if( $section_id ) echo $section_id; ?>"  style="background-image: url(<?php echo $bg_img; ?>);"  class="testimonial-section-holder  ">
	

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
    <div class="row testimonial-slider-section-inner will_animate <?php echo $bg_color; ?>">
			<div class="testimonial-slider-holder fade_in_left">
				<?php 
					$i = 1;
					if( have_rows('test_slider_slides') ) :
					while( have_rows('test_slider_slides') ) : the_row();
                    $bgimg = get_sub_field('test_slide_bg_image');
                    $image = get_sub_field('test_slide_image');
					$name = get_sub_field('test_slide_name');
					$title = get_sub_field('test_slide_title');
					$copy = get_sub_field('test_slide_copy');
					
				?>
                
                    <div class="testimonial-slide">
                        <div class='bg-holder' style="">
                            <div class="testimonial-content-holder">
                                <div class='testimonial-left-side' style="background-image: url(<?php echo $image['url']; ?>);">
                                   
                                </div>
                                <div class="testimonial-right-side">
                                    <h2><?php echo $name ?> </h2>
                                    <h3><?php echo $title ?> </h3>
                                    <p><?php echo $copy?> </p>
                                </div>
                                
                            </div>
                          
                        </div>
                    </div>        
                    
			
                <?php $i++; endwhile; endif; ?>
                
                


			</div>

		</div>
        <?php  if( $button_choice == 'checked') {  ?>
    <div class='global-cta-holder will_animate'>
             <a class="global-cta-btn fade_in_left" style='background-image: url("/wp-content/uploads/button-bg.jpg");' href='<?php echo $button['url']  ?>'><?php echo $button['title'] ?></a>       
        </div>

<?php } ?>
    </div>
   
</section>


<script type='text/javascript'>
  jQuery(document).ready(function($){

    $('.testimonial-slider-holder').slick({
 
      autoplay: true,
      autoplaySpeed: 3500,
      dots: true,
      fade: true,
  cssEase: 'linear'
    });

});


</script>
	







	  





