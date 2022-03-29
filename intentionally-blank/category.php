<?php get_template_part('header'); ?>

<section class="blog animbg">
	<div class="container-fluid">
		<div class="row">
			<div id="blog_sidebar" class="col-md-3">
				<?php 
					if( have_rows('sections', 78) ): 
					while ( have_rows('sections', 78) ) : the_row();
				?>
					<?php if( get_row_layout() == 'blog' ): ?>
						<h1><?php the_sub_field('blog_heading'); ?></h1>
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
			
			<div id="blog_response" class="col-md-9">
				<?php 
					$cat_name = get_queried_object();
										
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 6,
						'category_name' => $cat_name->cat_name,
					);
				 
					$query = new WP_Query( $args );
				 
					if( $query->have_posts() ) : ?>
						<div class="d-flex flex-wrap">					
					<?php while( $query->have_posts() ): $query->the_post();
							?>
								<div class="article col-md-6">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blogarticle'); ?></a>
									<h3 class="h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span> // </span><?php foreach((get_the_category()) as $category){echo $category->name." ";} ?></h3>
									<p><?php the_excerpt(); ?></p>
								</div>
							<?php 
						endwhile;
						wp_reset_postdata(); ?>
						</div>
					<?php
					endif;
				?>				
			</div>
		
		</div>
	</div>
</section>

<?php get_template_part('footer'); ?>