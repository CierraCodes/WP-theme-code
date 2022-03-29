<?php
        $id = get_sub_field('id');
        $bgImg = get_sub_field('bg_img');
	    $title = get_sub_field('title');
        $subtitle = get_sub_field('sub_title');
        $content = get_sub_field('content');
        $content2 = get_sub_field('content_two');
        $form = get_sub_field('form');

        $starcount = get_sub_field('star_count');
        $startext = get_sub_field('start_text');

        $clientImg = get_sub_field('client_image');
        $clienttest = get_sub_field('client_testimonial');
        $clientname = get_sub_field('client_name');
	 ?>

<section class="popout-forms will_animate" id='<?php echo $id?>' style="background-image: url(<?php echo $bgImg; ?>);">
        <div class="popout-row">
            <div class="popout-left fade_in_left" fade_>
                    <div class="popout-title">
                        <hr>
                        <h1><?php echo $title?></h1>
                    </div>
                    <div class="popout-content-holder">
                        <h2><?php echo $subtitle?></h2>

                        <div class="popout-content">
                            <h2>
                                <?php echo $content?> 
                            </h2>
                        </div>

                        <div class="popout-content-two">
                            <?php echo $content2?> 
                        </div>

                        <div class="popout-testimonial">
                        <div class="client-top">
                            <div class="clientimg" style="background-image: url(<?php echo $clientImg['url']; ?>);">
                            </div>
                        <div class="stars">
                            <div class="star-holder star-count-<?php echo $starcount?>">
                                <img src="/wp-content/uploads/White-Star.png" alt="">
                                <img src="/wp-content/uploads/White-Star.png" alt="">
                                <img src="/wp-content/uploads/White-Star.png" alt="">
                                <img src="/wp-content/uploads/White-Star.png" alt="">
                                <img src="/wp-content/uploads/White-Star.png" alt="">
                            </div>
                            <p><?php echo $startext ?></p>
                        </div>
                        </div>
                       
                        <div class="client-test">
                            <p>
                                <?php echo $clienttest?> 

                            </p>
                        </div>
                        <div class="client-name">
                            <p>
                    <?php echo $clientname?> 

                            </p>
                        </div>
                    </div>
                    </div>
                   
                   
                    

                    
            </div>
            <div class="popout-right fade_in_left">
            <?php echo $form?>
                    
            </div>
        </div>
</section>
