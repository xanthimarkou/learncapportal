<?php
/**
 * Template part for displaying page content in page.php
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
		
	<div class="news-content">
		<?php the_content();
		wp_link_pages( array(
			'before'            => '<div class="text-center">'.__( 'Pages :', 'best-news' ),
			'after'             => '</div>',
			'link_before'       => '',
			'link_after'        => ''
	) ); 
		?>
	</div>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'best-news' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article>
</div>