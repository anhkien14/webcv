<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Resume X
 */
$resumex_dark_blogdate_show = get_theme_mod('resumex_blogdate_show', 1);
$resumex_dark_categories = get_the_category();
if ($resumex_dark_categories) {
	$resumex_dark_category = $resumex_dark_categories[mt_rand(0, count($resumex_dark_categories) - 1)];
} else {
	$resumex_dark_category = '';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('resume-x-grid-item'); ?>>

	<div class="rx-list-blog py-3 px-4">
		<?php if (has_post_thumbnail()) : ?>
			<div class="blog-img">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('medium_large'); ?>
				</a>
				<?php if ($resumex_dark_blogdate_show) : ?>
					<div class="blog-date">
						<p><?php echo esc_html(get_the_date()); ?></p>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<div class="blog-all-details">
			<?php if ('post' === get_post_type() && !empty($resumex_dark_category)) : ?>
				<a class="blog-scat" href="<?php echo esc_url(get_category_link($resumex_dark_category)); ?>"><span><?php echo esc_html($resumex_dark_category->name); ?></span></a>
			<?php endif; ?>
			<?php the_title('<h4 class="blog-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h4>'); ?>
			<div class="blog-dres">
				<?php the_excerpt(); ?>
			</div>
			<a href="<?php the_permalink(); ?>" class="main-btn"><?php esc_html_e('Read More ', 'resumex-dark'); ?><i class="fas fa-chevron-right"></i></a>

		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->