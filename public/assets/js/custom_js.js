$(document).ready(function(){
	$('#mob_menu').on('click',function(){
		if(!$('#mob_nav').hasClass('active')){
			$('#mob_nav').slideDown('fast').addClass('active');
			$('.m_header').addClass('sticky');
		}else{
			$('#mob_nav').slideUp('fast').removeClass('active');
			$('.m_header').removeClass('sticky');
		}
	});
	/*$('#mob_menu').on('click',function(){
		$('#mobile_nav').fadeIn('fast');
		$('#nav-side').animate({'right':0},'fast');
		$('body').css('overflow-y','hidden');
	});*/
	$('.mnav-dismiss').on('click',function(){
		$('#mobile_nav').fadeOut('fast');
		$('#nav-side').animate({'right':'-100%'},'fast');
		$('body').css('overflow-y','visible');
	})

	$(document).on('scroll',function(){
		if ($(document).scrollTop()>0) {
			$('.m_header').addClass('sticky');
		}else{
			$('.m_header').removeClass('sticky');
		};
	});
})