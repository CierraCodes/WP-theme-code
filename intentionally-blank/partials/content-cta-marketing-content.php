<?php
	$section_id = get_sub_field('marketing_content_section_id');
	$bg_img     = get_sub_field('marketing_content_bg_image');
	$txt_color 	= get_sub_field('marketing_content_txt_color');
    $marketing_txt = get_sub_field('marketing_txt');
    $bubble_title = get_sub_field('bubble_title');
    $bubble_choice = get_sub_field('bubble_choice');
    $button_choice = get_sub_field('button_choice');
    $button = get_sub_field('button');
	 ?>

<section id="<?php if( $section_id ) echo $section_id; ?>"  style="background-image: url(<?php echo $bg_img; ?>);"  class=" cta-marketing-content has-bg <?php echo $txt_color; ?> ">
	<div class="container-fluid will_animate">	
		<div class='marketing-txt fade_in_left '>
            <?php echo $marketing_txt ?>

        </div>
<?php 
        if( $bubble_choice == 'ny_bubbles' ) {

    ?>


        <div class='bubble-holder fade_in_left'>
            <?php 
                $i = 1;
                if( have_rows('bubble_icons') ) :
                while( have_rows('bubble_icons') ) : the_row();
                $icon_image = get_sub_field('icon_img');
                $icon_txt = get_sub_field('icon_txt');
                
            ?>
               <div class="bubble-content fade_in_left bubble-<?php echo $i?>">
                    <div class='bubble-bg'>
                        <img src="<?php echo $icon_image ?>" alt="">
                    </div>
                    <span><?php echo $icon_txt ?></span>  
                </div>
            <?php $i++; endwhile; endif; ?>
        </div>
<?php 

} 
?>


<?php 
        if( $bubble_choice == 'miami_bubbles' ) {

    ?>


        <div class='bubble-holder miami-bubble-holder fade_in_left'>
            <?php 
                $i = 1;
                if( have_rows('bubble_icons_miami') ) :
                while( have_rows('bubble_icons_miami') ) : the_row();
                $icon_image = get_sub_field('icon_img');
                $icon_txt = get_sub_field('icon_txt');
                
            ?>
               <div class="miami-bubble-content fade_in_left bubble-<?php echo $i?>">
                    <div class='bubble-bg'>
                        <img src="<?php echo $icon_image ?>" alt="">
                    </div>
                    <p><?php echo $icon_txt ?></p>  
                </div>
            <?php $i++; endwhile; endif; ?>
        </div>
<?php 

} 
?>

<?php 
        if( $bubble_choice == 'atlanta_bubbles' ) {

    ?>


        <div class='bubble-holder atlanta-bubble-holder fade_in_left'>
            <?php 
                $i = 1;
                if( have_rows('bubble_icons_atlanta') ) :
                while( have_rows('bubble_icons_atlanta') ) : the_row();
                $icon_image = get_sub_field('icon_img');
                $icon_txt = get_sub_field('icon_txt');
                
            ?>
               <div class="atlanta-bubble-content fade_in_left bubble-<?php echo $i?>">
                    <div class='bubble-bg'>
                        <img src="<?php echo $icon_image ?>" alt="">
                    </div>
                    <span><?php echo $icon_txt ?></span>  
                </div>
            <?php $i++; endwhile; endif; ?>
        </div>
<?php 

} 
?>

<?php 
        if( $bubble_choice == 'la_bubbles' ) {

    ?>


        <div class='bubble-holder la-bubble-holder fade_in_left'>
            <?php 
                $i = 1;
                if( have_rows('bubble_icons_la') ) :
                while( have_rows('bubble_icons_la') ) : the_row();
                $icon_image = get_sub_field('icon_img');
                $icon_txt = get_sub_field('icon_txt');
                
            ?>
               <div class="la-bubble-content fade_in_left bubble-<?php echo $i?>">
                    <div class='bubble-bg'>
                        <img src="<?php echo $icon_image ?>" alt="">
                    </div>
                    <span><?php echo $icon_txt ?></span>  
                </div>
            <?php $i++; endwhile; endif; ?>
        </div>
<?php 

} 
?>


<?php 
        if( $bubble_choice == 'service_bubbles' ) {

    ?>


        <div class='bubble-holder service-bubble-holder will_animate'>
            <h1 class='fade_in_left'><?php echo $bubble_title ?></h1>
            <div class="container fade_in_up">
            <?php 
                $i = 1;
                if( have_rows('bubble_icons_service') ) :
                while( have_rows('bubble_icons_service') ) : the_row();
                $icon_image = get_sub_field('icon_img');
                $icon_txt = get_sub_field('icon_txt');
                $icon_link = get_sub_field('iconlink');
                
            ?>
               <div class="service-bubble-content bubble-<?php echo $i?>">
                    <a href="<?php echo $icon_link['url']?>">
                   
                    <div class='bubble-bg'>
                        <img src="<?php echo $icon_image ?>" alt="">
                    </div>
                    <span><?php echo $icon_txt ?></span>  
                    </a>
                </div>
            <?php $i++; endwhile; endif; ?>
            </div>
            
        </div>
<?php 

} 
?>


<?php  if( $button_choice == 'checked') {  ?>
    <div class='global-cta-holder fade_in_left'>
             <a class="global-cta-btn fade_in_left" style='background-image: url("/wp-content/uploads/button-bg.jpg");' href='<?php echo $button['url']  ?>'><?php echo $button['title'] ?></a>       
        </div>

<?php } ?>

    </div>





</section>
    <script type='text/javascript'>



jQuery(document).ready(function($){

  $('.miami-bubble-holder').slick({
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
  