<?php

/**
 * The file for header all actions
 *
 *
 * @package resume X
 */

function resume_x_profile_area()
{
	$resume_x_pdefault_img = get_template_directory_uri() . '/assets/img/man.jpg';
	$resumex_psec_show = get_theme_mod('resumex_psec_show', true);
	if (empty($resumex_psec_show)) {
		return;
	}
	$resumex_pimg = get_theme_mod('resumex_pimg', $resume_x_pdefault_img);
	$resumex_profile_title = get_theme_mod('resumex_profile_title', __('Alex Smith Doe', 'resume-x'));
	$resumex_profile_subtitle = get_theme_mod('resumex_profile_subtitle', __('Senior WordPress Developer', 'resume-x'));
	$resumex_fblink = get_theme_mod('resumex_fblink', '#');
	$resumex_instalink = get_theme_mod('resumex_instalink', '#');
	$resumex_twitlink = get_theme_mod('resumex_twitlink', '#');
	$resumex_youlink = get_theme_mod('resumex_youlink', '#');
	$resumex_inlink = get_theme_mod('resumex_inlink', '#');
	$resumex_btntext = get_theme_mod('resumex_btntext', __('Contact Me', 'resume-x'));
	$resumex_btnlink = get_theme_mod('resumex_btnlink', '#');

?>
	<div class="col-lg-4 profile-side">
		<div class="author-sticky">
			<div class="author-section">
				<div class="author">
					<div class="author-img">
						<img src="<?php echo esc_url($resumex_pimg); ?>" alt="<?php esc_attr_e('Profile Image', 'resume-x'); ?>">
					</div>
					<div class="author-all-imf">
						<?php if ($resumex_profile_title) : ?>
							<h3 class="author-name"><?php echo esc_html($resumex_profile_title); ?></h3>
						<?php endif; ?>
						<?php if ($resumex_profile_subtitle) : ?>
							<h4 class="author-subtitle"><?php echo esc_html($resumex_profile_subtitle); ?></h4>
						<?php endif; ?>

						<div class="author-social-icons">
							<?php if ($resumex_fblink) : ?>
								<a href="<?php echo esc_url($resumex_fblink); ?>"><i class="fab fa-facebook-f"></i></a>
							<?php endif; ?>
							<?php if ($resumex_instalink) : ?>
								<a href="<?php echo esc_url($resumex_instalink); ?>"><i class="fab fa-instagram"></i></a>
							<?php endif; ?>
							<?php if ($resumex_twitlink) : ?>
								<a href="<?php echo esc_url($resumex_twitlink); ?>">
									<svg class="twitter-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
										<path d="M26.37,26l-8.795-12.822l0.015,0.012L25.52,4h-2.65l-6.46,7.48L11.28,4H4.33l8.211,11.971L12.54,15.97L3.88,26h2.65 l7.182-8.322L19.42,26H26.37z M10.23,6l12.34,18h-2.1L8.12,6H10.23z" />
									</svg>
								</a>
							<?php endif; ?>
							<?php if ($resumex_youlink) : ?>
								<a href="<?php echo esc_url($resumex_youlink); ?>"><i class="fab fa-youtube"></i></a>
							<?php endif; ?>
							<?php if ($resumex_inlink) : ?>
								<a href="<?php echo esc_url($resumex_inlink); ?>"><i class="fab fa-linkedin-in"></i></a>
							<?php endif; ?>
						</div>
						<?php if ($resumex_btnlink) : ?>
							<div class="author-all-btn">
								<a href="<?php echo esc_url($resumex_btnlink); ?>" class="main-btn"><?php echo esc_html($resumex_btntext); ?></a>
							</div>
						<?php endif; ?>
					</div>
					<div class="cradit-link">
						<a href="<?php echo esc_url('https://wpthemespace.com/product/resumex-pro/'); ?>" target="_blank"><?php esc_html_e('Built with ResumeX Wp Theme', 'resume-x'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
}
add_action('resumex_profile', 'resume_x_profile_area');
