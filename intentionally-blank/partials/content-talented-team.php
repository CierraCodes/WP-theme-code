<?php
    $pretitle = get_sub_field('pretitle');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $bottomcopy = get_sub_field('bottomcopy');
?>

<section id="<?php if( $section_id ) echo $section_id; ?>"  style="background-image: url(<?php echo $bg_img; ?>);"  class="talened-team-section has-bg <?php echo $txt_color; ?> ">
<div class="team-hr-holder">
<hr class=' talented-team-hr'> 	

</div>
<div class="container-fluid will_animate">	
        <h2  class='team-hi fade_in_left'><?php echo $pretitle?></h2>
        <h1 class='team-heading fade_in_left'><?php echo $title?></h1>
        <p  class='top-copy fade_in_left' ><?php echo $subtitle?></p>
        <div class="row story-slider-section-inner fade_in_left">  
                <div class="story-slider-holder">
                    <?php 
                        $i = 1;
                        if( have_rows('story_slides') ) :
                        while( have_rows('story_slides') ) : the_row();

                        $teamimg = get_sub_field('team_img');
                        $name = get_sub_field('name');
                        $desc = get_sub_field('job_description');

                        $iconlink1 = get_sub_field('icon_link_1');
                        $iconlink2 = get_sub_field('icon_link_2');
                        $iconlink3 = get_sub_field('icon_link_3');

                        $socialicon1 = get_sub_field('social_icon');
                        $socialicon2 = get_sub_field('social_icon_2');
                        $socialicon3 = get_sub_field('social_icon_3');
                            
                    ?>
                    
                    <div class="story-slide">
                        <div class="img-holder" style="background-image: url(<?php echo $teamimg; ?>);" >
                           
                        </div>
                        <p class="name"><?php echo $name?></p>
                        <p class="desc"><?php echo $desc?></p>
                        <div class="icon-holder">
                            <a href="<?php echo $iconlink1?>" >
                                <img src="<?php echo $socialicon1?>" alt="">
                            </a>
                            <a href="<?php echo $iconlink2?>" >
                            <img src="<?php echo $socialicon2?>" alt="">
                            </a>
                            <a href="<?php echo $iconlink3?>" >
                            <img src="<?php echo $socialicon3?>" alt="">
                            </a>
                           
                        </div>
                    </div>        
                        
                
                    <?php $i++; endwhile; endif; ?>
                    
                    


                </div>
                <p class='bottom-copy fade_in_left'><?php echo $bottomcopy?></p>    
            </div>
                 
    </div>
</section>


 
<script type='text/javascript'>
  jQuery(document).ready(function($){

        $('.story-slider-holder').slick({
            autoplay: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplaySpeed: 3500,
            dots: false,
    
        });

    });


</script> 