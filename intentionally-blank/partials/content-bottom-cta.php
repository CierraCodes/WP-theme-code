<?php 
    $bottomTxt = get_sub_field('bottom_text');
    $bottomLink = get_sub_field('bottom_cta');
?>

<div class="like-what-you-see story-page-like"> 
	<div class="container-fluid will_animate">
		<div class="like-what-you-see-left fade_in_left">
				<h1><?php echo $bottomTxt?></h1>	
		</div>
		<div class="like-what-you-see-right fade_in_left">
					<a href="<?php echo $bottomLink['url'] ?>" class="global-cta-btn" style='background-image: url("/wp-content/uploads/button-bg.jpg");'><?php echo $bottomLink['title'] ?></a>
		</div>
	</div>
</div>