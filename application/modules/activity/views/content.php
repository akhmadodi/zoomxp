<div class="wrapper_content">
    <section>
        <div class="banner g_row1 t_white g_rel">
            <!-- <div class="g_c_mid t_mid"> -->
                <!-- <h2 class="font_cft"><?php //echo strtoupper($categories); ?> EXPERIENCE</h2> -->
            <!-- </div> -->
        </div>
    </section>

    <section>
        <div id="breadcrump" class="col-md-10 col-md-offset-1">
            <ul class="breadcrump_list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>Activities</li>
                <li class="active"><?php echo $identity; ?></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </section>

    <section>
        <div id="sc_content" class="col-md-10 col-md-offset-1">
            <div class="row">
                <div id="left_list" class="col-md-7">
                    <div id="contents" class="list_box">
                        <div class="cs_title"><h2>The Coral Garden, Tulamben</h2></div>
                        <h3>Bali, Indonesia</h3>
                        <div class="cs_rating">
                            <div class="stars stars-example-css">
                                <select class="star-rating" name="rating">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4" selected>4</option>
                                  <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="cs_desc" style="margin-bottom: 50px;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat....</p>
                        </div>

                        <h3>What You Will Do</h3>
                        <div class="cs_desc2" style="margin-bottom: 50px;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repre- henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae- cat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>

                        <h3>Activities Detail</h3>
                        <div class="cs_desc2" style="margin-bottom: 50px;">
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi- dunt ut labore et dolore magna aliqua.</li>
                                <li>Veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse- quat.</li>
                                <li>Duis aute irure dolor in reprehenderit in voluptate</li>
                            </ul>
                        </div>

                        <hr style="border-top:2px solid #DDD; margin-right: 30%; margin-bottom: 30px;">

                        <h3>What’s Included</h3>
                        <div class="cs_desc3" style="margin-bottom: 50px;">
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi- dunt ut labore et dolore magna aliqua.</li>
                                <li>Veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse- quat.</li>
                                <li>Duis aute irure dolor in reprehenderit in voluptate</li>
                            </ul>
                        </div>
                        
                        <h3>What’s Excluded</h3>
                        <div class="cs_desc3" style="margin-bottom: 50px;">
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi- dunt ut labore et dolore magna aliqua.</li>
                                <li>Veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse- quat.</li>
                                <li>Duis aute irure dolor in reprehenderit in voluptate</li>
                            </ul>
                        </div>

                        <div id="foot_gallery">
                            <h3>The Gallery</h3>
                            <div class="clearfix"></div>
                            <div class="col-sm-3">
                                <a class="fancybox" rel="foot1" href="<?php echo base_url(); ?>public/assets/img/header_bg.png"><div class="ft_box"><img class="img-responsive" src="<?php echo base_url(); ?>public/assets/img/p3_glr1.png"></div></a>
                            </div>
                            <div class="col-sm-3">
                                <a class="fancybox" rel="foot1" href="<?php echo base_url(); ?>public/assets/img/header_bg2.png"><div class="ft_box"><img class="img-responsive" src="<?php echo base_url(); ?>public/assets/img/p3_glr2.png"></div></a>
                            </div>
                            <div class="col-sm-3">
                                <a class="fancybox" rel="foot1" href="<?php echo base_url(); ?>public/assets/img/header_bg3.png"><div class="ft_box"><img class="img-responsive" src="<?php echo base_url(); ?>public/assets/img/p3_glr3.png"></div></a>
                            </div>
                            <div class="col-sm-3">
                                <a class="fancybox" rel="foot1" href="<?php echo base_url(); ?>public/assets/img/header_bg2.png"><div class="ft_box ft_viewmore"><img class="img-responsive" src="<?php echo base_url(); ?>public/assets/img/p3_glr4.png"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <div id="right_content" class="text-center">
                        <form id="datepick_form">
                            <div id="datepicker" class="text-center" data-date="<?php echo date('m/d/Y'); ?>">
                                <h5 class="font_cft">Choose Your Date</h5>
                            </div>
                            <input type="hidden" id="date_input" name="date" value="<?php echo date('m/d/Y'); ?>">
                            <div class="date_price">
                                <div class="col-xs-6 text-left" style="padding:0;">
                                    <small>Adult</small>
                                    <h5 class="color-main" style="margin: 5px 0;">IDR 259.000</h5>
                                </div>
                                <div class="col-xs-6 text-right" style="padding:0;">
                                    <div class="input-group">
                                      <div class="input-group-addon minus">-</div>
                                      <input type="number" class="form-control" id="exampleInputAmount" value="1" min="1" max="100">
                                      <div class="input-group-addon plus">+</div>
                                    </div>
                                </div>
                            </div>
                            <div style="padding:0 15px;">
                                <b>
                                    <span class="pull-left">Subtotal</span>
                                    <span class="pull-right color_main">IDR 2.590.000</span>
                                </b>
                                <div class="clearfix"></div>
                            </div>
                            <hr style="margin: 10px -20px; border-top: 2px solid #DDD">
                            <div class="date_btn row" style="padding-top: 10px;">
                                <div class="col-xs-6">
                                    <!-- <button class="btn" style="background: #6ac134;">Book Now</button> -->
                                    <a href="<?php echo base_url(); ?>payment" class="btn" style="background: #6ac134;">Book Now</a>
                                </div>
                                <div class="col-xs-6">
                                    <!-- <button class="btn" style="background: #f38019;">Send as Gift</button> -->
                                    <a href="<?php echo base_url(); ?>gift_vouchers" class="btn" style="background: #f38019;">Send as Gift</a>
                                </div>
                            </div>
                        </form>
                        <a href="#" class="btn_share">
                            <h4 style="margin:0"><img src="<?php echo base_url(); ?>public/assets/img/ic_share.png" style="height: 17px; margin-right: 10px;">SHARE</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
</div>