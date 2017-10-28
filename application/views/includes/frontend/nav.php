<style type="text/css">
    .m_header { padding: 0 40px; padding-top: 5px; height: 60px; position: fixed; }
    .m_header .g_v_mid { height: 55%; }
    .m_header .g_v_mid img { height: 35px; }
    .m_header .g_v_mid img.lg2 { display: none; }
    .m_header .g_right li a:hover { color: #EE3937; text-decoration: none; }
    .m_header.sticky { background-color: #FFF; border-bottom: 1px solid #EEE; }
    .m_header.sticky .g_right li a { color: #444; }
    .m_header.sticky .g_v_mid img.lg1 { display: none; }
    .m_header.sticky .g_v_mid img.lg2 { display: block; }

    #mob_menu { position: absolute; right: 0; top: 0; height: 100%; width: 50px; }
    #mob_menu .menu-trigger { display: inline-block; position: absolute; left: 50%; top: 50%; bottom: auto; right: auto; -webkit-transform: translateX(-50%) translateY(-50%); transform: translateX(-50%) translateY(-50%); width: 26px; height: 2px; background-color: #fff; }
    #mob_menu .menu-trigger:before { content: ''; width: 100%; height: 100%; position: absolute; background-color: inherit; left: 0; bottom: 9px; }
    #mob_menu .menu-trigger:after { content: ''; width: 100%; height: 100%; position: absolute; background-color: inherit; left: 0; top: 9px; }
    .m_header.sticky #mob_menu .menu-trigger { background-color: #555; }

    #mobile_nav { position: fixed; width: 100%; height: 100%; background-color: rgba(0,0,0,0.6); z-index: 100; }
    .mnav-dismiss { color: #FFF; font-size: 25px; position: absolute; right: 270px; top: 10px; }
    #nav-side { position: fixed; width: 260px; height: 100%; background-color: #FFF; z-index: 101; right: -100%; overflow: hidden; }
    #nav-side .logo { display: block; text-align: center; padding: 10px; background-color: #555; }
    #nav-side .logo img { height: 40px; display: inline-block; }
    #nav-side .nav-side-menu { margin: 10px; }
    #nav-side .nav-side-menu li { font-size: 15px; padding: 10px; border-bottom: 1px solid #DDD; }
    #nav-side .nav-side-menu li a { color: #555; }
    #nav-side.dark { background-color: #555; }
    #nav-side.dark .nav-side-menu li a { color: #FFF; }

    @media(max-width:767px){
        .m_header { margin-top: 0; padding: 10px 15px 0 15px; }
        .m_header>a { line-height: 40px; }
    }
</style>

<header class="m_header g_row0">
    <a href="<?php echo base_url(); ?>" class="g_v_mid"><img class="lg1" src="<?php echo base_url(); ?>public/frontend/img/logo.png"><img class="lg2" src="<?php echo base_url(); ?>public/frontend/img/logo_black.png"></a>
    <nav class="g_right nav_right hidden-xs">
        <ul>
            <li><a href="javascript:void(0);"><span class="glyphicon glyphicon-search"></span></a></li>
            <li><a href="javascript:void(0);">Experience</a></li>
            <li><a href="<?php echo base_url(); ?>gift_voucher">Gift Vouchers</li>
            <li><a href="javascript:void(0);">Help</a></li>
        </ul>
    </nav>
    <a id="mob_menu" href="javascript:void(0);" class="hidden-lg hidden-md- hidden-sm"><span class="menu-trigger"></span></a>
</header>
<div id="mobile_nav" style="display:none">
    <a href="javascript:void(0);" class="mnav-dismiss"><i class="glyphicon glyphicon-remove"></i></a>
    <nav id="nav-side">
        <div class="logo"><img src="<?php echo base_url(); ?>public/frontend/img/logo.png"></div>
        <ul class="nav-side-menu">
            <li><a href="javascript:void(0);">Search</a></li>
            <li><a href="javascript:void(0);">Experience</a></li>
            <li><a href="javascript:void(0);">Gift Vouchers</a></li>
            <li><a href="javascript:void(0);">Help</a></li>
        </ul>
    </nav>
</div>