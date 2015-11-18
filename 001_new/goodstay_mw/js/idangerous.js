;(function(){if($('.swiper-container.item-cards').length>0){$('.swiper-container.item-cards').each(function(){var s=$(this);s.swiper({slidesPerView:'auto',grabCursor:true,calculateHeight:true});})}
if($('.worlds-best').length>0){$('.worlds-best').swiper({slidesPerView:'auto',grabCursor:true,centeredSlides:true,onSwiperCreated:function(s){if(!Modernizr.touch)$(s.activeSlide()).find('video')[0].play()},onSlideChangeStart:function(s){$(s.container).find('video').each(function(){this.pause()})
if(!Modernizr.touch)$(s.activeSlide()).find('video')[0].play()},onSwiperCreated:function(s){s.reInit(true)}})
setTimeout(function(){$('.worlds-best').data('swiper').reInit(true)},1000)}
if($('.single-item-screenshots').length>0){$('.single-item-screenshots .swiper-container').swiper({slidesPerView:'auto',calculateHeight:true,grabCursor:true,autoplay:3000})}
$('.idangerous-menu-responsive-pane .opener').click(function(){$('.idangerous-menu-inner ul.idangerous-menu').toggleClass('opened')
$('.idangerous-menu-responsive-pane').toggleClass('opened');})
$('a.pop-content').click(function(e){e.preventDefault();$.get($(this).attr('href'),function(data){$('.popup-content').html(data)
$('.popup-layer').show()
$('.popup').css({display:'block',top:Modernizr.touch?$(window).scrollTop():$(window).scrollTop()+100})})})
$('.popup-layer, .popup-close').click(function(){$('.popup, .popup-layer').hide()
$('.popup-content').html('')})
$(document).on('ajaxStart',function(){$('.ajax-loader').show()})
$(document).on('ajaxComplete ajaxError',function(){$('.ajax-loader').hide()})
$('.user-tabs a').click(function(e){e.preventDefault();$('.user-tabs .active').removeClass('active')
$(this).addClass('active')
$('.user-tab.active').removeClass('active')
$('.user-tab').eq($(this).index()).addClass('active')})
$('select').chosen({disable_search:true})
$("#register-form").submit(function(){val_n_length();val_u_length();val_p_length();val_pass_2();val_11();validateEmail();validateTerms();if($("#reg_name,#reg_agree,#reg_username,#reg_password_1,#reg_password_2,#email,#validation_code").hasClass("required")){return false;}
else return true;})
$("#support-form").submit(function(){val_issue();val_11();val_u_length();validateEmail();validateMessage()
if($("#validation_code,#email,#message,#supportIssue,#reg_username").hasClass("required")){return false;}
else return true;})
$("#user_form").submit(function(){val_n_length();val_u_length();if($.trim($("#reg_password_1").attr("value"))!==""){val_p_length();val_np1_length();val_np2_length();}
validateEmail();if($("#reg_name,#reg_username,#reg_password_1,#new_reg_password_1,#new_reg_password_2,#email,#validation_code").hasClass("required")){return false;}
else return true;})
$("#comment-form").submit(function(){val_comment();if($("#comment_text").hasClass("required")){return false;}
else return true;})
$('.comment-reply').click(function(e){e.preventDefault()
$(window).scrollTop($('#comment-form').offset().top-200)
var id=$(this).parents('.comment').attr('id').split('comment_')[1]
$('#comment-form input[name="comment-reply-to"]').val(id)
var text=$(this).parents('.comment-text').html()
$('.comment-reply-text').html(text)
$('.comment-reply-text').find('a').parent().remove()
$('.comment-reply-to').slideDown(300)})
$('#reg_name').on('keyup keydown',function(){val_n_length()})
$('#reg_username').on('keyup keydown',function(){val_u_length()})
$('#reg_password_1').on('keyup keydown',function(){val_p_length();val_pass_2()})
$('#reg_password_2').on('keyup keydown',function(){val_pass_2()})
$('#email').on('keyup keydown',function(){validateEmail()})
$('#validation_code').on('keyup keydown',function(){val_11()})
$('#reg_agree').on('change',function(){validateTerms()})
$('#supportIssue').on('change',function(){val_issue()})
$('#comment_text').on('keyup keydown',function(){val_comment()})
function val_n_length(){if($.trim($("#reg_name").val()).length<5){$("#reg_name").addClass("required")}
else{$("#reg_name").removeClass("required")}}
function validateTerms(){if($("#reg_agree:checked").val()==null){$("#reg_agree").addClass("required")
$("#reg_agree").parent("label").addClass("required")}
else{$("#reg_agree").removeClass("required")
$("#reg_agree").parent("label").removeClass("required")}}
function val_u_length(){if($.trim($("#reg_username").val()).length<5){$("#reg_username").addClass("required")}
else{$("#reg_username").removeClass("required")}}
function val_p_length(){if($.trim($("#reg_password_1").val()).length<6){$("#reg_password_1").addClass("required")}
else{$("#reg_password_1").removeClass("required")}}
function val_np1_length(){if($.trim($("#new_reg_password_1").val()).length<6){$("#new_reg_password_1").addClass("required")}
else{$("#new_reg_password_1").removeClass("required")}}
function val_pass_2(){if(($("#reg_password_1").val()!==$("#reg_password_2").val())||$("#reg_password_2").val()==""){$("#reg_password_2").addClass("required")}
else{$("#reg_password_2").removeClass("required")}}
function val_np2_length(){if(($("#new_reg_password_1").val()!==$("#new_reg_password_2").val())||$("#new_reg_password_2").val()==""){$("#new_reg_password_2").addClass("required")}
else{$("#new_reg_password_2").removeClass("required")}}
function val_11(){if($("#validation_code").val()!=="11"){$("#validation_code").addClass("required")}
else{$("#validation_code").removeClass("required")}}
function val_comment(){if($.trim($("#comment_text").val()).length<10){$("#comment_text").addClass("required")}
else{$("#comment_text").removeClass("required")}}
function val_issue(){if($("#supportIssue").val()=="select-an-issue"){$("#supportIssue").addClass('required')}
else $("#supportIssue").removeClass('required')}
function validateEmail(){email=$("input#email").val()
var re=/^\w+([\.-]?\w+)*@(((([a-z0-9]{2,})|([a-z0-9][-][a-z0-9]+))[\.][a-z0-9])|([a-z0-9]+[-]?))+[a-z0-9]+\.([a-z]{2}|(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum|mobi|travel))$/i;if(re.test(email))$("input#email").removeClass("required")
else $("input#email").addClass("required")}
function validateMessage(){message=$("textarea#message").val();m_length=message.length;if(m_length<10)$("textarea#message").addClass("required");else $("textarea#message").removeClass("required");}
function sendMessage(){validateEmail()
validateMessage();if(!$("#contacts input,#contacts textarea").hasClass("required")){var email=$("input#email").attr("value");jQuery.post("includes/validate_email.php",{email:email},function(data){if(data!=1){$("input#email").addClass("required")};if(data==1){$("input#email").removeClass("required")
name=$("input#name").attr("value");email=$("input#email").attr("value");subject=$("input#subject").attr("value");message=$("textarea#message").val().replace(/<\/?[^>]+>/gi,'');jQuery.post("includes/send_message.php",{name:name,email:email,subject:subject,message:message},function(status){$("#message_status").html(status)
$("#contacts").slideUp(300,0,function(){$(this).remove()
$("#message_status").delay(300).slideDown(300,function(){fixSideBar()});})});};})}}})();