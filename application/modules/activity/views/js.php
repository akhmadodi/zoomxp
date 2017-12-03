<!-- JS -->
<script src="<?php echo base_url(); ?>public/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/barrating.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap-slider.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/fancybox.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/custom_js.js?1.1<?php echo rand(); ?>"></script>

<!-- Function -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.star-rating').barrating({
            theme: 'css-stars',
            showSelectedRating: false,
            readonly: true
        });

        $('#datepicker').datepicker();
        $('#datepicker').on('changeDate', function() {
            $('#date_input').val(
                $('#datepicker').datepicker('getFormattedDate')
            );
        });

        $("a.fancybox").fancybox({
            'transitionIn'  :   'elastic',
            'transitionOut' :   'elastic',
            'speedIn'       :   600, 
            'speedOut'      :   200, 
            'overlayShow'   :   true,
            'overlayOpacity' : 1,
            'overlayColor' : '#000'
        });

        $(document).on('scroll',function(){
            if (typeof(rTop) != "undefined" && rTop !== null) {
                rTop = rTop;
            }else{
                rTop = $('#right_content').offset().top;
            }
            if ($(document).width() >= 970) {
                if ($(this).scrollTop() >= (rTop-70) ) {
                    $('#right_content').css({'position':'fixed','top':'70px','width':($('#right_content').parent().width())});
                    console.log(($(this).scrollTop()+70+$('#right_content').height()), $('#footer').offset().top,($('#footer').offset().top-50-$('#right_content').height()));
                    if (($(this).scrollTop()+70+$('#right_content').height()) >= ($('#footer').offset().top-50)) {
                        $('#right_content').css({'position':'relative','top': ($('#footer').offset().top-50-$('#right_content').height()-rTop) });
                    }
                }else{
                    $('#right_content').css({'position':'relative','top':'0'});
                }
            }else{
                $('#right_content').css({'position':'initial','width':'auto'});
            }
        })
    })
</script>