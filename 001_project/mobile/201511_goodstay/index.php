<?php
$osType = '';
if(preg_match('/(iPod|iPad|iPhone)/', $_SERVER['HTTP_USER_AGENT'])) {
	$osType = "iOS";
}
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
		<meta name="format-detection" content="telephone=no, address=no, email=no" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="format-detection" content="telephone=no, address=no, email=no">
		<title>좋은 숙박의 문을 열다. 야놀자가 시작합니다.</title> 
		<link rel="icon" href="http://image2.yanolja.com/site/imageFile/wp-content/themes/customize/scripts/icon/ya1.ico" type="image/x-icon">
		<link rel="stylesheet" href="css/default.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/idangerous.swiper.css">		
		<script src="./js/jquery-1.8.3.min.js"></script>	
		<?php if ($osType == 'iOS') { ?>
		<script>
			$(document).ready(function(){
				$('body').scrollTop(20);
			});
		</script>
		<?php } ?>
	</head>
	<body style="bgcolor:black">
		<div class="skip_navigation"><a href="#contents">본문 바로가기</a></div> 
		<div id="wrap" class="good_stay">
			<div id="container">
				<div id="contents"> 
					<div class="cont main">
						<h1><a href="http://m.yanolja.com" class="ico_logo_yanolja"><span class="hide">야놀자</span></a><a href="http://m.goodstay.yanolja.com" class="txt_good_stay"><span class="hide">좋은 숙박 캠페인</span></a></h1>
						<div class="img_area">
							<h2><img src="http://image2.yanolja.com/event_img/good-stay/m/img_txt_main.png" width="275" height="141" alt="좋은 숙박의 문을 열다"/></h2>
						</div>
					</div>
					<div class="cont app_down">
						<?php if ($osType == 'iOS') { ?>
						<div class="inner">
							<span class="ico_appstore"></span><span>앱 다운로드</span>
							<ul class="btn_area">
								<li>
									<a href="https://itunes.apple.com/kr/app/yanoljasugbag-motel-hotel/id436731843?mt=8">야놀자</a>
								</li>
								<li>
									<a href="https://itunes.apple.com/kr/app/yanoljadang-yeyag-motel-hotel/id936603765?mt=8">야놀자 바로예약</a>
								</li>
							</ul>
						</div>
						<?php } else { ?>
						<div class="inner">
							<span class="ico_google"></span><span>앱 다운로드</span>
							<ul class="btn_area">
								<li>
									<a href="market://details?id=com.cultsotry.yanolja.nativeapp">야놀자</a>
								</li>
								<li>
									<a href="market://details?id=co.kr.yanolja.now">야놀자 바로예약</a>
								</li>
							</ul>
						</div>
						<?php } ?>
					</div>
					<div class="cont sub">
						<div class="img_area">
							<h3><img src="http://image2.yanolja.com/event_img/good-stay/m/img_txt_sub1.png" width="140" height="55" alt="프리미엄 객실, 뜻밖의 선물 MY ROOM"/></h3>
						</div>
						<div class="slide_area">
							<div id="slideMyroom" class="swiper-container">
						        <div class="swiper-wrapper">
						            <div class="swiper-slide">
						            	<div class="slide-inner">
						            		<img src="http://image2.yanolja.com/event_img/good-stay/m/img_myroom_cont1.png"/>
						            		<span class="slide-txt">호텔 수준의 프리미엄 비품 MY KIT</span>
						            	</div>
						            </div>
						            <div class="swiper-slide">
						            	<div class="slide-inner">
						            		<img src="http://image2.yanolja.com/event_img/good-stay/m/img_myroom_cont2.png"/>
						            		<span class="slide-txt">5만원 상당의 특별한 선물 MY KIT</span>
						            	</div>
						            </div>
						            <div class="swiper-slide">
						            	<div class="slide-inner">
						            		<img src="http://image2.yanolja.com/event_img/good-stay/m/img_myroom_cont3.png"/>
						            		<span class="slide-txt">고급 디퓨저 전 객실 설치</span>
						            	</div>
						            </div>
						        </div>
						        <!-- Add Pagination -->
						        <div class="swiper-pagination  pagination1"></div>
						    </div>
						</div>
						<div class="txt_area">
							<p><b>MY ROOM</b>은 야놀자에서 엄선한 좋은 숙소입니다.<br/>전문 청소 업체의 손길 및 양키캔들 디퓨저 배치를 통해 깨끗하고 쾌적한 환경에서 편안한 휴식을 즐기세요.<br/><br/>
<b>MY KIT</b>는 호텔 수준의 프리미엄 비품과 더불어 깜짝 선물을 담아 모든 MY ROOM 이용자들께 제공해 드립니다.<br/>뜻밖의 감동이 있는 선물 MY KIT는 오직 야놀자 바로예약에서만 만날 수 있습니다.</p>
						</div>
					</div>
					<div class="cont sub1">
						<div class="img_area">
							<h3><img src="http://image2.yanolja.com/event_img/good-stay/m/img_txt_sub2.png" width="143" height="62" alt="안심하고 쉴 수 있는 몰카 안심존"/></h3>
						</div>
						<div class="slide_area">
							<div id="slideMolca" class="swiper-container">
						        <div class="swiper-wrapper">
						            <div class="swiper-slide">
						            	<div class="slide-inner">
						            		<img src="http://image2.yanolja.com/event_img/good-stay/m/img_sub_cont1.png"/>
						            		<span class="slide-txt">모텔 호텔 검색</span>
						            	</div>
						            </div>
						            <div class="swiper-slide">
						            	<div class="slide-inner">
						            		<img src="http://image2.yanolja.com/event_img/good-stay/m/img_sub_cont2.png"/>
						            		<span class="slide-txt">몰카 안심존 확인</span>
						            	</div>
						            </div>
						            <div class="swiper-slide">
						            	<div class="slide-inner">
						            		<img src="http://image2.yanolja.com/event_img/good-stay/m/img_sub_cont3.png"/>
						            		<span class="slide-txt">제휴점 이용</span>
						            	</div>
						            </div>
						        </div>
						        <!-- Add Pagination -->
						        <div class="swiper-pagination pagination2"></div>
						    </div>
						</div>						
						<div class="txt_area">
							<p>야놀자는 건강하고 안전한 숙박 문화 조성을 위해 야놀자 인증 프로그램을 운영, 그 첫번째로 <b>‘몰카 안심존’</b> 프로젝트를 진행하고 있습니다.<br/><br/>
야놀자 앱을 통해 <b>‘몰카 안심존’</b> 숙박 업체를 미리 확인하시고 좋은 숙박 안심하고 이용하세요.</p>
						</div>
					</div>
					<div class="cont">
						<div class="img_area">
							<h3><img src="http://image2.yanolja.com/event_img/good-stay/m/img_txt_sub3.png" width="126" height="60" alt="필요한 시간만큼 쉴 수 있는 Dayuse"/></h3>
						</div>
						<ul>
							<li>
								<img src="http://image2.yanolja.com/event_img/good-stay/m/img_dayuse_01.png"/>
								<span>데이트</span>									
							</li>
							<li>
								<img src="http://image2.yanolja.com/event_img/good-stay/m/img_dayuse_02.png"/>
								<span>이벤트</span>									
							</li>
							<li>
								<img src="http://image2.yanolja.com/event_img/good-stay/m/img_dayuse_03.png"/>
								<span>파티</span>									
							</li>
						</ul>
						<div class="txt_area">
							<p>숙소가 꼭 잠을 자기 위해 필요한 것은 아니죠. 원하는 장소를 필요한 시간만큼만 사용하는 가장 합리적인 서비스 <b>Dayuse(대실)</b>. 데이트, 파티, 이벤트 등 다양한 목적에 맞게 이용할 수 있습니다.<br/><br/>
필요한 시간만큼 쉴 수 있는 <b>Dayuse(대실)</b>, 야놀자에서는 미리 예약하고 이용할 수 있습니다.</p>
						</div>
					</div>
				</div><!--//#contents -->
			</div><!--//#container -->
			<div id="footer">		
				<div class="footer_inner">
					<?php if ($osType == 'iOS') { ?>
					<ul class="f_downlinks">
						<li>
							좋은 숙박의 문을 열다<br><span class="company">야놀자</span>
							<div class="f_btn_area appstore">
								<a href="https://itunes.apple.com/kr/app/yanoljasugbag-motel-hotel/id436731843?mt=8"><span class="hide">야놀자 앱스토어</span></a>
							</div>
						</li>
						<li>
							좋은 숙박 바로 예약하기<br><span class="company">야놀자 바로예약</span>
							<div class="f_btn_area appstore">
								<a href="https://itunes.apple.com/kr/app/yanoljadang-yeyag-motel-hotel/id936603765?mt=8"><span class="hide">야놀자 바로예약 앱스토어</span></a>
							</div>
						</li>						
					</ul>
					<?php } else { ?>
					<ul class="f_downlinks">
						<li>
							좋은 숙박의 문을 열다<br><span class="company">야놀자</span>
							<div class="f_btn_area google">
								<a href="market://details?id=com.cultsotry.yanolja.nativeapp"><span class="hide">야놀자 구글플레이</span></a>
							</div>
						</li>
						<li>
							좋은 숙박 바로 예약하기<br><span class="company">야놀자 바로예약</span>
							<div class="f_btn_area google">
								<a href="market://details?id=co.kr.yanolja.now"><span class="hide">야놀자 바로예약 구글플레이</span></a>
							</div>
						</li>						
					</ul>
					<?php } ?>
					<div class="adress">
						<b>(주)야놀자</b> 대표 : 이수진 사업자번호 : 220-87-42885 강남-14211호<br/>주소 : (06045) 서울 강남구 학동로 11길 6 (논현동 56-14)<br/>Copyright ⓒ <b>Yanolja</b> Corp. All rights reserved.
					</div>
				</div>
			</div>
			<a href="#" class="btn_top"><span class="hide">top</span></a>
		</div><!-- //#wrap -->
		<!-- script -->
		<script src="js/idangerous.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/common.js"></script>	
	</body>
</html>
