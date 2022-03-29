<?php 
	
	$logo = get_field('footer_logo', 'option');
	$tagline = get_field('tagline', 'option');

	
	$phone = get_field('phone_number', 'option');
	$email = get_field('email', 'option');
	$referTxt = get_field('refer', 'option');
	$btnLeft = get_field('button_left', 'option');
	$btnRight = get_field('button_right', 'option');

	$copyright = get_field('copyright', 'option');

	$page_id = get_the_ID();
	$footer_settings = get_default_footer_settings();
	$page_specific_footer_settings = get_specific_footer_settings($page_id );


	$city_footeraddress = $page_specific_footer_settings['footer']['new_address'] == ""  ? $footer_settings['footer']['def_address'] : $page_specific_footer_settings['footer']['new_address'];

?>
<footer class="ft">
	<div class="container-fluid will_animate">
			<div class='footer-holder'>	
				<div class='footer-left fade_in_up'>
					<div class=" footer-logo ">
						<img src='<?php echo $logo['url']?>'/>
						<p><?php echo $tagline?></p>
					</div>
					<div class=" footer-icon-txt ">
						<div class='icon-text-holder'>
							<div class="f-icon-holder">
								<i class="fas fa-map-marker-alt"></i>	
							</div>
							
							<p class='address-holderrr'><?php echo $city_footeraddress?></p>
						</div>
						<div class='icon-text-holder icon-text-holder-2 '>
						<div class="f-icon-holder">
							<i class="fas fa-phone-alt"></i>
						</div>
							<p><?php echo $phone?></p>
						</div>
						<div class='icon-text-holder icon-text-holder-3'>
							<div class="f-icon-holder">
							<i class="fas fa-envelope"></i>
							</div>
							<p><?php echo $email?></p>
						</div>
					</div>
					<div class=" footer-menu-holder ">
					
					<?php 
						wp_nav_menu( 
							array(
								'container'      => false,
								'menu_class'     => 'footer-menu-list',
								'theme_location' => 'footer-menu'
							)
						); ?>

						
					</div>
					
				</div>
				<div class='footer-right fade_in_up'>
					<div class="col-L12">
						<h2><?php echo $referTxt ?></h2>
						<div class='social-media-icon-holder'>

							<?php 
								$i = 0;
								if( have_rows('icons', 'option') ) :
								while( have_rows('icons','option') ) : the_row();
								$icon_image = get_sub_field('icon', 'option');
								$lnk = get_sub_field('icon_link', 'option');
							?>
							
								<div class="footer-icons">
									<a href='<?php echo $lnk['url']; ?>'>
										<img src="<?php echo $icon_image['url']; ?>"/>	
									</a>
								</div>
							
							<?php $i++; endwhile; endif; ?>
							
						</div>
					</div>
					<div class="footer-btn-holder">
						<div class="footer-btn-left-holder">
							<a href="<?php echo $btnLeft['url']?>"   target="_blank" class='footer-btn footer-btn-left'><?php echo $btnLeft['title']?></a>
						</div>
						<div class="footer-btn-right-holder"><a href="<?php echo $btnRight['url']?>"  target="_blank" class='footer-btn footer-btn-right'><?php echo $btnRight['title']?></a></div>
					</div>
					
				</div>
				
			</div>
			
	</div>
	<div class='footer-bottom will_animate'>
					<p class='fade_in_left'><?php echo $copyright?></p>				
				</div>
</footer>
<a href="#" id="backToTop">
	<i class="fas fa-angle-up"></i>
</a>
</body>
<?php wp_footer(); ?>
</html>

