$(document).ready(function(){	
	
	// 상품평가 팝업 on/off
	$('.btn_show').click(function(){	
		$('#mykit_wrap').addClass('on');
	});
	
	$('#mykit_wrap').css('height', $(window).height());
	//팝업창이 디바이스 높이보다 클경우(팝업 잘릴경우)
	if ( $('#pop_rap').height() > $(window).height() ){
		$('#mykit_wrap').css('height', $('#pop_rap').height()+88);
	}
	//디바이스 사이즈 바뀔때 처리
	$(window).resize(function() {
		$('#mykit_wrap.on').css('height', $(window).height());
		//팝업창이 디바이스 높이보다 클경우(팝업 잘릴경우)
		if ( $('#pop_rap').height() > $(window).height() ){
			$('#mykit_wrap.on').css('height',  $('#pop_rap').height()+88);
		}
	});
	
	$('.btn').click(function(){
		$('#mykit_wrap').removeClass('on');
	});
	
	// 상품평가 버튼 선택 on/off
	$('.btn_inner ul li').click(function(){
		if(!$(this).hasClass('on')){
			$('.btn_inner ul li.on').removeClass('on');
		}
		$(this).addClass('on');
	});
	
	//상품평가 체크리스트 on/off
	$('.btn_inner ul.type3 li label').click(function(){
		$(this).toggleClass('on');
	});	
	/*
	$('.btn_serch').click(function(){
		$('#mykit_wrap').addClass('on');
	});*/	
		 
});

	