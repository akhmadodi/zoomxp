$(document).ready(function(){
	$('#mob_menu').on('click',function(){
		$('#mobile_nav').fadeIn('fast');
		$('#nav-side').animate({'right':0},'fast');
		$('body').css('overflow-y','hidden');
	});
	$('.mnav-dismiss').on('click',function(){
		$('#mobile_nav').fadeOut('fast');
		$('#nav-side').animate({'right':'-100%'},'fast');
		$('body').css('overflow-y','visible');
	})

	$(document).on('scroll',function(){
		if ($('body').scrollTop()>0) {
			$('.m_header').addClass('sticky');
		}else{
			$('.m_header').removeClass('sticky');
		};
	});
})