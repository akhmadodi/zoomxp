<!-- CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/zoom.css?1.3<?php echo rand(); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/owl.carousel2.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/custom_style.css?1.1<?php echo rand(); ?>" type="text/css">

<!-- this is zoom gtm for whole website -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-NC2F2B" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<!-- Custom Style -->
<style type="text/css">
    .banner,.banner .item .m_bg { height: 500px; }
    .banner.g_row1 .item .m_bg:before { content: ""; position: absolute; width: 100%; height: 100%; background: rgba(0,0,0,0.2); z-index: 1; }
    .banner .g_c_mid { width: 550px; }
    .banner button { color: #FFF; }

    .index_list .g_main { max-width: 1000px; }

    /*Section 1*/
    #head_owl .owl-stage-outer { height: 100%; }
    #head_owl .owl-dots { position: absolute; bottom: 10%; left: 50%; transform: translateX(-50%); }
    #head_owl .owl-dots .owl-dot { padding: 5px; display: inline-block; background: rgba(250,250,250,0.6); border-radius: 50%; margin: 7px; }
    #head_owl .owl-dots .owl-dot.active { background: rgba(250,250,250,1); }
    .promise { padding: 20px 5%; text-align: center; }
    .promise .row { max-width: 900px; display: inline-block; }

    /*Section 2*/
    .box_thumb1 { position: relative; display: inline-block; text-align: left; max-width: 300px; overflow: hidden; }
    .box_thumb1:before { content: ""; position: absolute; width: 100%; height: 100%; background-color: rgba(0,0,0,0.3); z-index: 1; }
    .box_thumb1 img { transition: 0.1s ease-in; }
    .box_thumb1:hover img { transform: scale(1.1); -ms-transform: scale(1.1); -webkit-transform: scale(1.1); transition: 0.2s ease-in; }
    .box_thumb1 p { color: #fff; font-size: 30px; text-align: center; z-index: 2; }
    .box_thumb2 { position: relative; transition: 0.2s ease-in; overflow: hidden; }
    .box_thumb2:hover .bt2_content { opacity: 1; transition: 0.2s ease-in; }
    .box_thumb2 .bt2_content { position: absolute; bottom: 0; opacity: 0; width: 100%; padding: 7px; background: rgba(0,0,0,0.6); color: #fff; transition: 0.2s ease-in; }
    .box_thumb2 .bt2_content h5 { margin-top: 0; }
    .box_thumb2 .bt2_content p { margin-bottom: 0; }

    /*Section 3*/
    .bg_img { min-height: 100px; background-image: url(<?php echo base_url(); ?>public/assets/img/section4_bg.png); background-size: cover; background-position-x: 50%; position: relative; }
    .bg_img:before { content: ""; position: absolute; width: 100%; height: 100%; background-color: rgba(0,0,0,0.3); }
    #box_voc { padding-top: 80px; padding-bottom: 80px; }
    #box_voc .button_voc { display: inline-block; background: #FF1D25; padding: 15px 50px; text-align: center; border-radius: 50px; color: #FFF; width: 100%; max-width: 450px; box-shadow: 3px 3px 5px rgba(0,0,0,0.5); }
    #box_voc .button_voc h3 { font-size: 22px; }
    #box_voc .text_voc { display: inline-block; text-align: center; color: #FFF; width: 100%; max-width: 450px; font-size: 18px; margin-top: 20px; }

    /*Section 4*/
    #sec4 .g_main { width: 1000px }
    .box_thumb3 { position: relative; display: inline-block; text-align: left; overflow: hidden; }
    .box_thumb3 { position: relative; display: inline-block; text-align: left; overflow: hidden; }
    .box_thumb3 .box_content { position: relative; bottom: 0; padding: 10px 20px; color: #FFF; }
    .box_thumb3 .box_content p { font-size: 12px; }
    #sec4 header h2 { line-height: 36px; }
    #sec4 header h2 span { color: #333; font-size: 26px; }
    #foot_owl .item { text-align: center; }
    #foot_owl .owl-nav .owl-prev { position: absolute; top: 50%; z-index: 2; transform: translateX(-50%)translateY(-50%); left: -9%; }
    #foot_owl .owl-nav .owl-next { position: absolute; top: 50%; z-index: 2; transform: translateX(50%)translateY(-50%); right: -9%; }

    .s_box1 { text-align: center; }
    .s_box1 .circle_s1 { display: inline-block; vertical-align: middle; }
    .s_box1 .s_box1_text { display:inline-block; text-align: left; width: 75%; }

    @media(max-width: 991px){
        .banner,.banner .item .m_bg { height: 400px; }
        .banner .g_c_mid { width: 90%; top: 50%; left: 50%; transform: translateY(-50%) translateX(-50%); }
        .banner h2 { font-size: 26px; }
        .banner input { padding-left: 10px; }
        .g_main { width: 100%; }
        .index_list { padding-bottom: 20px; }
        .index_list .g_main { width: 100%; }
        .banner+div { padding: 20px 15px; height: auto; }
        .s_box1 .s_box1_text { width: 70%; }

        /*Section 2*/
        .index_list .col-md-4 { text-align: center; }
        .box_thumb1 { width: 100%; margin-bottom: 20px; max-width: 350px; height: 160px; }
        .box_thumb1 img { margin-top: -20%; }
        .box_thumb2 { width: 100%; margin: auto; margin-bottom: 20px; max-width: 350px; height: 160px; }
        .box_thumb2 img { margin-top: -20%; }
        .box_thumb2 .bt2_content { opacity: 1; }

        /*Section 2*/
        #box_voc { padding-top: 50px; padding-bottom: 40px; }
        #box_voc .button_voc { padding: 5px 30px; }

        /*Section 4*/
        #sec4 .g_main { width: 100%; }
        #sec4 header h2 span { font-size: 24px; }
        .box_thumb3 { max-width: 320px; }

        /*Footer*/
        #foot_owl .owl-nav .owl-prev { left: 3%; }
        #foot_owl .owl-nav .owl-next { right: 3%; }
    }

    @media(max-width: 767px){
        .banner,.banner .item .m_bg { height: 350px; }
        hr { margin-top: 10px; margin-bottom: 10px; }

        .index_list .g_main { margin-bottom: 0 !important; }

        .banner+div { padding: 5px; }
        header.t_mid { margin-bottom: 10px !important; }
        header h2 { margin-top: 10px !important; margin-bottom: 0 !important; }
        header h3 { margin-top: 0 !important; margin-bottom: 15px !important; }

        .xs_nopad { padding: 0px; }
        .box_thumb1 { margin-bottom: 5px; max-width: 100%; }

        .box_thumb2 { margin-bottom: 10px; }

        #box_voc { padding-top: 30px; padding-bottom: 20px; }

        #sec4 .g_main { margin-bottom: 15px !important; }
        #foot_owl .owl-nav img { opacity: 0.7; width: 25px; }
    }
</style>