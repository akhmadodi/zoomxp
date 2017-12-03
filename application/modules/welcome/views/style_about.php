<!-- CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/zoom.css?1.3<?php echo rand(); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/barrating.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/custom_style.css?1.1<?php echo rand(); ?>" type="text/css">

<!-- this is zoom gtm for whole website -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-NC2F2B" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<!-- Custom Style -->
<style>
    /* Banner */
    .banner { height: 400px; background:url(<?php echo base_url(); ?>public/assets/img/about/header_bg4.png); background-size: cover; background-position-x: 46%; }
    .banner:before { content: ""; position: absolute; width: 100%; height: 100%; background: rgba(0,0,0,0.2); }
    #header_nav { position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); margin-bottom: 20px; }
    #header_nav a { color: #FFF; padding: 4px 12px; font-size: 20px; font-family: "comfortaa"; font-weight: bold; }
    #header_nav a.active,#header_nav a:hover { border-bottom: 2px solid #e5212b; text-decoration: none; }
    #header_nav a:first-child { margin-right: 40px; }

    /* Section 2 */
    .sec2_box { position: relative; display: inline-block; }
    .sec2_box div { display: inline-block; }
    .sec2_box .s2b_desc { padding: 90px 60px 90px 60px; }
    .sec2_box .s2b_desc h3 { color: #EE3937; font-size: 22px; }
    .sec2_box .s2b_desc p { color: #000; font-size: 14px; line-height: 20px; font-weight: bold; }
    .sec2_box .s2b_bg { position: absolute; height: 100%; top: 0; background-size: cover; background-position: 50%; }
    .sec2_box .s2b_quote { position: absolute; height: 110%; top: -5%; width: 52%; right: 0; background-color: #e5212b; color: #FFF; text-align: right; padding: 9% 14% 8% 7%; font-size: 22px; font-weight: bold; z-index: 2; }

    /* Section 3 */
    .sec3_box { color: #FFF; background-color: #bc1f3a; padding: 50px 0; }
    .sec3_box h3 { font-size: 22px; padding-top: 0 !important;  }
    .box_team img { max-width: 150px; width: 100%; border: 1px solid #FFF; margin: auto; margin-bottom: 30px; }
    .box_team h4, .box_team p { font-family: 'Comfortaa'; text-align: center; margin: 0; line-height: 15px; }

    /* Section 4 */
    .sec4_box { position: relative; background:url(<?php echo base_url(); ?>public/assets/img/about/sec4.png); margin-top: -1px; background-size: cover; background-position: 50%; padding: 115px 0; }
    .sec4_box:before { content: ""; position: absolute; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.4); }
    .sec4_box h3 { position:relative; color: #FFF; margin: 0; line-height: 60px; font-family: "SourceSansPro"; font-size: 30px; }
    .sec4_box h3 span { font-size: 40px; }
    .sec4_box h4 { position:relative; color: #FFF; font-size: 24px; }
    .sec4_box h5 { position:absolute; color: #FFF; font-size: 24px; bottom: 20px; left: 50%; transform: translateX(-50%); font-size: 18px; line-height: 27px; }

    /* Section 5 */
    .sec5_box { background-color: #FFF; padding: 45px 0; }
    .sec5_box .s5b { display: inline-table; height: 30px; }
    .sec5_box .s5b .s5b_img { display: table-cell; vertical-align: middle; padding-right: 15px; }
    .sec5_box .s5b .s5b_img img { max-width: 28px; max-height: 28px; }
    .sec5_box .s5b .s5b_desc { display: table-cell; vertical-align: middle; padding-left: 15px; }
    .sec5_box .s5b .s5b_desc p { margin: 0; font-weight: bold; }

    @media(max-width: 767px){
        /* Banner */
        .banner { height: 300px; }
        #header_nav { display: inline-table; padding: 0 15px; }
        #header_nav a { font-size: 15px; }

        /* Section 2 */
        .sec2_box .s2b_desc { padding: 20px 15px 40px 15px; }
        .sec2_box .s2b_bg { width: 100% !important; }
        .sec2_box .s2b_quote { position: relative; width: 100%; font-size: 18px; }

        /* Section 3 */
        .sec3_box .col-sm-2 { margin-bottom: 20px; }

        /* Section 4 */
        .sec4_box { padding: 40px 15px 100px 15px; }
        .sec4_box h3 { font-size: 20px; line-height: 30px; }
        .sec4_box h3 span { font-size: 26px; }

        /* Section 5 */
        .sec5_box .s5b { margin-bottom: 10px; }
    }
</style>