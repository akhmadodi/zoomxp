<!-- JS -->
<script src="<?php echo base_url(); ?>public/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/barrating.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap-slider.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/custom_js.js?1.1<?php echo rand(); ?>"></script>

<!-- Function -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.star-rating').barrating({
            theme: 'css-stars',
            showSelectedRating: false,
            readonly: true
        });

        $('[name="duration"]').slider({
            formatter: function(value) {
                return value+' Hari';
            }
        });

        $('.bf_head').on('click',function(){
            if ($(this).hasClass('c_hide')) {
                $(this).removeClass('c_hide').find('i').addClass('glyphicon-chevron-up').removeClass('glyphicon-chevron-down');
                $(this).next().slideDown('fast');
            }else{
                $(this).addClass('c_hide').find('i').addClass('glyphicon-chevron-down').removeClass('glyphicon-chevron-up');
                $(this).next().slideUp('fast');
            };
        });
        function resize_bf_head(){
            if($(document).width() < 768){
                $('.bf_head').addClass('c_hide').find('i').addClass('glyphicon-chevron-down').removeClass('glyphicon-chevron-up');
                $('.bf_head').next().slideUp('fast');
            }else{
                $('.bf_head').removeClass('c_hide').find('i').addClass('glyphicon-chevron-up').removeClass('glyphicon-chevron-down');
                $('.bf_head').next().slideDown('fast');
            }
        }
        resize_bf_head();
        $(window).on('resize',function(){
            resize_bf_head();
        })

        function no_filter_text(){
            if ($('#your_filter').serialize()!="") {
                $('#no_filter_text').hide();
            }else{
                $('#no_filter_text').show();
            };
        };

        // Filter
        $('[name="destination"]').on('change',function(){
            var val = $(this).val();
            var html = $(this).next().html();
            $('#yf_destination').html('<label><span data-remove="true"></span><input type="hidden" name="destination" value="'+val+'">'+html+'</label>');
            no_filter_text();
        });
        $('[name="activity"]').on('change',function(){
            $('#yf_activity').html("");
            $('[name="activity"]:checked').each(function(k,e){
                var val = $(this).val();
                var html = $(this).next().html();
                $('#yf_activity').append('<label><span data-remove="true"></span><input type="hidden" name="activity" value="'+val+'">'+html+'</label>');
            })
            no_filter_text();
        });
        $('[name="price"]').on('change',function(){
            var val = $(this).val();
            var html = $(this).next().html();
            $('#yf_price').html('<label><span data-remove="true"></span><input type="hidden" name="price" value="'+val+'">'+html+'</label>');
            no_filter_text();
        });
        $('[name="duration"]').on('change',function(){
            var val = $(this).val();
            var html = val+' Hari';
            $('#yf_duration').html('<label><span data-remove="true"></span><input type="hidden" name="duration" value="'+val+'">'+html+'</label>');
            no_filter_text();
        });

        $(document).on('click','.zremove [data-remove]',function(){
            $(this).parent().remove();
            no_filter_text();
        });

        no_filter_text();
    });    
</script>