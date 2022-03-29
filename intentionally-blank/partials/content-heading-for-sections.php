<?php
    $titlebg = get_sub_field('title_bg');
    $title = get_sub_field('title');
    $titleSub = get_sub_field('sub_title');
    $section_id = get_sub_field('title_section_id')
	 ?>

<section id="<?php if( $section_id ) echo $section_id; ?>"  style="background-image: url(<?php echo $bg_img; ?>);"  class="heading-for-section has-bg <?php echo $txt_color; ?> ">
	<div class="container-fluid will_animate">	
		<div class='branding-cards-txt-holder fade_in_left'>
            <div class='hr-holder'>
            <hr>
            </div>
            <div class="sub-text-holder fade_in_left">
                <h1><?php echo $title ?></h1>
                <p><?php echo $titleSub ?></p>
            </div>
            
             
        </div>

        
    </div>
</section>
