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
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>"type="text/css"/>
</head>
	<body>
</body>

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
		<a href="<?php echo home_url(); ?>">トップページ</a>
	    </li>
	    <li class="li3">
		<a href="<?php echo home_url(); ?>/product" class="current">製品情報</a>
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

         <div class="header2_wrap">
	        <div class="header2">
		       <div class="header2_box">
		        <h1 class="header2_h1">製品情報</h1>
		        <p class="header2_p">PRODUCTS</p>
		       </div>
	       </div>
        </div>

        <div class="breadclumb">
	        <ul>
		       <li><a href="<?php echo home_url(); ?>" style="color:#0185ce;">HOME</a></li>
		       <span>></span>
				<a href="<?php echo home_url(); ?>/product" style="text-decoration:none;"><li>製品情報</li></a>
		       <span>></span>
		       <li>製品詳細</li>
	       </ul>
        </div>
      <div class="under_wrap">
		<div class="flex3">
			<div class="flex_left">
	           <div class="products_imgbox">
				    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a1.png" alt="製品情報" class="products_img">
			   </div>
			   <div class="products_imgbox">
				    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product2.jpg" alt="製品情報" class="products_img">
				</div>
			</div>
			<div class="flex_right">
				<h2 class="h2">HDNB-13</h2>
				<p class="products_description"></p>
		   <table class="products_table">
           <tbody><tr class="products_tr">
					<th class="products_th">型式</th>
					<td class="products_td">接線流羽根車式</td>
				</tr>
				<tr class="products_tr">
					<th class="products_th">口径</th>
					<td class="products_td">13</td>
				</tr>
				<tr class="products_tr">
					<th class="products_th">表示形態</th>
					<td class="products_td">乾式　アナログ・デジタル併用</td>
				</tr>
				<tr class="products_tr">
					<th class="products_th">定格最大流量(㎥/h)</th>
					<td class="products_td">2.5</td>
				</tr>
				<tr class="products_tr">
					<th class="products_th">計量範囲 R = Q3/Q1</th>
					<td class="products_td">100</td>
				</tr>
				<tr class="products_tr">
					<th class="products_th">適正使用流量範囲(㎥/h)</th>
					<td class="products_td">Q1～Q2未満：±5%／Q2以上～Q4：±2%</td>
				</tr>
				<tr class="products_tr">
					<th class="products_th">外箱材質</th>
					<td class="products_td">鉛レス銅合金（CAC804）</td>
				</tr>
				<tr class="products_tr">
					<th class="products_th">全長(mm)</th>
					<td class="products_td">100</td>
				</tr>
				<tr class="products_tr">
					<th class="products_th">重量(kg)</th>
					<td class="products_td">0.9</td>
				</tr>
			</tbody>

			</table>
      <div class="back_btn">
        <a href="<?php echo home_url(); ?>/product" style="text-decoration:none;">
          <p>製品一覧に戻る</p>
        </a>
      </div>
			</div>
		</div>
	  </div>
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
