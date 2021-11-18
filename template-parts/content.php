<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Best_News
 */

?>

<div class="col-lg-6 col-12">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- Single News -->
		<div class="single-news">
			<?php 
			if(has_post_thumbnail()):?>
			<div class="news-head">
				<?php the_post_thumbnail('best-news-thumbnail-2');?>
			</div>
			<?php elseif (! has_post_thumbnail()): ?>
				<div class="news-head">
					<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/477_318.png " >
				</div>
			<?php endif;
			?>
			<div class="content">
				<div class="meta">
					<span class="author">
						<?php echo get_avatar( get_the_author_meta('ID'), 100); ?>
						<?php best_news_posted_by();?>
					</span>
					<span class="date pl-1"><i class="fa fa-clock-o"></i>
						<?php best_news_posted_on();?>
					</span>
					<?php if (get_theme_mod('best_news_timeago_enable','1')) : ?>
						<span class="date pl-1">
							<a><i class="fa fa-clock-o"></i><span class="pl-1"> <?php best_news_time_ago() ?> </span></a>
						</span>
					<?php endif ;?>
					<?php if (get_theme_mod('best_news_wordcount_enable','1')) : ?>
						<span class="date pl-1"> 
							<?php best_news_wordcount($post->ID);?> 
						</span>
					<?php endif ;?>
                       

				</div>
				<h3 class="title-medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
				<?php the_excerpt();?>
			</div>
			<?php best_news_modal(); ?>
			
		</div>
		<!--/ End Single News -->
	</article>
</div>