<?php get_template_part('header'); ?>

<section class="animbg">
	<div class="container-fluid">
		<div class="row">
			<div id="blog_sidebar" class="col-md-3">
				<?php 
					if( have_rows('sections', 78) ): 
					while ( have_rows('sections', 78) ) : the_row();
				?>
					<?php if( get_row_layout() == 'blog' ): ?>
						<h1 style="margin-top: 2em;"><?php the_sub_field('blog_heading'); ?></h1>
						<p><?php the_sub_field('blog_copy'); ?></p>
				<?php endif; endwhile; endif; ?>
				<h2>Categories</h2>
				<ul>
					<?php wp_list_categories(array(
							'title_li' => '',
							'show_count' => true,
						)); ?>
				</ul>
				
				<h2>Featured</h2>
				<?php 					
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => -1,
						'tag' => 'featured' 
					);
				 
					$query = new WP_Query( $args );
				 
					if( $query->have_posts() ) : ?>
						<ul>					
					<?php while( $query->have_posts() ): $query->the_post();
							?>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
							<?php 
						endwhile;
						wp_reset_postdata(); ?>
						</ul>
					<?php
					endif;
				?>	
		
			</div>
			
			<div id="article" class="col-md-9">
				<div class="featured_image">
					<?php the_post_thumbnail('singlefeatured'); ?>
				</div>
				<h1><?php the_title(); ?></h1>
				<div class="post_meta"><span> // </span><?php foreach((get_the_category()) as $category){echo $category->name.", ";} ?></div>
				<?php the_content(); ?>
				
			</div>
		
		</div>
	</div>
</section>

<?php get_template_part('footer'); ?>