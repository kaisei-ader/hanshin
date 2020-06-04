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

<div class="header2_wrap">
	<div class="header2">
		<div class="header2_box">
		<h1 class="header2_h1">個人情報<br>保護方針</h1>
		<p class="header2_p">PRIVACY POLICY</p>
		</div>
	</div>
</div>

<div class="breadclumb">
	<ul>
		<li><a href="<?php echo home_url(); ?>" style="color:#0185ce;">HOME</a></li>
		<span>></span>
		<li>個人情報保護方針</li>
	</ul>
</div>
	<div class="company_wrap">
		<div class="company_flex">
			<h2 class="h2">個人情報保護方針</h2>
			<h5 class="company_h5">privacy policy</h5>
		</div>
	<p class="company_text2">
              当社は水道メーターの製造販売・改造修理・定期交換業務を行う中で「お客様・関係者様・従業者の個人情報を適切に保護してゆくことは、皆様の安心と業界                                                                                                                                                                                                                                                      の更なる発展に欠かせない」という理念のもと、個人情報の取扱いに関する法令、国が定める指針その他の規範を遵守し、個人情報を適正に取り扱うととも                            に、安全管理について適切な措置を講じます。
                                                         そのために、以下の方針に基づく個人情報保護マネジメントシステムを構築し、従業者への教                              育・実践を徹底していくとともに、個人情報保護マネジメントシ           ステムの継続的改善を行っていきます。
	</p>
	<h4 class="company_h4">個人情報の管理</h4>
	<p class="company_text2">
	１．	当社は、適法かつ公正な手段によって個人情報を取得いたします。取得にあたっては、利用目的を特定し、その利用目的の達成に必要な範囲内で法令に基づき、個人情報を利用いたします。利用目的を超えて利用する場合には、ご本人に新たな利用目的を通知し、同意を得ます。
特定個人情報は本人の同意の有無に関わらず、利用目的の範囲を超えた利用はしません。
	</p>
	<p class="company_text2">
		２．	当社は、以下のいずれかに該当する場合を除き、あらかじめご本人の同意を得ることなく、個人情報を第三者に提供いたしません。
		<br>
		<br>
		(1)本人の事前の同意、承認を得ている場合
		<br>
		(2)法令に基づく場合
		</p>
		<p class="company_text2">
			３．	当社は、安全管理措置として、取り扱う個人情報の漏えい、滅失又はき損の防止及び是正のための規程と体制の整備を行い、十分なセキュリティ対策を講じるとともに、利用目的の達成に必要な正確性、最新性を確保するための適切な措置を講じます。
		</p>
		<p class="company_text2">４．	当社は、個人情報に関する開示等の権利を尊重し、当社の個人情報の取扱いに関するご意見、お問合せ、苦情、相談に迅速、かつ、誠実に対応いたします。</p>
		<p class="company_text2">
			制定年月日：2006年4月1日<br>
            改訂年月日（第2.3版）：2015年11月2日<br>
            株式会社　阪神計器製作所<br>
            代表取締役社長　松田　健仁</p>
		<h4 class="company_h4">お問い合わせ
		</h4>
		<p class="company_text2">当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。</p>
		<p class="company_text2">株式会社阪神計器製作所<br> 個人情報の取扱いに関するご意見、お問い合わせ窓口<br>	株式会社阪神計器製作所　個人情報保護管理者<br>西宮支店　営業部課長　岸本 英一<br>	Tel : 0798-67-5347　/　Fax : 0798-64-1104<br>	Mail : nishinomiya@hanshinkeiki.com<br>
		</p>
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
