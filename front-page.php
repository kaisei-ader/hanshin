<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

      <!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

</head>
	<body>


		<div class="header_wrap">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/water.png" alt="ヘッダー画像"class="header_bg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/water.sp.jpg" alt="ヘッダー画像"class="header_bg_sp">
			<div class="heading_box">
				<h1>この水一滴の大切さ</h1>
				<h3 class="com_h3">株式会社　阪神計器製作所</h3>
			</div>
			<div class="scroll_box">
				<div class="down_box">
					<a href="#business" id="down" style="text-decoration:none;">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/scroll.jpg" alt="スクロール画像">
						<p class="last_scroll">SCROLL</p>
					</a>
				</div>
			</div>
			<div class="news_box">
				<h2 class="last_h2">NEWS</h2>
				<div class="news_box2">
					<span class="data">2019年01月10日</span>
					<span class="category">
					<ul class="post_category">
            <li><a href="<?php echo home_url(); ?>/news">お知らせ</a></li>
					</ul>
					</span>
					<a href="<?php echo home_url(); ?>/news" class="margin1">ホームページをリニューア...</a>
				</div>
			</div>
		</div>
		<div class="wrap">
			<div class="top_business" id="business">
				<div class="sp_bgcolor">
					  <div class="business_content">
						 <h5 class="en_h5">
							OUR BISINESS
							<span>|</span>
							01
						 </h5>
						   <h2 class="h2">水道メータの製造販売</h2>
						    <p class="text1">
						      長年の歴史で培われた技術力と信頼の実績。
							   <br>
						      最新の設備を導入し高精度の製品を開発しています。
						    </p>
						    <div class="img_top1">
							  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enkei1.png" alt="水道メータの製造販売" class="img1">
							  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enkei2.png" alt="水道メータの改造修理" class="img1">
						   </div>
					</div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mizu.jpg" alt="水" class="img2">
				</div>
			</div>
			<div class="top_business2">
				<div class="sp_bgcolor">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fix.jpg" alt="修理" class="img2">
					  <div class="business_content">
						 <h5 class="en_h5">
							OUR BISINESS
							<span>|</span>
							02
						 </h5><h2 class="h2">水道メータの取り換え</h2>
						    <p class="text1">
						      高度な技術でライフラインをしっかりと支え、
								<br>
						      皆様の安全・安心な生活を守ります。
						  </p>
						    <div class="img_top1">
							  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enke3.png" alt="水道メータの部品販売" class="img1">
							  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/enkei4.png" alt="水道メータの取替工事" class="img1">
						   </div>
				</div>
			</div>
		  </div>
			<div class="top_product">
					<h2 class="h2">
						PRODUCTS
					</h2>
					<h5 class="h5sub">製品情報</h5>


		        <div class="top_product_box">
					<div class="box_detail">
						<a href="<?php echo home_url(); ?>/product" style="text-decoration:none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/a1.png" alt="製品情報"class="img_pro">
					<div class="detail2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape.png" class="allow">
						 <p class="text2">HDX-2</p>
					</div>
						</a>
				</div>
					<div class="box_detail">
          <a href="<?php echo home_url(); ?>/product" style="text-decoration:none;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a2.png" alt="製品情報" class="img_pro">
					<div class="detail2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape.png" class="allow">
            <p class="text2">HDF-2</p>
					</div>
					</a>
				   </div>
					<div class="box_detail">
					<a href="<?php echo home_url(); ?>/product" style="text-decoration:none;">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/a3.png" alt="製品情報"class="img_pro">
					<div class="detail2">
				  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape.png" class="allow">
					<p class="text2">HDE-2</p>
					</div>
						</a>
				</div>
				<div class="box_detail">
						<a href="<?php echo home_url(); ?>/product" style="text-decoration:none;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/a1.png" alt="製品情報" class="img_pro">
					<div class="detail2">
						 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape.png" class="allow">
						 <p class="text2">HDR-2
						</p>
					</div>
						</a>
				   </div>
				</div>
			</div>


	             <a href="<?php echo home_url(); ?>/product" style="text-decoration:none;">
		           <div class="com_box">
				      <div class="bg_white">
					     <h1 class="company_text">COMPANY</h1>
					        <h5 class="h5sub">会社概要</h5>
				      </div>
		           </div>
		        </a>
	</div>
		<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
		 <script type="text/javascript">
			 jQuery(function($){
        jQuery("#down").click(function() {
			console.log(1)
          // スクロールの速度
          var speed = 400; // ミリ秒で記述
          var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top;
          jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
        });
		 });
    </script>

</body>


</html>

<?php
get_footer();?>
