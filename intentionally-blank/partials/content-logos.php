<?php
        $leftorright = get_sub_field('title_to_the_left_or_center');
        $title = get_sub_field('main_title');
        $subtitle = get_sub_field('subtitle');

    	$section_id = get_sub_field('logos_section_id');
        $bg_img     = get_sub_field('logos_bg_image');
        $bg_color 	= get_sub_field('logos_bg_color');

        $button_choice = get_sub_field('button_choice');
        $button = get_sub_field('button');
        $tagline = get_sub_field('tagline');
   

	 ?>

<section id="<?php if( $section_id ) echo $section_id; ?>"  style="background-image: url(<?php echo $bg_img; ?>);"  class="logo-section-holder <?php echo $txt_color; ?> ">


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
        <div class="logos-holder will_animate">
            <?php 
                $i = 0;
                if( have_rows('logos') ) :
                while( have_rows('logos') ) : the_row();
                $image = get_sub_field('logo_image');
            ?>
            
            <div class="logo-image fade_in_left logo-image-<?php echo $i?>">
                <img src="<?php echo $image['url']; ?>"/>	
            </div>
            
            <?php $i++; endwhile; endif; ?>

        </div>
        <?php  if( $button_choice == 'checked') {  ?>
    <div class='global-cta-holder will_animate'>
            <p class=' taglinee fade_in_left'><?php echo $tagline?></p> 
             <a class="global-cta-btn fade_in_left" style='background-image: url("/wp-content/uploads/button-bg.jpg");' href='<?php echo $button['url']  ?>'><?php echo $button['title'] ?></a>       
        </div>

<?php } ?>
    </div>
   
</section>
