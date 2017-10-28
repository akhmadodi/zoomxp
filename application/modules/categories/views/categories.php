<div class="wrapper_content">
    <section>
        <div class="banner g_row1 t_white g_rel">
            <div class="g_c_mid t_mid">
                <h2 class="font_cft"><?php echo strtoupper(str_replace('_', ' ', $this->uri->segment(2))); ?></h2>
            </div>
        </div>
    </section>

    <?php $this->load->view('includes/frontend/nav_section'); ?>

    <section class="m_bg_gray">
        <div id="sc_content" class="col-md-10 col-md-offset-1">
            <div class="row">
                <div id="left_filter" class="col-md-3">
                    <div class="row">
                        <div class="box_filter col-sm-12 col-md-12">
                            <div class="bf_head"><p>YOUR FILTER</p></div>
                            <div class="bf_body">
                                <div class="text-left" style="display: inline-block;">
                                    <form id="your_filter">
                                        <div class="zremove">
                                            <div id="yf_destination"></div>
                                            <div id="yf_activity"></div>
                                            <div id="yf_price"></div>
                                            <div id="yf_duration"></div>
                                            <p id="no_filter_text">No Filter List</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="box_filter col-sm-6 col-md-12">
                            <div class="bf_head">
                                <p><img src="<?php echo base_url(); ?>public/frontend/img/ic_destination.png"> DESTINATION <i class="glyphicon glyphicon-chevron-down pull-right"></i></p>
                            </div>
                            <div class="bf_body text-left">
                                <div class="text-left" style="display: inline-block;">
                                    <div class="zradio1">
                                        <input type="radio" name="destination" value="1" id="d1"><label for="d1">Jakarta</label>
                                    </div>
                                    <div class="zradio1">
                                        <input type="radio" name="destination" value="2" id="d2"><label for="d2">Jawa Barat</label>
                                    </div>
                                    <div class="zradio1">
                                        <input type="radio" name="destination" value="3" id="d3"><label for="d3">Bali</label>
                                    </div>
                                    <div class="zradio1">
                                        <input type="radio" name="destination" value="4" id="d4"><label for="d4">Lombok</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_filter col-sm-6 col-md-12">
                            <div class="bf_head">
                                <p><img src="<?php echo base_url(); ?>public/frontend/img/ic_activity.png"> ACTIVITY <i class="glyphicon glyphicon-chevron-down pull-right"></i></p>
                            </div>
                            <div class="bf_body">
                                <div class="text-left" style="display: inline-block;">
                                    <div class="zcbox1">
                                        <input type="checkbox" name="activity" value="1" id="a1"><label for="a1">Hiking</label>
                                    </div>
                                    <div class="zcbox1">
                                        <input type="checkbox" name="activity" value="2" id="a2"><label for="a2">Snorkeling</label>
                                    </div>
                                    <div class="zcbox1">
                                        <input type="checkbox" name="activity" value="3" id="a3"><label for="a3">Berenang</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="box_filter col-sm-6 col-md-12">
                            <div class="bf_head">
                                <p><img src="<?php echo base_url(); ?>public/frontend/img/ic_price.png"> PRICE RANGE <i class="glyphicon glyphicon-chevron-down pull-right"></i></p>
                            </div>
                            <div class="bf_body">
                                <div class="text-left" style="display: inline-block;">
                                    <div class="zradio1">
                                        <input type="radio" name="price" value="1" id="p1"><label for="p1">< Rp. 200.000</label>
                                    </div>
                                    <div class="zradio1">
                                        <input type="radio" name="price" value="2" id="p2"><label for="p2">Rp. 200.000 - Rp. 500.000</label>
                                    </div>
                                    <div class="zradio1">
                                        <input type="radio" name="price" value="3" id="p3"><label for="p3">> Rp. 500.000</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_filter col-sm-6 col-md-12">
                            <div class="bf_head">
                                <p><img src="<?php echo base_url(); ?>public/frontend/img/ic_duration.png"> DURATION <i class="glyphicon glyphicon-chevron-down pull-right"></i></p>
                            </div>
                            <div class="bf_body" style="padding: 10px 30px;">
                                <input type="text" name="duration" data-slider-ticks="[1,2,3,4,5]" data-slider-ticks-labels="[1,2,3,4,5]" data-slider-value="1"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="right_list" class="col-md-9">
                    <div class="text-right" style="margin-bottom: 20px;">
                        <form class="form-sorter">
                            <a href="javascript:;"><div id="sorter"><i class="glyphicon glyphicon-chevron-down"></i><span>SORT</span></div></a>
                        </form>
                    </div>
                    <div class="list_box">
                        <div class="box_content">
                            <a class="bc_img" href="#" style="background-image:url(<?php echo base_url(); ?>public/frontend/img/p2_content1.png)">
                                <div class="bc_img_price">
                                    <p class="disc_txt"><label>45%</label> <del style="color:#FF1D25"><span>Rp. 375.000</span></del></p>
                                    <p class="price_txt">Rp. 256.000/pax</p>
                                </div>
                            </a>
                            <div class="bc_desc">
                                <a href="#"><h2>Bali Parasailing</h2></a>
                                <div class="stars stars-example-css">
                                    <select class="star-rating" name="rating">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4" selected>4</option>
                                      <option value="5">5</option>
                                    </select>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat....</p>
                            </div>
                            <a href="#" class="btn btn_detail">View Details</a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="box_content">
                            <a class="bc_img" href="#" style="background-image:url(<?php echo base_url(); ?>public/frontend/img/p2_content2.png)">
                                <div class="bc_img_price">
                                    <p class="price_txt">Rp. 856.000/pax</p>
                                </div>
                            </a>
                            <div class="bc_desc">
                                <a href="#"><h2>Mountaineering Trip Semeru 5D4N</h2></a>
                                <div class="stars stars-example-css">
                                    <select class="star-rating" name="rating">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5" selected>5</option>
                                    </select>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat....</p>
                            </div>
                            <a href="#" class="btn btn_detail">View Details</a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="box_content">
                            <a class="bc_img" href="#" style="background-image:url(<?php echo base_url(); ?>public/frontend/img/p2_content3.png)">
                                <div class="bc_img_price">
                                    <p class="price_txt">Rp. 256.000/pax</p>
                                </div>
                            </a>
                            <div class="bc_desc">
                                <a href="#"><h2>Lorem Ipsum Trip</h2></a>
                                <div class="stars stars-example-css">
                                    <select class="star-rating" name="rating">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3" selected>3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                    </select>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat....</p>
                            </div>
                            <a href="#" class="btn btn_detail">View Details</a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="box_content">
                            <a class="bc_img" href="#" style="background-image:url(<?php echo base_url(); ?>public/frontend/img/p2_content4.png)">
                                <div class="bc_img_price">
                                    <p class="price_txt">Rp. 256.000/pax</p>
                                </div>
                            </a>
                            <div class="bc_desc">
                                <a href="#"><h2>Lorem Ipsum Trip</h2></a>
                                <div class="stars stars-example-css">
                                    <select class="star-rating" name="rating">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5" selected>5</option>
                                    </select>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat....</p>
                            </div>
                            <a href="#" class="btn btn_detail">View Details</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
</div>