<link href="<?php echo base_url(); ?>public/autocomplete/content/styles.css" rel="stylesheet" />
<div class="wrapper_content">
    <section>
        <div class="banner g_row1 t_white g_rel">
            <div class="banner_top_shadow g_row1 g_abs"></div>
            <div id="head_owl" class="g_col1 owl-carousel owl-theme">
                <div class="item">
                    <div class="m_bg g_abs" data-image="<?php echo base_url(); ?>public/frontend/img/header_bg.png" style="background-image:url(<?php echo base_url(); ?>public/frontend/img/header_bg.png);"></div>
                </div>
                <div class="item">
                    <div class="m_bg g_abs" data-image="<?php echo base_url(); ?>public/frontend/img/header_bg.png" style="background-image:url(<?php echo base_url(); ?>public/frontend/img/header_bg2.png);"></div>
                </div>
                <div class="item">
                    <div class="m_bg g_abs" data-image="<?php echo base_url(); ?>public/frontend/img/header_bg.png" style="background-image:url(<?php echo base_url(); ?>public/frontend/img/header_bg3.png);"></div>
                </div>
            </div>
            <div class="g_c_mid t_mid">
                <h2>MEMORABLE EXPERIENCES WITHIN CLICKS</h2>
                <div>
                    <form action="search" id="formSearch">
                    <input id="autocomplete-ajax" class="g_left t16" name="country" type="text" placeholder="Search by destination, activity or attraction" autocomplete="off">
                    <button class="g_left bg_main" type="submit" id="search_btn" data-gatag="Main Page|Search">
                        <span class="hidden-xs">SEARCH</span>
                        <span class="glyphicon glyphicon-search hidden-sm hidden-md hidden-lg"></span>
                    </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="promise m_bg_gray">
            <div class="row">
                <div class="col-sm-4">
                    <div class="s_box1">
                        <div class="circle_s1">
                            <img src="<?php echo base_url(); ?>public/frontend/img/like.png" class="img-responsive">
                        </div>
                        <div class="s_box1_text">
                            <h4>Curated Experience</h4>
                            <p>Memorable experiences delivered by our handpicked operators</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-sm-4">
                    <div class="s_box1">
                        <div class="circle_s1">
                            <img src="<?php echo base_url(); ?>public/frontend/img/money.png" class="img-responsive">
                        </div>
                        <div class="s_box1_text">
                            <h4>Best Price</h4>
                            <p>The best deal you can get for memorable experiences</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-sm-4">
                    <div class="s_box1">
                        <div class="circle_s1">
                            <img src="<?php echo base_url(); ?>public/frontend/img/gift.png" class="img-responsive">
                        </div>
                        <div class="s_box1_text">
                            <h4>Send as Gift</h4>
                            <p>Give memorable experiences to your loved ones</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="index_list">
        <div class="g_main c_list container" style="margin-bottom:30px">
        	<?php $this->load->view('top_categories'); ?>
            <div class="col-md-10 col-md-offset-1"><hr style="border-top:1px solid grey"></div>
            <?php $this->load->view('top_experiences'); ?>
        </div>
    </section>

    <section class="bg_img">
        <div class="container">
            <div class="row">
                <div id="box_voc" class="col-md-6 col-md-offset-3 text-center">
                    <a href="#"><div class="button_voc"><h3 class="font_cft">GIFT VOUCHERS</h3></div></a>
                    <p class="text_voc">Looking for a unique  way to celebrate your friends, collagues, or family members?</p>
                </div>
            </div>
        </div>
    </section>

    <section id="sec4">
        <div class="g_main c_list container m_bg_grey" style="margin-bottom:30px">
            <header class="t_mid" style="margin-bottom:30px">
                <h2 class="font_cft color_main"><span>GET INSPIRED WITH OUR</span><br>STORIES</h2>
            </header>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div id="foot_owl" class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="javascript:void(0);">
                                <div class="box_thumb3">
                                    <img src="<?php echo base_url(); ?>public/frontend/img/section5_1.png" class="img-responsive">
                                    <div class="box_content bg_main">
                                        <h5>Bali Surfing House</h5>
                                        <p>The shore looked so far away, and soon it was tough just trying to stay afloat...</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);">
                                <div class="box_thumb3">
                                    <img src="<?php echo base_url(); ?>public/frontend/img/section5_2.png" class="img-responsive">
                                    <div class="box_content bg_main">
                                        <h5>Complete Serenity</h5>
                                        <p>The experience was just mind blowing amidst the jungle with serenity your companion...</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);">
                                <div class="box_thumb3">
                                    <img src="<?php echo base_url(); ?>public/frontend/img/section5_3.png" class="img-responsive">
                                    <div class="box_content bg_main">
                                        <h5>Astonishing Cultural Night</h5>
                                        <p>Hear an expectant hush descend over the audience as troupes of talented dancers...</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);">
                                <div class="box_thumb3">
                                    <img src="<?php echo base_url(); ?>public/frontend/img/section5_1.png" class="img-responsive">
                                    <div class="box_content bg_main">
                                        <h5>Bali Surfing House</h5>
                                        <p>The shore looked so far away, and soon it was tough just trying to stay afloat...</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);">
                                <div class="box_thumb3">
                                    <img src="<?php echo base_url(); ?>public/frontend/img/section5_2.png" class="img-responsive">
                                    <div class="box_content bg_main">
                                        <h5>Complete Serenity</h5>
                                        <p>The experience was just mind blowing amidst the jungle with serenity your companion...</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);">
                                <div class="box_thumb3">
                                    <img src="<?php echo base_url(); ?>public/frontend/img/section5_3.png" class="img-responsive">
                                    <div class="box_content bg_main">
                                        <h5>Astonishing Cultural Night</h5>
                                        <p>Hear an expectant hush descend over the audience as troupes of talented dancers.....</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>