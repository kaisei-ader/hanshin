<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
jQuery(function($){
$(function() {
    $('.navToggle').click(function() {
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }
    });
});
	$("#jquery_test_wp").html("jQuery WordPress構文テスト")
});
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
	</head>
<div id="nav_box">
	    <a href="<?php echo home_url(); ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hansin.jpg" alt="株式会社阪神計器製作所" style="width:80%;">
	    </a>

    <ul class="nav_menu">
	   <li class="li1">
		<a href=tel:0664112590>お問い合わせはこちら<br>
		   <span>  TEL 0798-67-5347</span>
		</a>
	    </li>
	    <li class="li2">
		<a href="<?php echo home_url(); ?>" class="current">トップページ</a>
	    </li>
	    <li class="li3">
		<a href="<?php echo home_url(); ?>/product">製品情報</a>
	    </li>
	    <li class="li4">
	    <a href="<?php echo home_url(); ?>/company">会社案内</a>
	    </li>
   </ul>
</div>

<nav class="globalMenuSp">
    <ul>
			<li class="li1"><a href="tel:0798-67-5347">お問い合わせはこちら<span>TEL 0798-67-5347</span></a></li>
    </ul>
    <ul class="boder_none">
		<li><a href="<?php echo home_url(); ?>">トップページ</a></li>
			<li class="li3"><a href="<?php echo home_url(); ?>/product">製品情報</a></li>
			<li class="li4"><a href="<?php echo home_url(); ?>/company">会社案内</a></li>
    </ul>
	</nav>
	<div class="navToggle">
    <span></span><span></span><span></span><span>menu</span>
</div>
