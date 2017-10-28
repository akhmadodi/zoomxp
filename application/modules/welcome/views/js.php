<!-- JS -->
<script src="<?php echo base_url(); ?>public/frontend/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>public/frontend/js/owl.carousel2.js"></script>
<script src="<?php echo base_url(); ?>public/frontend/js/custom_js.js"></script>

<!-- Function -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#head_owl').owlCarousel({
            loop:true,
            autoplay:true,
            autoplayTimeout:10000,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                }
            }
        })
        $('#foot_owl').owlCarousel({
            loop:true,
            autoplay:true,
            margin:10,
            autoplayTimeout:10000,
            responsiveClass:true,
            nav: true,
            navText: ["<img src='<?php echo base_url(); ?>public/frontend/img/nav_arrow_left.png'>","<img src='<?php echo base_url(); ?>public/frontend/img/nav_arrow_right.png'>"],
            responsive:{
                992:{
                    items:3,
                },
                768:{
                    items:2,
                },
                0:{
                    items:1,
                }
            }
        })
    })
</script>
