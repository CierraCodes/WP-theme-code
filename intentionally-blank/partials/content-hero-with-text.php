<?php
    	$section_id = get_sub_field('section_id_hero');
        $heroImage 	= get_sub_field('hero_image');
        $heroText 	= get_sub_field('hero_text');
        $heroDevice = get_sub_field('device_image');
	 ?>

<section id="<?php if( $section_id ) echo $section_id; ?>" class="hero-with-text has-bg" style="background-image: url(<?php echo $heroImage['url'] ?>), linear-gradient(to bottom, rgba(68, 80, 100, 0.8) 0%, rgba(68, 80, 100, 0) 75%);"  >
	<div class="container-fluid will_animate">	
        <div class="hero-title-holder fade_in_left">
            <?php echo $heroText ?>
        </div>
    <?php if( $heroDevice ) : ?>
        <div class="hero-device-holder" style="background-image: url(<?php echo    $heroDevice['url']; ?>);" >
            
        </div>
    <?php endif;?>
    <div class="scroll-icon-holder">
			<icon class="fa fa-arrow-down"><a href="#arrow-destination"></a></icon>
	</div>
    </div>
</section>
