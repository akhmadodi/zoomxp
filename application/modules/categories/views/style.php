<style>
    .banner { height: 550px; background:url(<?php echo base_url(); ?>public/frontend/img/header_bg2.png); background-size: cover; background-position-x: 46%; }
    .banner h2 { font-size: 38px; margin: 0; }
    .banner.g_row1:before { content: ""; position: absolute; width: 100%; height: 100%; background: rgba(0,0,0,0.2); z-index: 1; }
    .banner .g_c_mid { width: 550px; top: 50%; }
    .banner button { color: #FFF; }
    .btn.btn_detail { background-color: #FBB03B; border-radius: 20px; color: #FFF; font-size: 13px; padding: 4px 15px; }

    /*Section 1*/
    #breadcrump { padding-top: 20px; padding-bottom: 15px; }
    .breadcrump_list { margin-bottom: 0; }
    .breadcrump_list li { display: inline-block; margin-right: 20px; position: relative; margin-bottom: 5px; }
    .breadcrump_list li:after { content: "\e080"; font-family: 'Glyphicons Halflings'; position: absolute; right: -17px; top: 2px; font-size: 10px; }
    .breadcrump_list li:last-child { color: #888888; }
    .breadcrump_list li:last-child:after { content: ""; }

    /*Section 2*/
    #sc_content { padding-top: 30px; margin-bottom: 30px; }
    .box_filter { margin-bottom: 30px; }
    .box_filter .bf_head { background: #EF5E5D; text-align: center; border-top-left-radius: 15px; border-top-right-radius: 15px; border: 1px solid #DDD; border-bottom: none; padding: 10px 20px; cursor: pointer; }
    .box_filter .bf_head img { display:inline-block; height:15px; position: relative; top: -2px; margin-right: 5px; }
    .box_filter .bf_head p { color: #fff; margin: 0; }
    .box_filter .bf_body { background: #FFF; text-align: center; padding: 10px 20px; border: 1px solid #DDD; border-top: none; }
    #sorter { display: inline-block; background: #fff; padding: 6px; border-radius: 15px; border: 1px solid #DDD; width: 90px; position: relative; overflow: hidden; }
    #sorter i { position: absolute; background: #F1615F; color: #FFF; border-top-left-radius: 10px; border-bottom-left-radius: 10px; height: 100%; width: 30px; left: 0; top: 0; padding: 6px; }
    #sorter span { padding: 5px; background: #fff; border-top-right-radius: 10px; border-bottom-right-radius: 10px; }
    .box_content { position: relative; background-color: #FFF; display: inline-block; margin-bottom: 30px; }
    .box_content a {  text-decoration: none; }
    .box_content .bc_img { height: 500px; max-height: 170px; width: 30%; position: relative; background-size: cover; background-position-x: 50%; display: block; float: left; text-decoration: none; }
    .box_content .bc_img:before { content: ""; position: absolute; width: 100%; height: 100%; background: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.1),rgba(0,0,0,0.2),rgba(0,0,0,0.8)); }
    .bc_img .bc_img_price { position: absolute; text-align: right; bottom: 10px; right: 15px; }
    .bc_img .bc_img_price p { margin: 0; color: #FFF; }
    .bc_img .bc_img_price p.disc_txt label { background: #FF1D25; font-size: 9px; padding: 3px; margin-right: 7px; }
    .bc_img .bc_img_price p.disc_txt span { font-size: 13px; color: #DDD; }
    .bc_img .bc_img_price p.price_txt { margin: 0; color: #FFF; font-weight: bold; font-size: 18px; }
    .box_content .bc_desc { padding-left: 32%; }
    .box_content .bc_desc h2 { font-size: 20px; color: #FF1D25; margin-bottom: 0; }
    .box_content .bc_desc .stars.stars-example-css { padding: 4px; height: 36px; }
    .box_content .bc_desc .stars.stars-example-css select { display: none; }
    .box_content .btn.btn_detail { position: absolute; bottom: 10px; right: 20px; }

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
    }
</style>