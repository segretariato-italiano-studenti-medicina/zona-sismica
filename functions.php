<?php

function zs_show_volume( $request ) {

    $dummy_query = new WP_Query();  // the query isn't run if we don't pass any query vars
    $dummy_query->parse_query( $request );


    // this is the actual manipulation; do whatever you need here
    if ( $dummy_query->is_home() ){
		$request = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'volume',
					'field' => 'slug',
					'terms' => 'volume_0'
				)
			)
		);

	}

    return $request;
}
//add_filter( 'request', 'zs_show_volume' );

function zs_tax_box(){
	global $post;
    
    ?><div class="taxonomy"><?php the_category(); ?></div><?php
    
    $cat_count = count(get_the_category());

	$taxArray = get_the_terms( $post->ID, 'area-tematica' );

	if ( is_array($taxArray) && ! is_wp_error( $taxArray ) ){
        
	 	foreach($taxArray as $taxTerm){ ?>
		
		<div class="taxonomy <?php echo $taxTerm->slug; ?>">
			<a href="<?php echo get_term_link($taxTerm->slug, 'area-tematica') ?>"><?php echo $taxTerm->name ?></a>
		</div>
		<? }
        return count($taxArray) + $cat_count;
	}
    
    return 0;
}

function zs_post_data(){

	?><div class="post-data">
		
		<?php $tax_terms_num = zs_tax_box(); ?>
		<div class="pubtime">
        <?php if($tax_terms_num < 4): ?>
			<span><?php the_time('d'); ?> <?php the_time('M'); ?></span>
			<span><?php the_time('Y'); ?></span>
        <?php else: ?>
            <span><?php the_time('d'); ?> <?php the_time('M'); ?> <?php the_time('Y'); ?></span>
        <?php endif; ?>
		</div>
	</div><?php
}

add_action('wp_enqueue_scripts', function(){
	error_log(is_single());
	if (is_single()){
		wp_enqueue_script('jquery_transform', get_stylesheet_directory_uri()."/js/jquery.transform.js", array('jquery'),'0.9.3',true);
		wp_enqueue_script('zs_image_rotate', get_stylesheet_directory_uri()."/js/image_rotate.js", array('jquery_transform'),'',true);
	}
	wp_deregister_script('thickbox');
});
