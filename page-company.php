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
		<a href="<?php echo home_url(); ?>/product" >製品情報</a>
	    </li>
	    <li class="li4">
	    <a href="<?php echo home_url(); ?>/product" class="current">会社案内</a>
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
		<h1 class="header2_h1">会社案内</h1>
		<p class="header2_p">COMPANY</p>
		</div>
	</div>
</div>
<div class="tab_wrap">
	<input type="radio" id="tab1" name="tab_btn" checked="checked">
	<input type="radio" id="tab2" name="tab_btn" >
	<input type="radio" id="tab3" name="tab_btn" >
	<input type="radio" id="tab4" name="tab_btn" >
	<div class="breadclumb">
	 <ul>
		<li><a href="<?php echo home_url(); ?>" style="color:#0185ce;">HOME</a></li>
		<span>></span>
		<li>会社案内</li>
		<li class="vector">
			<p id="between">></p>
		</li>
		<li>
			<p id="pan_3">代表ごあいさつ</p>
		</li>
	</ul>
    </div>

	<div class="tab_area">
		<label class="tab1_label menu_box" for="tab1" id="l_tab1">
		<h3 class="company_cat">代表ごあいさつ</h3>
		</label>

		<label class="tab2_label menu_box" for="tab2" id="l_tab2">
			<h3 class="company_cat">会社概要</h3>
		</label>

		<label class="tab3_label menu_box" for="tab3" id="l_tab3">
		<h3 class="company_cat">弊社の沿革</h3>
		</label>

		<label class="tab4_label menu_box" for="tab4" id="l_tab4">
		<h3 class="company_cat">アクセスマップ</h3>
		</label>
	</div>

	<script
  src="https://code.jquery.com/jquery-3.4.1.slim.js"
  integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
  crossorigin="anonymous"></script>
	<script type="text/javascript">
	$(document).on('click', '#l_tab1', function(element){
		console.log(67)
	})
	 $("#l_tab1").click(function() {
       $("#between"). text(">");
       $("#pan_3"). text("代表ごあいさつ");
    });
	$("#l_tab2").click(function() {
       $("#between"). text(">");
       $("#pan_3"). text("会社概要");
    });
	$("#l_tab3").click(function() {
       $("#between"). text(">");
       $("#pan_3"). text("弊社の沿革");
    });
	$("#l_tab4").click(function() {
       $("#between"). text(">");
       $("#pan_3"). text("アクセスマップ");
    });
	$(document).ready(function(){
      var url = location.href;
		console.log(url)
		//URLの?以降の値を取得
      var get_param=window.location.search.substring(1).split('&')[0];
		console.log(get_param)
		if(get_param == "tab=company"){
			$("#between"). text(">");
         $("#pan_3"). text("会社概要");
			$("#tab2").prop('checked', true)
		}else if(get_param == "tab=enkaku"){
			$("#between"). text(">");
         $("#pan_3"). text("弊社の沿革");
			$("#tab3").prop('checked', true)
		}else if(get_param == "tab=map"){
			$("#between"). text(">");
         $("#pan_3"). text("アクセスマップ");
			$("#tab4").prop('checked', true)
		}
	});
	</script>

	<div class="panel_area">

<!--ここに内容を記述------------------------------------------------>

		<div id="panel1" class="tab_panel">
			<div class="company_wrap">
				<div class="company_flex">
					<h2 class="h2">代表ごあいさつ</h2>
					<h5 class="lato company_h5">GREETING</h5>
				</div>

				<h4 class="company_h4">産業界のさらなる発展に向けて</h4>
				<p class="company_text2">
					皆様にはつねづね格別のご愛顧を賜り心からお礼申し上げます。
				</p>
				<p class="company_text2">
					お蔭をもちまして、当社は昭和15年阪神水道工業所として発足以来、今日まで、長年の歴史を重ねて水道事業の一環であります「メーター」に生き、産業界の発展と社会生活の向上に貢献するため、その製作に情熱を傾けてまいりました。
				</p>
				<p class="company_text2">
					この間、日本経済の躍進と共にプラスチックの精密形成に進出する好機を得、弱電気部門に飛躍的な進展を遂げ、阪神計器グループ会社の成長を迎えましたのも、偏に皆様のご支援賜りと存じ、深く感謝申し上げるところでございます。
					</p>
				<p class="company_text2">
					さらに斯界のニーズにお応え申し上げるべく、最新の機械設備を導入し高精度の金型製作を開始、より深い信頼の獲得と創造へのより早い技術の育成、ユーザー各位へのよりきめ細やかな奉仕を実践していく所存でございます。
					</p>
				<p class="company_text2">
					産業界は今大きな変革期を迎えています。私たちは激変する環境に対応し、時代の要請に的確に応えるため製造販売一体となり会社をあげて日夜努力を重ねております。今後ともより一層のご支援とご指導をお願い申し上げます。
				</p>
				<div class="president">
					<p>代表取締役社長　松田健仁</p>
				</div>
			</div>
			</div>
<!--ここに内容を記述------------------------------------------------>

		<div id="panel2" class="tab_panel">

			<div class="company_wrap">
				<div class="company_flex">
					<h2 class="h2">会社概要</h2>
					<h5 class="lato company_h5">COMPANY PROFILE</h5>
				</div>
				<table class="company_table">
					<tbody><tr class="company_tr">
						<th class="company_th">社名</th>
						<td class="company_td">株式会社阪神計器製作所</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th">創業</th>
						<td class="company_td">昭和15年4月1日</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th">代表者</th>
						<td class="company_td">代表取締役社長　松田健仁</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th">資本金</th>
						<td class="company_td">6,000万円</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th">取引銀行</th>
						<td class="company_td">三菱UFJ銀行、三井住友銀行、阿波銀行、商工組合中央金庫</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">許可・登録</th>
						<td class="company_td">
							<ul>
								<li>■ 一般建築業許可　管工事業（管）第202045号</li>
								<li>■ 指定製造事業者指定</li>
								<li>・水道メーター第1類　指定番号　102802</li>
								<li>・水道メーター第2類　指定番号　112802</li>
								<li>■ プライバシーマーク認定　認定番号　第20000152</li>
								<li>■ 古物商許可証　認定番号　第631311200013</li>
								<li>■ 金属くず商証　認定番号　第1311200001</li>
							</ul>
						</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">生産規模</th>
						<td class="company_td">
							<ul>
								<li>西宮工場　敷地：2,397㎡ 建物：3,157㎡</li>
<!-- 								<li>宝塚工場　敷地：486㎡　建物：196㎡</li>
								<li>三重工場　敷地：450㎡　建物：363㎡</li> -->
							</ul>
						</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">営業品目</th>
						<td class="company_td">
							<ul>
								<li>水道メーター製造販売</li>
								<li>水道メーター改造修理</li>
								<li>水道メーター部品販売</li>
								<li>水道メーター取替工事</li>
								<li>各種精密金型製造販売</li>
								<li>小型歯車製造販売</li>
							</ul>
						</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">事業所</th>
						<td class="company_td">
							<ul class="company_ul">
								<li>本社</li>
								<li>〒660-0884<span class="space"></span>兵庫県尼崎市神田中通4丁目163番地</li>
								<li>TEL 06-6411-2590<span class="space"></span>FAX 0798-66-8287</li>
							</ul>
							<ul class="company_ul">
								<li>西宮支店</li>
								<li>〒663-8105<span class="space"></span>兵庫県西宮市中島町9番10号</li>
								<li>TEL 0798-67-5347<span class="space"></span>FAX 0798-64-1104</li>
							</ul>
							<ul class="company_ul">
								<li>関東支店</li>
								<li>〒108-0014<span class="space"></span>東京都港区芝4丁目6番14号</li>
								<li>TEL 03-5419-7481<span class="space"></span>FAX 03-5419-7482</li>
							</ul>
							<ul class="company_ul">
								<li>大阪営業所</li>
								<li>〒563-0043<span class="space"></span>大阪府池田市神田1-16-14</li>
								<li>TEL:072-751-3627<span class="space"></span>FAX 072-751-3628</li>
							</ul>
							<ul class="company_ul">
								<li>西宮工場</li>
								<li>〒663-8105<span class="space"></span>兵庫県西宮市中島町9番10号</li>
								<li>TEL 0798-67-5347</li>
							</ul>
							<ul class="company_ul">
<!-- 								<li>宝塚工場</li>
								<li>〒665-0825<span class="space"></span>兵庫県宝塚市安倉西3丁目1番15号</li>
								<li>TEL 0797-86-9390</li>
							</ul>
							<ul class="company_ul">
								<li>三重工場</li>
								<li>〒516-0113<span class="space"></span>三重県度会郡南伊勢町斎田594番地</li>
								<li>TEL 0599-65-3234</li> -->
							</ul>
						</td>
					</tr>
				</tbody></table>
			</div>
			</div>

<!--ここに内容を記述------------------------------------------------>

		<div id="panel3" class="tab_panel">

			<div class="company_wrap">
				<div class="company_flex">
					<h2 class="h2">弊社の沿革</h2>
					<h5 class="lato company_h5">OUTLINE</h5>
				</div>
				<table class="company_table">
					<tbody><tr class="company_tr">
						<th class="company_th" valign="top">昭和15年4月</th>
						<td class="company_td">尼崎市神田中通4丁目163番地（現本社）に合資会社阪神水道工業所を資本金3万5千円で創立し、水道メーター修理事業を開始。</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和23年2月</th>
						<td class="company_td">水道メーター部分品の製造販売を開始</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和26年8月</th>
						<td class="company_td">水道メーター（新品）の製造販売を開始</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和34年3月</th>
						<td class="company_td">資本金を210万円に増資し、西宮工場を西宮市小曽根町1丁目37番地に新設</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和36年10月</th>
						<td class="company_td">西宮工場を西宮市中島町9番10号に移転（現西宮支店、西宮工場）</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和36年11月</th>
						<td class="company_td">商号を合資会社阪神計器製作所に変更</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和37年3月</th>
						<td class="company_td">精密成型部門の充実を図り、プラスチック製水道メーターの製造販売を開始</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和37年5月</th>
						<td class="company_td">計器開発部門並びに精密成型部門を分離し、資本金210万円で松田計器株式会社を設立</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和37年8月</th>
						<td class="company_td">松田計器株式会社と合資会社阪神計器製作所を合併、資本金を420万円とし商号を株式会社阪神計器製作所に変更</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和39年12月</th>
						<td class="company_td">資本金を1,100万円に増資</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和40年12月</th>
						<td class="company_td">資本金を1,320万円に増資</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和41年11月</th>
						<td class="company_td">優良企業として中小企業庁長官賞を受賞</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和42年1月</th>
						<td class="company_td">資本金を1,650万円に増資</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和42年6月</th>
						<td class="company_td">プラスチック部門を分離し株式会社タイガープラスチックを設立（宝塚市安倉西3丁目1番15号）</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和43年2月</th>
						<td class="company_td">資本金を2,000万円に増資</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和44年12月</th>
						<td class="company_td">三重県度会郡南勢町斎田594番地に、三重工場として神勢工業株式会社を設立（三重工場）</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和45年1月</th>
						<td class="company_td">資本金を2,500万円に増資</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和47年4月</th>
						<td class="company_td">資本金を3,000万円に増資</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和47年9月</th>
						<td class="company_td">東京支店を東京都港区浜松町1丁目15番10号に開設</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和55年8月</th>
						<td class="company_td">西宮支店を西宮市中島町9番10号に開設</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和56年1月</th>
						<td class="company_td">資本金を4,000万円に増資</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和56年5月</th>
						<td class="company_td">東京支店を東京都港区芝大門1丁目16番4号に移転</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和57年1月</th>
						<td class="company_td">資本金を4,800万円に増資</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和59年6月</th>
						<td class="company_td">精密成型金型部門を新設し、各種精密金型の製造販売開始</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">昭和61年1月</th>
						<td class="company_td">資本金を6,000万円に増資</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">平成3年1月</th>
						<td class="company_td">仙台営業所を仙台市青葉区八幡町2丁目4番19号に開設</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">平成5年1月</th>
						<td class="company_td">仙台営業所を仙台市宮城野区榴岡2丁目1番15号に移転</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">平成9年8月</th>
						<td class="company_td">東京支店を関東支店と名称を変更し、東京都港区芝4丁目6番14号に移転</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">平成9年11月</th>
						<td class="company_td">通商産業大臣より指定製造事業者の指定を受ける</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">平成10年4月</th>
						<td class="company_td">仙台営業所を白石市半沢屋敷前57番地に移転</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">平成16年6月</th>
						<td class="company_td">西宮工場を増設</td>
					</tr>
					<tr class="company_tr">
						<th class="company_th" valign="top">平成20年1月</th>
						<td class="company_td">プライバシーマーク認定を取得</td>
					</tr>
				</tbody></table>




			</div>
			</div>

<!--ここに内容を記述------------------------------------------------>

		<div id="panel4" class="tab_panel">

			<div class="company_wrap">
				<div class="company_flex">
					<h2 class="h2">アクセスマップ</h2>
					<h5 class="lato company_h5">ACCESS MAP</h5>
				</div>
				<div class="access_box">
				<h4 class="company_h4">本社</h4>
				<p>〒660-0884　兵庫県尼崎市神田中通4丁目163番地</p>
				<p>TEL 06-6411-2590 FAX 0798-66-8287</p>
				</div>
				<div class="access_box">
				<h4 class="company_h4">西宮支店・西宮工場</h4>
				<p>〒663-8105　兵庫県西宮市中島町9番10号</p>
				<p>TEL 0798-67-5347　FAX 0798-64-1104</p>
<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.603031499645!2d135.36249881523332!3d34.74039928042439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000f210a4f3910f%3A0x95a86511578487b9!2z44CSNjYzLTgxMDUg5YW15bqr55yM6KW_5a6u5biC5Lit5bO255S677yZ4oiS77yR77yQ!5e0!3m2!1sja!2sjp!4v1546917109311" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
				</div>
				<div class="access_box">
				<h4 class="company_h4">関東支店</h4>
				<p>〒108-0014　東京都港区芝4丁目6番14号</p>
				<p>TEL 03-5419-7481　FAX 03-5419-7482</p>
				</div>
				<div class="access_box">
				<h4 class="company_h4">大阪営業所</h4>
				<p>〒563-0043 大阪府池田市神田1-16-14</p>
				<p>TEL:072-751-3627 FAX:072-751-3628</p>
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
