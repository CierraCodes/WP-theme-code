<?php get_template_part('header'); ?>

<?php

    $vidorImg = get_field('video_or_image');
    $staticImage = get_field('static_image');
    $csVideo = get_field('hero_image');


    $csTitle = get_field('client_name');
    $csSubTitle = get_field('brand_type');
    $details = get_field('description');
    $csSubTitleTwo = get_field('details');
    $client = get_field('client_heading');
    $clients = get_field('client_name');
    $location = get_field('location_heading');
    $city = get_field('location');
    $involvement = get_field('involvement_heading');
    $services = get_field('services');

    $idlink1 = get_field('icon_id_link_1');
    $idlink2 = get_field('icon_id_link_2');
    $idlink3 = get_field('icon_id_link_3');
    $idlink4 = get_field('icon_id_link_4');
    $logo = get_field('logo');
    $secondlogo = get_field('second_logo');
    $bgImg = get_field('bg-img');
    $imgLeft1 = get_field('img-left1');
    $txtRight1 = get_field('txt-right1');
    $imgLeft2 = get_field('img-left2');
    $txtRight2 = get_field('txt-right2');
   


    $fullbg = get_field('full_bg');
    $txtMiddle = get_field('txt_middle');
    $csBtn = get_field('cs_button');
    $imgLeft3 = get_field('img_right3');
    $txtRight3 = get_field('txt_right3');
?>

<?php 
        if( $vidorImg == 'video' ) {

    ?>
<section class='cs-single-page-hero'>
    <video class="case-video" autoplay muted playsinline loop width='100%'>
        <source src="<?php echo $csVideo?>" type="video/mp4">
    </video> 
    <div class="scroll-icon-holder">
			
			<icon class="fa fa-arrow-down"><a href="#arrow-destination"></a></icon>
		</div>
</section>

<?php 

} 
?>


<?php 
        if( $vidorImg == 'image' ) {

    ?>

<section style="background-image: url(<?php echo $staticImage['url'] ?>);"  class="hero">
<div class="scroll-icon-holder">
			
			<icon class="fa fa-arrow-down"><a href="#arrow-destination"></a></icon>
		</div>
</section>
<?php 

} 
?>



<div class='single-case-study main-bg' id='arrow-destination'>
    <div class="case-info-start">
        <div class="container-fluid  will_animate">
            <div class="case-info-top will_animate">
                <div class='case-info-top-left fade_in_left'>
                    <h1><?php echo $csTitle?></h1>
                    <h5><?php echo $csSubTitle?></h5>
                </div>
                <div class="case-info-top-right fade_in_left">
                    <p><?php echo $details?></p>
                </div>
            </div>
            <hr class='scale_in'>
            <div class="case-info-bottom will_animate">
                <div class='case-info-bottom-left fade_in_left'>
                    <h1><?php echo $csSubTitleTwo?></h1>
                </div>
               <div class='case-info-bottom-right fade_in_left'>
                   <div class='case-info-bottom-right-one'>
                        <h1><?php echo $client?></h1>
                        <p><?php echo $clients?></p>
                        <h1><?php echo $location?></h1>
                        <p><?php echo $city?></p>
                   </div>
                   <div class='case-info-bottom-right-two'>
                        <h1><?php echo $involvement?></h1>
                        <p><?php echo $services?></p>
                   </div>

               </div>
            </div>
        </div>
    </div>
    <div class="case-info-middle">
        <div class="container-fluid ">
        
            <div class="cs-logo-holder will_animate">
                <div class='cs-first-img fade_in_left <?php if( $secondlogo ) : ?>second-logo-there<?php endif?>' style="background-image: url(<?php echo $logo['url'] ?>);">
                
                 </div>
                <?php if( $secondlogo ) : ?> 
                <hr > 
                <div class='cs-second-img fade_in_left' style="background-image: url(<?php echo $secondlogo['url'] ?>);">
                
                </div>
                <?php endif; ?>
            </div>
            <div class="cs-img-holder " style="background-image: url(<?php echo $bgImg['url'] ?>);">
                
            </div>
            <div class="cs-icon-holder will_animate">
                <div class="cs-icons ">
                   <?php 
				$i = 0;
                if( have_rows('cs-icons') ) :
                while( have_rows('cs-icons') ) : the_row();
                $icon_image = get_sub_field('cs-icon-img');
                $icon_txt = get_sub_field('cs-icon-txt');
            ?>
                    <div class="cs-icon fade_in_left cs-icon-<?php echo $i?>">
                    <a href="#<?php echo $icon_txt?>"></a>
                        <img src='<?php echo $icon_image['url']?>'/>
                       <p><?php echo $icon_txt?></p>
                    </div>
               
			<?php $i++; endwhile; endif; ?> 
                </div>
                <div class="cs-content-one cs-content will_animate" id='<?php echo $idlink1?>'>
                    <div class="img-left-1 fade_in_left">
                        <img src="<?php echo $imgLeft1['url']?>" alt="">
                    </div>
                    <div class="txt-right-1 fade_in_left">
                       <?php echo $txtRight1?>
                    </div>
                </div>
                <div class="cs-content-two cs-content will_animate"  id='<?php echo $idlink2?>'> 
                    <div class="img-left-2 fade_in_left">
                    <img src="<?php echo $imgLeft2['url']?>" alt="">
                    </div>
                    <div class="txt-right-2  fade_in_left">
                    <?php echo $txtRight2?>
                    </div>
                </div>
            </div>
              
        </div>
    </div>
    <div class="case-info-end ">
        <div class="banner-img-holder will_animate fade_in_left" style="background-image: url(<?php echo $fullbg['url'] ?>);" >

        </div>
        <div class="container-fluid ">
            <div class="cs-content-three cs-content will_animate fade_in_left" id='<?php echo $idlink3?>' >
                    <?php echo $txtMiddle ?>
                    <a href="<?php echo $csBtn['url']?>" class='global-cta-btn'><?php echo $csBtn['title']?></a>
            </div>
            <div class="cs-stats will_animate">
                     <?php 
				$i = 0;
                if( have_rows('cs_stats') ) :
                while( have_rows('cs_stats') ) : the_row();
                $percentage = get_sub_field('percentage');
                $desc = get_sub_field('description');
                    
                ?>
                    <div class="stat fade_in_left">
                        <h2><?php echo $percentage?></h2>
                        <p><?php echo $desc?></p>
                    </div>
            
               
			<?php $i++; endwhile; endif; ?>
            </div>
            <div class="cs-content-four cs-content will_animate" id='<?php echo $idlink4?>'>
                <div class="img-left-3 fade_in_left">
                    <img src="<?php echo $imgLeft3['url']?>" alt="">
                </div>
                <div class="txt-right-3 fade_in_left">
                    <?php echo $txtRight3?>
                </div>    
            </div>
        </div>
        </div>
    </div>
<div class="related-posts will_animate">
<div class="container-fluid fade_in_left">
<h2>Related Projects</h2>

<?php

//get the taxonomy terms of custom post type

remove_all_filters('posts_orderby');
//query arguments
$args = array(
    'post_type' => 'casestudy',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'order' => 'ASC',
    'orderby' => 'rand',
    'post__not_in' => array ($post->ID),
);

//the query
$relatedPosts = new WP_Query( $args );

//loop through query
if($relatedPosts->have_posts()){
    echo '<div class="related-holder">';
    while($relatedPosts->have_posts()){ 
        $relatedPosts->the_post();
        
?>
        <div class='related-post' style="background-image: url(<?php echo the_post_thumbnail_url();?>);"><a href="<?php the_permalink(); ?>"></a>
        <p><?php the_title(); ?></p>
    </div>
<?php
    }
    echo '</div>';
}else{
    //no posts found
}

//restore original post data
wp_reset_postdata();

?>


</div>
</div>

<?php get_template_part('footer');  ?>

