<?php 

	/*Template Name: Services*/
get_template_part('header'); ?>

<main id="main-content" class='page-serv'>
	
<?php 
//Start looping through sections
if( is_single() ){
	get_template_part('partials/content', 'single');
} else{
		if( have_rows('sections') ) :	
		while( have_rows('sections') ) : the_row();
		
		//Large Banner Layout
		if( get_row_layout() == 'lg_home_banner' ) { get_template_part('partials/content', 'lg-home-banner'); }


		if( get_row_layout() == 'lg_city_banner' ) { get_template_part('partials/content', 'lg-city-banner'); }

		if( get_row_layout() == 'hero_case' ) { get_template_part('partials/content', 'hero'); }

		if( get_row_layout() == 'hero_with_text' ) { get_template_part('partials/content', 'hero-with-text'); }

		if( get_row_layout() == 'hero_video_or_image' ) { get_template_part('partials/content', 'heroorvideo'); }

		
		
	
		
		endwhile; 
	else: 
		the_content(); 
		endif;

		
	}

	
?>

<div class='main-bg' id='arrow-destination'>
<?php 

if( have_rows('sections') ) :	
	while( have_rows('sections') ) : the_row();

	if( get_row_layout() == 'marketing_content' ) { get_template_part('partials/content', 'cta-marketing-content'); }

	if( get_row_layout() == 'service_single_icons' ) { get_template_part('partials/content', 'service-single-icons'); }

	if( get_row_layout() == 'bottom_cta' ) { get_template_part('partials/content', 'bottom-cta'); }

	if( get_row_layout() == 'branding_cards' ) { get_template_part('partials/content', 'branding-cards'); }

	if( get_row_layout() == 'global_cta' ) { get_template_part('partials/content', 'global-cta'); }

	if( get_row_layout() == 'single_content_holder' ) { get_template_part('partials/content', 'single-holder'); }

	if( get_row_layout() == 'double_content_holder' ) { get_template_part('partials/content', 'double-holder'); }

	if( get_row_layout() == 'heading_for_sections' ) { get_template_part('partials/content', 'heading-for-sections'); }

	if( get_row_layout() == 'testimonial_slider' ) { get_template_part('partials/content', 'testimonial-slider'); }

	if( get_row_layout() == 'logos_holder' ) { get_template_part('partials/content', 'logos'); }
endwhile; 
else: 
	the_content(); 
	endif;

?>
</div>
</main>

<?php get_template_part('footer'); ?>