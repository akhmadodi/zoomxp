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
    .banner { height: 500px; background:url(<?php echo base_url(); ?>public/assets/img/header_bg3.png); background-size: cover; background-position-x: 46%; }
    .banner h2 { font-size: 38px; margin: 0; }
    .banner.g_row1:before { content: ""; position: absolute; width: 100%; height: 100%; background: rgba(0,0,0,0.2); z-index: 1; }
    .banner .g_c_mid { width: 550px; top: 50%; }
    .banner button { color: #FFF; }
    .btn.btn_detail { background-color: #FBB03B; border-radius: 20px; color: #FFF; font-size: 13px; padding: 4px 15px; }

    #right_content { position: relative; }

    /*Section 1*/
    #breadcrump { padding-top: 20px; padding-bottom: 15px; }
    .breadcrump_list { margin-bottom: 0; }
    .breadcrump_list li { display: inline-block; margin-right: 20px; position: relative; margin-bottom: 5px; }
    .breadcrump_list li:after { content: "\e080"; font-family: 'Glyphicons Halflings'; position: absolute; right: -17px; top: 2px; font-size: 10px; }
    .breadcrump_list li:last-child { color: #888888; }
    .breadcrump_list li:last-child:after { content: ""; }

    /*Section 2*/
    #sc_content { margin-bottom: 30px; }
    .cs_rating { margin-bottom: 10px; }
    .cs_desc { color: #000; font-size: 16px; }
    .cs_desc2 { color: #000; font-size: 16px; padding: 15px; background: #EFEFEF; }
    .cs_desc2 ul li { list-style: disc; margin-left: 20px; font-size: 16px; font-family: SourceSansPro; }
    .cs_desc3 { color: #000; font-size: 16px; padding: 20px 100px 20px 15px; border: 2px solid orange; }
    .cs_desc3 ul li { list-style: disc; margin-left: 20px; font-size: 16px; font-family: SourceSansPro; }
    #contents h2 { font-family: 'Comfortaa'; font-size: 22px; color: #e9302a; }
    #contents h3 { font-size: 18px; font-weight: bold; margin-top: 0; }

    /*Radio Style1*/
    .zradio1 { display: table; position: relative; }
    .zradio1 input { opacity: 0; margin-right: 15px; }
    .zradio1 label { cursor: pointer; font-weight: normal; }
    .zradio1 label:before { content: ""; width: 15px; height: 15px; border-radius: 50%; position: absolute; border: 1px solid #555; left: 0; top: 50%; transform: translateY(-50%); }
    .zradio1 label:after { content: ""; width: 9px; height: 9px; border-radius: 50%; position: absolute; background-color: #555; left: 3px; top: 50%; transform: translateY(-50%); opacity: 0; }
    .zradio1 input:checked + label:after { opacity: 1; }
    .zcbox1 { display: table; position: relative; }
    .zcbox1 input { opacity: 0; margin-right: 15px; }
    .zcbox1 label { cursor: pointer; font-weight: normal; }
    .zcbox1 label:before { content: ""; width: 15px; height: 15px; position: absolute; border: 1px solid #555; left: 0; top: 50%; transform: translateY(-50%); }
    .zcbox1 label:after { content: ""; width: 9px; height: 9px; position: absolute; background-color: #555; left: 3px; top: 50%; transform: translateY(-50%); opacity: 0; }
    .zcbox1 input:checked + label:after { opacity: 1; }

    .zremove label { font-weight: normal; display: table; }
    .zremove [data-remove]:before { content: "\e083"; font-family: 'Glyphicons Halflings'; margin-right: 7px; top: 2px; position: relative; cursor: pointer; }
    #no_filter_text { margin: 0; display: none; }

    #foot_gallery { margin-bottom: 30px; }
    #foot_gallery h3 { display:inline-block; border-bottom: 1px solid #bc1f3a; padding-right: 20%; padding-bottom: 7px; }
    #foot_gallery .col-sm-3 { padding: 0; padding-right: 7px; }
    /*#foot_gallery .col-sm-3:last-child { padding-right: 0; }*/
    #foot_gallery .ft_box { position: relative; display: inline-block; }
    #foot_gallery .ft_box.ft_viewmore:before { content: ''; position: absolute; width: 100%; height: 100%; background: rgba(0,0,0,0.4); z-index: 1; left: 0; top: 0; }
    #foot_gallery .ft_box.ft_viewmore:after { content: 'View More+'; position: absolute; transform: translateY(-50%); left: 0; top: 50%; width: 100%; color: #FFF; text-align: center; z-index: 2; }

    #datepick_form { display: inline-block; border: 2px solid #DDD; padding: 20px; border-radius: 20px; width: 100%; max-width: 325px; }
    #datepicker h5 { border-bottom: 1px solid grey; display: inline-block; padding: 0 10px 5px 10px; margin-bottom: 15px; }
    #datepicker .datepicker-inline { width: 100%; }
    #datepicker .datepicker .datepicker-switch { text-transform: uppercase; }
    #datepicker .datepicker table tr th { font-family: 'SourceSansPro'; font-size: 12px; }
    #datepicker .datepicker table tr td { font-family: 'SourceSansPro'; font-size: 12px; font-weight: bold; position: relative; }
    #datepicker .datepicker table tr td.day:hover { background-color: transparent; color: #FFF; font-weight: bold; }
    #datepicker .datepicker table tr td.day:hover:before { content: ''; background-color: #e6212b; opacity: 0.6; border-radius: 50px; position: absolute; width: 23px; height: 23px; z-index: -1; left: 50%; top: 52%; transform: translateX(-50%)translateY(-50%); }
    #datepicker .datepicker table tr td.active:hover:before { opacity: 1; color: #FFF; }
    #datepicker .datepicker table tr td.active { background-color: transparent; font-weight: bold; position: relative; color: #FFF; }
    #datepicker .datepicker table tr td.active:before { content: ''; background-color: #e6212b; border-radius: 50px; position: absolute; width: 23px; height: 23px; z-index: -1; left: 50%; top: 52%; transform: translateX(-50%)translateY(-50%); }
    #datepicker .datepicker table tr td.new, .datepicker table tr td.old { color: #AAA; font-weight: normal; }
    #datepicker .table-condensed { display: inline-block; }
    .date_price { display: inline-block; width: 92%; border: 1px solid #DDD; padding: 5px 10px; margin: 4%; }
    .date_price { display: inline-block; width: 92%; border: 1px solid #DDD; padding: 5px 10px; margin: 4%; }
    .date_price .input-group { width: 80px; float: right; margin-top: 8px; }
    .date_price .input-group-addon { padding: 0px 7px; cursor: pointer; }
    .date_price input[type="number"]::-webkit-outer-spin-button, input[type="number"]::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
    .date_price input[type="number"] { -moz-appearance: textfield; text-align: center; height: 25px; padding: 1px; }
    .date_btn .btn { width: 100%; border-radius: 30px; color: #FFF; font-weight: bold; }

    .btn_share { display: block; margin: auto; margin-top: 20px; border:1px solid grey; border-radius: 30px; padding: 10px; text-align: center; max-width: 325px; }
    .btn_share:hover { text-decoration: none; }

    @media(max-width: 991px){
        .banner,.banner .item .m_bg { height: 400px; }
        .banner .g_c_mid { width: 90%; top: 50%; left: 50%; transform: translateY(-50%) translateX(-50%); }
        .banner h2 { font-size: 26px; }
        .banner input { padding-left: 10px; }
    }

    @media(max-width: 767px){
        /*Section 1*/
        #breadcrump { padding-top: 10px; padding-bottom: 5px; }
        .box_content .bc_img { width: 100%; margin-bottom: 10px; }
        .box_content .bc_desc { padding: 10px 10px 40px 10px; }

        /*Section 2*/
        .cs_desc3 { padding: 20px 15px 20px 15px; }

        #foot_gallery { text-align: center; }
        #foot_gallery h3 { padding: 0 10%; padding-bottom: 7px; }
        #foot_gallery .col-sm-3,#foot_gallery .col-sm-3:last-child { padding: 0 15px; }
        #foot_gallery .ft_box { height: 150px; overflow: hidden; }
        #foot_gallery .ft_box img { top: 50%; transform: translateY(-50%); position: relative; }
    }
</style>