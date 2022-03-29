<?php
	    $id = get_the_ID();
        $bg_imgs = get_field('hero_image', $id);
	 ?>

<section style="background-image: url(<?php echo $bg_imgs ?>);"  class="hero">
	<div class="container-fluid will_animate">	
     
    </div>
</section>
