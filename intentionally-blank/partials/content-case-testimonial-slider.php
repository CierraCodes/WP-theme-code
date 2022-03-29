<?php
        $id = get_the_ID();
    	$section_id = get_field('case_section_id', $id);
$title = get_field('slider_section_title', $id)
	 ?>
   
   

<section id="<?php if( $section_id ) echo $section_id; ?>"  style="background-image: url(<?php echo $bg_img; ?>);"  class="testimonial-section-holder <?php echo $bg_color; ?> ">
	<div class="container-fluid  will_animate">	
    <h1 class='fade_in_left'><?php echo $title ?> </h1>
    <div class="row testimonial-slider-section-inner will_animate">
			<div class="testimonial-slider-holder fade_in_left">
				<?php 
					$i = 1;
					if( have_rows('case_slides') ) :
					while( have_rows('case_slides') ) : the_row();
                    $bgimg = get_sub_field('slide_background_image');
                    $image = get_sub_field('image');
					$name = get_sub_field('name');
					$title = get_sub_field('title');
					$copy = get_sub_field('copy');
					
				?>
                
                    <div class="testimonial-slide test">
                        <div class='bg-holder' style=" ">
                            <div class="testimonial-content-holder">
                            <div class='testimonial-left-side' style="background-image: url(<?php echo $image['url']; ?>);">
                                   
                                   </div>
                                   <div class="testimonial-right-side">
                                       <h2><?php echo $name ?> </h2>
                                       <h3><?php echo $title ?> </h3>
                                   </div>
                                   
                                
                            </div>
                            <p><?php echo $copy?> </p>
                        </div>
                    </div>        
                    
			
                <?php $i++; endwhile; endif; ?>
                
                


			</div>

		</div>
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
	







	  





