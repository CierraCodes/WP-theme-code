<?php get_template_part('header'); ?>

<?php

    $heroTitle = get_field('hero_title');
    $heroBg = get_field('hero_bg');
    $heroDevice = get_field('hero_device');
    $icon_choice = get_field('have_icons');

    
    $title = get_field('title');
    $subTitle = get_field('sub_title');
    $copy = get_field('copy');

    $iconTitle = get_field('icon_title');
    $cta = get_field('service_cta');

    $imgLeft = get_field('image_left');
    $copyLeft = get_field('copy_left');
    $imgRight = get_field('image_right');
    $copyRight = get_field('copy_right');

   
?>

<section style="background-image: url(<?php echo $heroBg['url'] ?>), linear-gradient(to bottom, rgba(68, 80, 100, 0.8) 0%, rgba(68, 80, 100, 0) 75%);"  class="service-hero" id='services-heros'>
	<div class="container-fluid will_animate" <?php if( $heroDevice ) : ?> style="background-image: url(<?php echo    $heroDevice['url']; ?>);"  <?php endif;?>>
    <div class="hero-title-holder fade_in_left">
         <?php echo $heroTitle ?>
          <?php  if( $icon_choice == 'checked') {  ?>
               <div class="service-header-icon-holder">
	
	
            <?php 
				$i = 0;
                if( have_rows('icons_with_text') ) :
                while( have_rows('icons_with_text') ) : the_row();
                $headericon = get_sub_field('header_icon');
                $headericontxt = get_sub_field('header_icon_txt');
                    
            ?>
	
			<div class="service-header-icon service-header-icon-<?php echo $i?> ">
				<img src="<?php echo $headericon['url']?>" alt="">
                <span><?php echo $headericontxt?></span>
			</div>
			

 
			<?php $i++; endwhile; endif; ?>

		</div>
            <?php } ?>  
    </div>	
    
        
    <div class="scroll-icon-holder" >
			
			<icon class="fa fa-arrow-down"><a href="#arrow-destination"></a></icon>
		</div>
    </div>
</section>

<div class="single-service-page main-bg" id='arrow-destination'>
    <section class='single-service-top'>
        <div class="container-fluid">
            <div class="service-content-top">
                  
                    <h1><?php echo $title?></h1>
                    <h2><?php echo $subTitle?></h2>
                    <div class="service-content-copy-top">
                        <?php echo $copy?>
                    </div>
            </div>
            <div class="service-icons-holder">
                <div class="service-icons"> 
                    <h2><?php echo $iconTitle?></h2>
                    <div class="icon-container">
                    <?php 
                        $i = 0;
                        $numrows = count( get_field( 'icons' ) );
                        if( have_rows('icons') ) :
                        while( have_rows('icons') ) : the_row();
                        $iconImg = get_sub_field('icon_image');
                        $iconContent = get_sub_field('icon_content');
                        
                    ?>

                    <div class="service-icon service-icon-<?php echo $i;  ?><?php if( $numrows > 3 ) : ?> <?php echo "four-service-cons" ?> <?php endif;?> ">
                        <img src="<?php echo $iconImg['url']?>" alt="">
                        <p><?php echo $iconContent?></p>
                    </div>
                    
                    <?php $i++; endwhile; endif; ?>
                    </div>
                </div>
            
            </div>
            <div class="global-cta-holder">
            <a href="<?php echo $cta['url']?>" class="global-cta-btn"><?php echo $cta['title']?></a>
            </div>

        
        </div> 
    </section>

    <section class='single-service-bottom'>
        <div class="container-fluid">
            <div class="service-content-bottom">
                <div class="service-content-row service-content-row-1">
                    <div class="service-content-img" style="background-image: url(<?php echo $imgLeft['url']; ?>);" >
                        <!-- <img src="<?php echo $imgLeft['url']?>" alt="">     -->
                    </div>  
                    <div class="service-content-copy">
                        <?php echo $copyRight ?>
                    </div>  
                </div>        
                <div class="service-content-row service-content-row-2">
                    <div class="service-content-copy">
                        <?php echo $copyLeft?>
                    </div> 
                    <div class="service-content-img" style="background-image: url(<?php echo $imgRight['url']; ?>);">
                        <!-- <img src="<?php echo $imgRight['url']?>" alt="">     -->
                    </div>  
                </div>        
            </div>
        </div>
    </section>
</div>

 

<script type='text/javascript'>



  jQuery(document).ready(function($){

    $('.icon-container').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        dots: true,
        arrows: false,
        responsive: [
            {
                    breakpoint: 767,
                    settings: 'unslick'
            }
        ]
    });

});


</script>
	
<?php get_template_part('footer');  ?>

