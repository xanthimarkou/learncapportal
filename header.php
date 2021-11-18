<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Best_News
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'best-news' ); ?></a>
<div id="content" class="site-content">
	<!-- preloader -->
	<?php if(get_theme_mod('best_news_preloader_enable')):?>
		<div class="template-preloader-rapper">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>
	<?php endif;?>
	<!-- End preloader -->
	<!-- Start Header -->
	<header class="header">
	<!-- end -->
<div class="network-strip network-bottom">
	<div class="main--centered network-top">
		<div class="network-strip-network-text">
			<a href="http://www.sigmalivenetwork.com" target="_blank">
				Sigmalive Network
			</a>
		</div>
		<div class="network-strip-item-text">
			<a href="http://www.sigmalive.com/" target="_blank">Sigmalive</a>
		</div>		
		<div class="network-strip-item-text">
			<a href="http://simerini.sigmalive.com/" target="_blank">Simerini</a>
		</div> 
		<div class="network-strip-item-text">
			<a href="http://sportime.sigmalive.com" target="_blank">Sportime</a>
		</div>
		<div class="network-strip-item-text">
			<a href="https://economytoday.sigmalive.com" target="_blank">Economy Today</a>
		</div>
		<div class="network-strip-item-text">
			<a href="http://city.sigmalive.com" target="_blank">City</a>
		</div>
		<div class="network-strip-item-text">
			<a href="https://www.ilovestyle.com" target="_blank">I Love Style</a>
		</div>
		<div class="network-strip-item-text">
			<a href="http://madamefigaro.ilovestyle.com" target="_blank">Madame Figaro</a>
		</div>
		<div class="network-strip-item-text">
			<a href="https://www.checkincyprus.com" target="_blank">Check In</a>
		</div>
		<div class="network-strip-item-text">
			<a href="http://mag.sigmalive.com" target="_blank">Magazine</a>
		</div>
		<div class="network-strip-item-text">
			<a href="http://cooking.sigmalive.com" target="_blank">Cooking</a>
		</div>
		<div class="network-strip-item-text">
			<a href="https://mycyprustravel.com" target="_blank">My Cyprus Travel</a>
		</div>
		<div class="clear_both"></div>
	</div>
</div>
<!-- end -->
		<!-- Start Topbar -->
		<?php if(get_theme_mod('best_news_top_header_enable')):?>
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Date Time -->
							<ul class="date-time">
								<?php if(get_theme_mod('best_news_top_header_left_side_enable')):?>
									<?php best_news_top_header_contact_info_items();?>
								<?php endif;?>
								<?php if(get_theme_mod('best_news_top_header_date_enable')):?>
								<li><i class="fa fa-calendar"></i> <?php echo esc_html( date( get_option('date_format') ) ); ?></li>
								<?php endif;?>
							</ul>
							<!--/ End Date Time -->
						</div>
						<?php if(get_theme_mod('best_news_top_header_social_enable')):?>
							<div class="col-lg-4 col-12">
								<div class="top-right">
									<!-- Social -->
									<ul class="header-social">
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                                        <li><a href=""><i class="fa fa-instagram"></i></a></li>

									</ul>
									<!-- End Social -->
								</div>
							</div>
						<?php endif;?>
					</div>
				</div>
			</div>
		<?php endif;?>
		<!--/ End Topbar -->
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<div class="logo">
							<div class="text-logo">
								<?php 
								if(has_custom_logo()):
									the_custom_logo();
								else:    
									?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
									$new_blog_description = get_bloginfo( 'description', 'display' );
									if ( $new_blog_description || is_customize_preview() ) :
									?>
										<p class="site-description pb-5"><?php echo $new_blog_description; /* WPCS: xss ok. */ ?></p>
									<?php endif; ?>
								<?php endif;?>
							</div>
						</div>
						
						<div class="mobile-nav"></div>
					</div>
					<?php if(get_theme_mod('best_news_top_header_ads_enable')):
						$ads_img_url = get_theme_mod('best_news_top_header_ads_image');	
						?>
						<div class="col-lg-8 col-md-12 col-12">
							<div class="advertise right">
							<?php $test = get_theme_mod('best_news_top_header_ads_image_url') ; ?>
							<a href="<?php echo esc_url(get_theme_mod('best_news_top_header_ads_image_url'))?>" target = "_blank"><img src="<?php echo esc_url($ads_img_url);?>" ></a>
							</div>
						</div>
					<?php endif;?>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
		<!-- Main Menu -->
		<div class="main-menu">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Main Menu -->
						<nav class="navbar navbar-expand-lg">
							<?php
							if ( has_nav_menu( 'primary' ) ) :
								wp_nav_menu( array(
									'theme_location'    => 'primary',
									'depth'             => 5,
									'container_class'   => 'navbar-collapse',
									'menu_class'        => 'nav menu navbar-nav',
									'fallback_cb'       => 'best_news_navwalker::fallback',
									'walker'            => new best_news_navwalker(),
								));
								?>
								<?php else : ?>
									<div class="navbar-collapse">
										<ul class="nav menu navbar-nav">
											<li><a href="<?php echo esc_url(admin_url( 'nav-menus.php' )); ?>"><?php esc_html_e('Add a menu','best-news'); ?></a></li>
										</ul>
									</div>
								<?php endif; ?>

							</nav>
							<!--/ End Main Menu -->
							<!-- Search Form -->
							<div class="search-form">
								<a class="icon" href="#"><i class="fa fa-search"></i></a>
								<form method ="get" action="<?php echo esc_url(home_url('/'));?>" class="form">
									<input type="text" value="" name="<?php esc_attr_e( 's', 'best-news' );?>" id="<?php esc_attr_e( 's', 'best-news' );?>" placeholder="<?php the_search_query();?>">
									<a href="#"><button type="submit"><i class="fa fa-search"></i></button></a>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
					</div>
				</div>
			</div>
			<!--/ End Main Menu -->
		</header>
		<!--/ End Header -->

		<?php if( ! is_home() && (!is_front_page())):?>
	
		
		<?php endif;?>
