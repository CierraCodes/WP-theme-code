<?php
    	$section_id = get_sub_field('content_section_id');
        $contentSingle 	= get_sub_field('content-single');

	 ?>

<section id="<?php if( $section_id ) echo $section_id; ?>" class="single-content-holder will_animate">
	<div class="container-fluid fade_in_left">	
        <?php echo $contentSingle ?>
    </div>
</section>



