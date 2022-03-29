<?php
    	$section_id = get_sub_field('section_id');
        $contentLeft 	= get_sub_field('content_left');
        $contentRight	= get_sub_field('content_right');
	 ?>

<section id="<?php if( $section_id ) echo $section_id; ?>" class="double-content-holder">
	<div class="container-fluid will_animate">	
        <div class="content-left fade_in_left">
            <?php echo $contentLeft ?>
        </div>
        <hr>
        <div class="content-right fade_in_left">
        <?php echo $contentRight ?>
        </div>
    </div>
</section>
