<?php
if ( ! function_exists( 'blank_setup' ) ) :
	function blank_setup() {
		load_theme_textdomain( 'intentionally-blank' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_image_size( 'blogarticle', 540, 360, true );
		add_image_size( 'singlefeatured', 1440, 360, true );
		add_image_size( 'industry-big', 1240, 1240, true );
		add_image_size( 'industry-medium', 760, 760, true );
		add_image_size( 'industry-small', 380, 380, true );
		
		// This theme allows users to set a custom background.
		add_theme_support( 'custom-background', apply_filters( 'intentionally_blank_custom_background_args', array(
			'default-color' => 'f5f5f5',
		) ) );

		add_theme_support( 'custom-logo' );
		add_theme_support( 'custom-logo', array(
			'height'      => 256,
			'width'       => 256,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		function blank_custom_logo() {
			if ( function_exists( 'the_custom_logo' ) ) {
				return get_custom_logo();
			}else{
				return '';
			}
		}
	}
endif; // blank_setup
add_action( 'after_setup_theme', 'blank_setup' );

function blank_customizer_cleanup($wp_customize){
	$wp_customize->remove_section( 'static_front_page' );
}
add_action( 'customize_register', 'blank_customizer_cleanup');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'em-menu' => __( 'EM Menu' ),
      'utility-menu' => __( 'Utility Menu' ),
	  'mobile-menu' => __( 'Mobile Menu' ),
	  'footer-menu' => __( 'Footer Menu' )	
    )
  );
}
add_action( 'init', 'register_my_menus' );


//Add SVG Support
function add_file_types_to_uploads( $file_types ){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

// ---------------ADDING ICONS TO FATNAV---------------
add_filter('nav_menu_link_attributes', 'my_wp_nav_menu_objects', 10, 2);
function my_wp_nav_menu_objects( $atts, $item ) {
	
	if( $item->ID == 957 ) $atts['data-menuanchor'] = "firstPage";
	if( $item->ID == 958 ) $atts['data-menuanchor'] = 'secondPage';
	if( $item->ID == 959 ) $atts['data-menuanchor'] = 'thirdPage';
	
	
	return $atts;
}

function catered_to_you() {  
//     wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
 	wp_enqueue_script( 'cc-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.3.1', false );
 	wp_enqueue_script( 'jquery-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js' );
	wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css' );
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap' );
    wp_enqueue_style( 'fullpagecss', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/fullpage.css' );
	wp_enqueue_style( 'slickcss', get_template_directory_uri() . '/css/slick.css' );
    wp_enqueue_style( 'slicktheme', get_template_directory_uri() . '/css/slick-theme.css' );
    wp_enqueue_style( 'icons', get_template_directory_uri() . '/css/all.css' );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );


	wp_enqueue_script( 'slickjs', get_template_directory_uri() . '/js/slick.min.js', array('jquery'));
	wp_enqueue_script( 'typed', get_template_directory_uri() . '/js/typed.js', array('jquery'));
    wp_enqueue_script( 'view-anim', get_template_directory_uri() . '/js/viewanim.js', array(), '1.0.0', false );
    wp_enqueue_script( 'fullpagejs', get_template_directory_uri() . '/js/fullpage.js', array(), '3.0.2');
    wp_enqueue_script( 'anime', get_template_directory_uri() . '/js/anime.min.js' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
	
	

    
}




// -----------EXCERPT MODIFICATIONS--------
add_action( 'wp_enqueue_scripts', 'catered_to_you' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( "excerpt_length", "custom_excerpt_length", 999 );

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// -----------POST THUMBNAIL SUPPORT--------

add_theme_support( 'post-thumbnails' );


// -----------GOOGLE MAPS + ACF -----------

//ACF Options Page
function my_acf_init(){
	
	$args = array(
		'page_title' => 'Options',
		'menu_title' => 'Site Options'
	);
	
	acf_add_options_page( $args );
}

add_action('acf/init', 'my_acf_init');


// -----------CREATING CUSTOM POST TYPE : Case Studies--------
add_action( 'init', 'casestudy' );
function casestudy() { 
	$labels = array(
		'name'               => _x( 'Case Study', 'post type general name' ),
		'singular_name'      => _x( 'case study', 'post type singular name' ),
		'menu_name'          => _x( 'Case Studies', 'admin menu' ),
		'name_admin_bar'     => _x( 'Case Study', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Case Study' ),
		'new_item'           => __( 'New Case Study' ),
		'edit_item'          => __( 'Edit Case Study' ),
		'view_item'          => __( 'View Case Studies' ),
		'all_items'          => __( 'All Case Studies' ),
		'search_items'       => __( 'Search Case Studies' ),
		'parent_item_colon'  => __( 'Parent Case Study:' ),
		'not_found'          => __( 'No Case Study found.' ),
		'not_found_in_trash' => __( 'No Case Study found in Trash.' )
	);
 
	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'			 => 'dashicons-portfolio',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'casestudy' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'casestudy', $args );
}




// -----------CREATING CUSTOM POST TYPE : Services --------
add_action( 'init', 'services' );
function services() { 
	$labels = array(
		'name'               => _x( 'Services', 'post type general name' ),
		'singular_name'      => _x( 'Service', 'post type singular name' ),
		'menu_name'          => _x( 'Services', 'admin menu' ),
		'name_admin_bar'     => _x( 'Services', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Service' ),
		'new_item'           => __( 'New Service' ),
		'edit_item'          => __( 'Edit Service' ),
		'view_item'          => __( 'View Services' ),
		'all_items'          => __( 'All Services' ),
		'search_items'       => __( 'Search Services' ),
		'parent_item_colon'  => __( 'Parent Service:' ),
		'not_found'          => __( 'No Service found.' ),
		'not_found_in_trash' => __( 'No Service found in Trash.' )
	);
 
	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true, 
		'show_in_menu'       => true,
		'menu_icon'			 => 'dashicons-lightbulb',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'services', $args );
}



function ed_ajax_industry_filter_function(){
	
	$ind_cat_filter = $_POST['ind_cat_filt'];
					
	$args = array(
		'post_type' => 's8projects',
		'posts_per_page' => 3,
	);
	
	if( isset( $_POST['ind_cat_filt'] ))	
		$args['tax_query'] = array(
			array(
				'taxonomy' => 's8industry',
				'field' => 'slug',
				'terms' => $ind_cat_filter
			)
		);	
 
 
	$query = new WP_Query( $args );
 
	if( $query->have_posts() ) : 
		$i = 0;
		while( $query->have_posts() ): $query->the_post();
			global $post; 
			$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );
			?>
			<div class="project_image">
				<?php if($i == 0){the_post_thumbnail('industry-big');} elseif($i == 1) {the_post_thumbnail('industry-medium');} else {the_post_thumbnail('industry-small');} ?>
			</div>
		<?php $i++; endwhile; ?>
			
		<?php 	
		wp_reset_postdata(); 
	endif;
	?>
	<div class="industry_overview">
		<div class="industry_overview_inner">
		<?php 
			$term = get_term_by('slug', $ind_cat_filter[0], 's8industry');
			echo $term->description;	
		?>
		</div>
	</div>
	<div class="scrollers">
		<?php if($ind_cat_filter[0] !== 'water-supply'): ?>
		<div class="next" onclick="dayNavigation('next');" data-role="none" aria-label="Next" tabindex="0" role="button">
			<img src="/wp-content/uploads/2018/02/redarrow_down_blackbg.svg" alt="Next Industry" />
		</div>
		<?php endif; ?>
		<?php if($ind_cat_filter[0] !== 'aviation'): ?>
		<div class="previous" onclick="dayNavigation('prev');" data-role="none" aria-label="Previous" tabindex="0" role="button">
			<img src="/wp-content/uploads/2018/02/redarrow_down_blackbg.svg" alt="Previous Industry" />
		</div>
		<?php endif; ?>			
	</div>

	<?php
	die();
}
 
add_action('wp_ajax_industryfilter', 'ed_ajax_industry_filter_function'); 
add_action('wp_ajax_nopriv_industryfilter', 'ed_ajax_industry_filter_function');


function ed_ajax_project_filter_function(){
	
	$proj_cat_filter = $_POST['proj_cat_filt'];
	$serv_cat_filter = $_POST['serv_cat_filt'];
	
	if($serv_cat_filter[0] == 'all') {
		$serv_cat_filter = array("srv-mechanical", "srv-electrical");
	}
					
	$args = array(
		'post_type' => 's8projects',
		'posts_per_page' => -1,
	);
	
	if( isset($_POST['proj_cat_filt']) )	
		$args['tax_query'] = array(
			'relation' => 'AND',
			array(
				'taxonomy' => 's8industry',
				'field' => 'slug',
				'terms' => $proj_cat_filter
			),
			array(
				'taxonomy' => 's8service',
				'field' => 'slug',
				'terms' => $serv_cat_filter
			)
		);
		
	if( !isset($_POST['proj_cat_filt']) )	
		$args['tax_query'] = array(
			array(
				'taxonomy' => 's8service',
				'field' => 'slug',
				'terms' => $serv_cat_filter
			)
		);			
 
 
	$query = new WP_Query( $args );
 
	if( $query->have_posts() ) : 
		$i = 0;
		while( $query->have_posts() ): $query->the_post();
			global $post; 
			$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );
			?>
			<?php //var_dump($serv_cat_filter); var_dump($proj_cat_filter); ?>
				<div class="project_image <?php echo ($i == 0) ? 'active' : '' ?>">
					<?php the_post_thumbnail( 'thumbnail' ); ?>
					<div class="prj_content">
						<div class="prj_image_url"><?php echo $thumbnail[0]; ?></div>
						<div class="prj_name"><?php the_title(); ?></div>
						<div class="prj_copy"><?php the_content(); ?></div>
					</div>	
				</div>
			
		<?php $i++; endwhile; ?>

		<?php 	
		wp_reset_postdata(); 	
	endif;

	die();
}
 
add_action('wp_ajax_projectfilter', 'ed_ajax_project_filter_function'); 
add_action('wp_ajax_nopriv_projectfilter', 'ed_ajax_project_filter_function');


//Utility Functions
function get_default_footer_settings(){
 
	$settings = array(
	  "footer" => array(
		"def_address" => get_field('address', 'option'),
	  ),
	);
   
	return $settings;
  }

  function get_specific_footer_settings( $id ){
   
	$settings = array(
	  "footer" => array(
		"new_address" => get_field('city_address', $id),
	  ),
	);
   
	return $settings;
  }
   
  
  