<!-- CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/zoom.css?1.3<?php echo rand(); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/barrating.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/bootstrap-slider.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/bootstrap-datepicker3.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/fancybox/fancybox.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/custom_style.css?1.1<?php echo rand(); ?>" type="text/css">

<!-- this is zoom gtm for whole website -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-NC2F2B" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<!-- Custom Style -->
<style>
    .banner { height: 400px; background:url(<?php echo base_url(); ?>public/assets/img/gift/header.png); background-size: cover; background-position-x: 46%; }
    .banner h2 { font-size: 30px; margin: 0; }
    .banner.g_row1:before { content: ""; position: absolute; width: 100%; height: 100%; background: rgba(0,0,0,0.4); z-index: 1; }
    .banner .g_c_mid { width: 100%; top: 50%; padding: 0 10px; }

    /* Gift Content */
    #gift_content { padding: 50px 10px; }
    .gift_title { font-size: 18px; color: #000; margin-top: 0; margin-bottom: 30px; }
    #gift_ribbon { display: inline-block; max-width: 350px; position: relative; margin-bottom: 80px; }
    #gift_ribbon h3 { color: #EE3937; position: absolute; width: 100%; text-align: center; top: 28.5%; }
    .gift_btn { padding: 20px; width: 130px; display: inline-block; border: 2px solid #EEE; border-radius: 30px; cursor: pointer; margin-bottom: 10px; }
    #gift_btn_list { margin-bottom: 60px; }
    #gift_btn_list .gift_btn:hover { box-shadow: 3px 3px 10px #f1d3d5; }
    #cart_box { display: inline-block; max-width: 520px; width: 100%; background: #efefef; padding: 25px 45px; border-radius: 20px; margin-bottom: 40px; }
    #cart_box table { margin-bottom: 35px; }
    #cart_box thead tr th { padding-bottom: 5px; }
    #cart_box thead tr th:nth-child(1) { width: 70%; }
    #cart_box thead tr th:nth-child(2) { width: 10%; }
    #cart_box thead tr th:nth-child(3) { width: 20%; }
    #cart_box input.amount { padding: 6px 25px; color: #EE3937; font-weight: bold; font-size: 14px; }
    #cart_box input.quantity { text-align: center; }
    #cart_box .add_more { text-align: left; font-size: 10px; color: #555; padding-top: 7px; }
    #cart_box .btn_add_cart { background: #7bbe31; color: #FFF; padding: 10px 40px; border-radius: 30px; font-weight: bold; }
    #gift_desc { display: inline-block; width: 100%; max-width: 450px; font-weight: bold; margin-bottom: 20px; }

    @media(max-width: 767px){
        .banner { height: 300px; }
        .banner h2 { font-size: 24px; padding: 0 20px; }

        /* Gift Content */
        #gift_ribbon { margin-bottom: 40px; }
        #gift_btn_list { margin-bottom: 40px; }
        #cart_box { padding: 15px; }
    }
</style>