<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Best_News
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function best_news_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'best_news_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function best_news_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'best_news_pingback_header' );


// Top Header Contact Info
if( ! function_exists('best_news_top_header_contact_info_items')):
	function best_news_top_header_contact_info_items(){
		$defaults =  array(
			array(
				'icon' => 'fa fa-map-pin',
				'title' => __('Bnews24, New York','best-news'),
			),
		);
		$contact_items = get_theme_mod( 'top_header_contact_info_items', $defaults );
		if( $contact_items  ){ 
			foreach( $contact_items as $contact ){ ?>
				<li><i class="<?php echo esc_attr($contact['icon']);?>"></i><?php echo esc_html($contact['title']);?></li>
				<?php
			}
		}
	}
endif;

// footer Contact Info
if( ! function_exists('best_news_footer_contact_info_items')):
	function best_news_footer_contact_info_items(){
		$defaults =  array(
			array(
				'icon' => 'fa fa-map-pin',
				'title' => __('Bnews24, New York','best-news'),
			),
		);
		$contact_items = get_theme_mod( 'footer_contact_info_items', $defaults );
		if( $contact_items  ){ 
			foreach( $contact_items as $contact ){ ?>
				<div class="single-contact"><i class="<?php echo esc_attr($contact['icon']);?>"></i><?php echo esc_html($contact['title']);?></div>
				<?php
			}
		}
	}
endif;


// Top Header Social Links
if( ! function_exists('best_news_top_header_social_links_items')):
	function best_news_top_header_social_links_items(){
		$defaults =  array(
			array(
				'font' => 'fa fa-facebook',
				'link' => '#',                       
			),
			array(
				'font' => 'fa fa-twitter',
				'link' => '#',
			),
			
		);
		$social_items = get_theme_mod( 'top_header_social_links_items', $defaults );
		if( $social_items  ){ 
			foreach( $social_items as $social ){ ?>
				<li><a href="<?php echo $social['link'];?>"><i class="<?php echo $social['font'];?>"></i></a></li>
				<?php
			}
		}
	}
endif;

// Top Header Social Links
if( ! function_exists('best_news_top_footer_social_links_items')):
	function best_news_top_footer_social_links_items(){
		$defaults =  array(
			array(
				'font' => 'fa fa-facebook',
				'link' => '#',                       
			),
			array(
				'font' => 'fa fa-twitter',
				'link' => '#',
			),
			
		);
		$social_items = get_theme_mod( 'footer_social_links_items', $defaults );
		if( $social_items  ){ 
			foreach( $social_items as $social ){ ?>
				<li><a href="<?php echo $social['link'];?>"><i class="<?php echo $social['font'];?>"></i></a></li>
				<?php
			}
		}
	}
endif;
/* Function which displays your post date in time ago format */
function best_news_time_ago() {
	echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) );
}

/* Word read count  */
if (!function_exists('best_news_wordcount')) :
    /**
     * @param $content
     *
     * @return string
     */
    function best_news_wordcount($post_id)
    {
            $content = apply_filters('the_content', get_post_field('post_content', $post_id));
            $decode_content = html_entity_decode($content);
            $filter_shortcode = do_shortcode($decode_content);
            $strip_tags = wp_strip_all_tags($filter_shortcode, true);
            $count = str_word_count($strip_tags);
			$count = sprintf(_n('%s word', '%s words', number_format_i18n($count),'best-news'), number_format_i18n($count));
			if ( absint($count) > 0) {
                if ('post' == get_post_type($post_id)):
                    echo '<span class="date"><a><i class="fa fa-pencil-square-o"></i><span class="pl-1"> ';
                    echo esc_html($count);
                    echo '</span></a></span>';
                endif;
            }
    }
endif;