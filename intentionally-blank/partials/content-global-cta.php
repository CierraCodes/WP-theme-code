<?php
        $globalCta = get_sub_field('global_cta');
        $section_id = get_sub_field('global_cta_id');
	 ?>

<div id="<?php if( $section_id ) echo $section_id; ?>"  style="background-image: url(<?php echo $bg_img; ?>);"  class="global-cta-section  <?php echo $txt_color; ?> ">
	
    <div class='global-cta-holder will_animate '>
             <a class="global-cta-btn fade_in_left" style='background-image: url("/wp-content/uploads/button-bg.jpg");' href='<?php echo $globalCta['url']  ?>'><?php echo $globalCta['title'] ?></a>       
        </div>
   
</div>
