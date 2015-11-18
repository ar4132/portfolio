//슬라이드-MYROOM
var swiper = new Swiper('#slideMyroom', {
    pagination: '.pagination1',
    paginationClickable: true,
    spaceBetween: 30,
    mode : 'horizontal'
});
//슬라이드-몰카안심존
var swiper = new Swiper('#slideMolca', {
    pagination: '.pagination2',
    paginationClickable: true,
    spaceBetween: 30,
    mode : 'horizontal'
});

//top 버튼 on/off
$(window).scroll(function () {
	var scrollHeight = $(document).scrollTop();
	if ( scrollHeight >= 562 ){
		$('.btn_top').css('display', 'block');
	}else{
		$('.btn_top').css('display', 'none');
	}
});
