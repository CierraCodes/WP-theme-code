<?php
    	$section_id = get_sub_field('section_id');
    	$title = get_sub_field('title');
    	$subtitle = get_sub_field('subtitle');
    	$letter = get_sub_field('letter');

	 ?>

<section id="<?php if( $section_id ) echo $section_id; ?>" class="letter-content-holder will_animate">
	<div class="container-fluid fade_in_left">
        <h1><?php echo $title?></h1>
        <h2><?php echo $subtitle?></h2>	
        <div class="letter-holder">
            <?php echo $letter?>
        </div>
    </div>
</section>



