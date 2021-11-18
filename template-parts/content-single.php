<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Best_News
 */

?>
<div class="single-news-inner">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php 
		if(has_post_thumbnail()):?>
			<div class="image">
				<?php the_post_thumbnail();?>
			</div>
		<?php endif; ?>
		

		<div class="meta-share">
			<div class="meta">
				<span class="date pr-2"><i class="fa fa-clock-o"></i>
					<?php best_news_posted_on();?>
				</span>
				<span class="date pr-2" ><i class="fa fa-comments"></i> 
					<?php echo absint(get_comments_number());?> <?php echo esc_html_e( 'Comments','best-news' );?>
				</span>
				<?php if (get_theme_mod('best_news_singlepage_timeago_enable','1')) : ?>
				<span class="date pr-2">
					<a><i class="fa fa-clock-o"></i><span class="pl-1"> <?php best_news_time_ago() ?> </span></a>
				</span>
				<?php endif ;?>
				<?php if (get_theme_mod('best_news_singlepage_wordcount_enable','1')) : ?>
				<span class="date pr-2"> 
					<?php best_news_wordcount($post->ID);?> 
				</span>
				<?php endif ;?>
			</div>
		</div>
		<div class="news-content text-justify">
			<?php the_content();
			wp_link_pages( array(
				'before'            => '<div class="text-center">'.__( 'Pages :', 'best-news' ),
				'after'             => '</div>',
				'link_before'       => '',
				'link_after'        => ''
		) ); ?>
		</div>
		
	</article>
</div>