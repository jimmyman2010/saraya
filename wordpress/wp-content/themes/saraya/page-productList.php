<?php
/**
 * Template Name: Product List
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Saraya
 * @since Saraya 1.0.0
 */

get_header(); ?>

<main class="site-main product-list">
	<div class="site-title child" style="background-color: transparent;">
		<div class="container">
			<div class="title">
				<h1><?= get_option('product_title_' . ICL_LANGUAGE_CODE) ?></h1>
				<h2><?= get_option('product_subtitle_' . ICL_LANGUAGE_CODE) ?></h2>
			</div>
		</div>
	</div>

	<?php get_template_part( 'template-parts/content', 'product-search' ); ?>

	<div class="site-breadcrumb">
		<div class="container">
			<?php dickinsons_the_breadcrumbs(); ?>
		</div>
	</div>

	<div class="main-container clearfix">

		<div class="container">
			<section class="blog-content" role="main">

				<?php
                $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
				$args = array(
					'post_type' => 'product'
				);

				$brand = get_query_var( 'pb' );
				if($brand){
					if(!is_array($args['tax_query'])){
						$args['tax_query'] = [];
					}
					array_push($args['tax_query'], [
						'taxonomy' => 'brand',
						'terms'    => $brand,
					]);
				}

				$marketSegment = get_query_var( 'ms' );
				if($marketSegment){
					if(!is_array($args['tax_query'])){
						$args['tax_query'] = [];
					}
					array_push($args['tax_query'], [
						'taxonomy' => 'market_segment',
						'terms'    => $marketSegment,
					]);
				}

				$type = get_query_var( 'pt' );
				if($type){
					if(!is_array($args['tax_query'])){
						$args['tax_query'] = [];
					}
					array_push($args['tax_query'], [
						'taxonomy' => 'product_type',
						'terms'    => $type,
					]);
				}

				$name = get_query_var( 'pn' );
				if($name){
					global $wpdb;
					$finalArgs =  array (
						'post_type' => 'school'
					);

					// Create a new instance
					$searchSchools = new WP_Query( $finalArgs );
					$mypostids = $wpdb->get_col("select ID from $wpdb->posts where post_title LIKE '%".$name."%' ");

					$args['post__in'] = $mypostids;
				}

				// The Query
                $the_total = new WP_Query( $args );
				$postPerPage = 5;
                $the_query = new WP_Query(
                        array_merge($args,
                            [
                                'posts_per_page' => $postPerPage,
                                'paged' => $paged
                            ] )
                );

				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						get_template_part( 'template-parts/content-product', get_post_format() );
					}
					$prev = 'PREVIOUS';
					$next = 'NEXT';
					$url = '/products/';
					if(ICL_LANGUAGE_CODE && ICL_LANGUAGE_CODE !== 'en'){
                        $prev = 'TRƯỚC';
                        $next = 'SAU';
                        $url = '/cac-san-pham/';
                    }
                    global $wp;
                    $current_url = home_url() . $url;

                    echo '<div class="pagination">';
                    $total_page = ceil(count($the_total->posts)/$postPerPage);
                    if($paged > 1) {
                        echo '<a class="prev page-numbers" href="' . $current_url . ($paged - 1) . '/"><i class="fa fa-angle-left"></i> ' . $prev . '</a>';
                    }
                    for($i = 1; $i <= $total_page; $i++){
                        if($i === $paged) {
                            echo '<span class="current page-numbers">' . $i . '</span>';
                        } else {
                            echo '<a class="page-numbers" href="' . $current_url . $i . '/">' . $i . '</a>';
                        }
                    }
                    if($paged < $total_page) {
                        echo '<a class="next page-numbers" href="' . $current_url . ($paged + 1) . '/">' . $next . ' <i class="fa fa-angle-right"></i></a>';
                    }
                    echo '</div>';

//					get_template_part( 'template-parts/content', 'pagination' );
				} else {
					// no posts found
					get_template_part( 'template-parts/content', 'none' );
				}

				/* Restore original Post Data */
				wp_reset_postdata();

				?>

			</section>

			<?php get_sidebar('product'); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
