<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_footer(); ?>
</head>
	<body>
		<footer id="colophon" class="site-footer" role="contentinfo">
		</footer><!-- #colophon -->
		<div class="footer_box">
			<div class="footer_flex">
				<div class="footer_logo">
					<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hansin3.jpg">
					</a>
				</div>
				<div class="footer_list">
					<ul>
						<p style="color:#fff; font-size:15px;">製品情報</p>
						<li>
						<a href="<?php echo home_url(); ?>/product">口径13～50mm
						</a>
						</li>
					</ul>
					<ul>
						<p style="color:#fff;">会社案内</p>
						<li><a href="<?php echo home_url(); ?>/company">代表ごあいさつ</a></li>
						<li><a href="<?php echo home_url(); ?>/company?tab=company">会社概要</a></li>
						<li><a href="<?php echo home_url(); ?>/company?tab=enkaku">弊社の沿革</a></li>
						<li><a href="<?php echo home_url(); ?>/company?tab=map">アクセスマップ</a></li>
					</ul>
				</div>
				<div class="footer_list2">
			<p style="color:#fff;">製品情報</p>
		<ul>
			<li><a href="/products">口径13~50mm</a></li>

		</ul>
			<p style="color:#fff;">会社案内</p>
		<ul>
			<li><a href="<?php echo home_url(); ?>/company">代表ごあいさつ</a></li>
			<li><a href="<?php echo home_url(); ?>/company?tab=company">会社概要</a></li>
			<li><a href="<?php echo home_url(); ?>/company?tab=enkaku">弊社の沿革</a></li>
			<li><a href="<?php echo home_url(); ?>/company?tab=map">アクセスマップ</a></li>
		</ul>
	</div>
			</div>
			<div class="copy_right">
				<small>© 2018 株式会社阪神計器製作所.</small>
				<a href="<?php echo home_url(); ?>/privacy" style="color:#fff;"><span class="space">|</span>個人情報保護法</a>
			</div>
		</div>
</body>
</html>
