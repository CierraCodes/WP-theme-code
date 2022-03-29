<?php 
$video = get_sub_field('heroVideo');
$staImg = get_sub_field('staticImg');
$videoorImg = get_sub_field('vidorimg');
?>
<?php 
        if( $videoorImg == 'video' ) {

    ?>

<video class="case-video" autoplay muted loop width='100%'>
<source src="<?php echo $video?>" type="video/mp4">
</video>
<?php 

} 
?>


<?php 
        if( $videoorImg == 'image' ) {

    ?>

<section style="background-image: url(<?php echo $staImg['url'] ?>);"  class="hero">
	<div class="container-fluid will_animate">	
     
    </div>
</section>
<?php 

} 
?>
