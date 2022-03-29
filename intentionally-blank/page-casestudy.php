<?php
	/*Template Name: Case Studies*/
	
	$project_args = array(
		'post_type' => 'casestudy'
	);
	$proj_query = new WP_Query( $project_args );
	get_template_part('header');

	$casesubtitle = get_field('sub_title');
	$bottomTxt = get_field('bottom_text');
	$bottomLink = get_field('bottom_link');


	$cschoice = get_field('video_or_image');
	$csImage = get_field('hero_image');
	$csVideo = get_field('cs_video');
	
?>

<main id="main-content-case">
<?php 
        if( $cschoice == 'video' ) {

    ?>
<section class='cs-landing-page-hero'>
	<video class="case-video" autoplay muted loop playsinline width='100%'>
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
        if( $cschoice == 'image' ) {

    ?>

<section style="background-image: url(<?php echo $csImage['url'] ?>), linear-gradient(to bottom, rgba(68, 80, 100, 0.8) 0%, rgba(68, 80, 100, 0) 30%);"  class="hero has-bg">
	<div class="container-fluid will_animate">	
     
    </div>
</section>
<?php 

} 
?>


<div class='main-bg' id='arrow-destination'>
	<div class="cs-title-holder will_animate">
	<h1 class=' fade_in_left' > <?php echo the_title(); ?> </h1>
	<p class=' fade_in_left' ><?php echo $casesubtitle?></p>
	</div>
	<div class="case-study-holder will_animate">
		<div class="container-fluid fade_in_left">	
				<?php 
					$i = 1;
					if( $proj_query->have_posts() ) : 
					while( $proj_query->have_posts() ) : $proj_query->the_post();
					$img = get_the_post_thumbnail_url();
					$img2 = get_field('fullcolorImg');
					$postLogo = get_field('logo')
				?>
				<div class="case-study-item case-study-item-<?php echo $i?>" style="background-image: url( <?php echo $img; ?> );">
					<a class="case-link case-overlay-1" href="<?php the_permalink(); ?>" >
					
						<div class="case-title"><p><?php the_title(); ?></p></div>
					</a>
					<div class="full-color-holder" style="background-image: url( <?php echo $img2['url']; ?> );">
						
					</div>
					</div>
				<?php $i++; endwhile; wp_reset_postdata(); endif; ?>
					</div>
					</div>

<?php 

 	get_template_part('partials/content', 'case-testimonial-slider');

?>

            </div>

<div class="like-what-you-see"> 
	<div class="container-fluid will_animate">
		<div class="like-what-you-see-left fade_in_left">
				<h1><?php echo $bottomTxt?></h1>	
		</div>
		<div class="like-what-you-see-right fade_in_left">
					<a href="<?php echo $bottomLink['url'] ?>" class="global-cta-btn" style='background-image: url("/wp-content/uploads/button-bg.jpg");'><?php echo $bottomLink['title'] ?></a>
		</div>
	</div>
</div>
			</main>
<?php get_template_part('footer'); ?>



