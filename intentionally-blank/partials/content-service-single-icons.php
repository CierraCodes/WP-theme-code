<?php
    $bubble_title = get_sub_field('section_title');
    $subtitle = get_sub_field('section_subtitle');
    $bubble_count = count( get_sub_field( 'icons' ) );
    $section_id = get_sub_field('section_id');
	 ?>

<section id="<?php if( $section_id ) echo $section_id; ?>" class=" service-single-icons will_animate <?php if( $bubble_count < 4 ) echo 'less-than-4' ?>">
	<div class="container-fluid ">	

        <h1 class='fade_in_left'><?php echo $bubble_title?></h1>
       <h2 class='fade_in_left'><?php echo $subtitle; ?></h2>
        <div class='single-service-icon-holder'>
            <?php 
                $i = 1;
                if( have_rows('icons') ) :
                while( have_rows('icons') ) : the_row();
                $icon_image = get_sub_field('icon_image');
                $icon_txt = get_sub_field('icon_text');
                $icon_subtxt = get_sub_field('icon_sub_text');

      
            ?>
               <div class="single-service-icon-content fade_in_left ss-icon-<?php echo $i?>">
                    <div class='icon-bg' style="background-image: url(<?php echo $icon_image['url'] ?>);">
                       
                    </div>
                    <span><?php echo $icon_txt ?></span>  
                    <p><?php echo $icon_subtxt; ?></p>
                </div>
            <?php $i++; endwhile; endif; ?>
        </div>
</section>
