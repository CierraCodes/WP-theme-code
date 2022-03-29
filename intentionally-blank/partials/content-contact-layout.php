<?php
        $id = get_sub_field('id');
	    $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $bgImg = get_sub_field('background_image');
        $form = get_sub_field('form');
	 ?>

<div class="contact-layout will_animate" id='<?php echo $id?>'>
        <div class="contact-row">
            <div class="contact-left  has-bg" style="background-image: url(<?php echo $bgImg ?>), linear-gradient(to bottom, rgba(68, 80, 100, 0.8) 0%, rgba(68, 80, 100, 0) 75%);">
                    <h1 class='fade_in_left'><?php echo $title?></h1>
                    <p class='fade_in_left'><?php echo $subtitle?></p>
            </div>
            <div class="contact-right fade_in_left">
            <?php echo $form?>
                    
            </div>
        </div>
</div>
