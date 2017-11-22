<div class="wrapper_content">
    <section>
        <div class="banner g_row1 t_white g_rel">
            <div class="g_c_mid t_mid">
                <h2 class="font_cft"><?php echo strtoupper($categories); ?> EXPERIENCE</h2>
            </div>
        </div>
    </section>

    <section>
        <div id="breadcrump" class="col-md-10 col-md-offset-1">
            <ul class="breadcrump_list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>Categories</li>
                <li class="active"><?php echo ucwords($categories); ?> Experience</li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </section>

    <section class="m_bg_gray">
        <div id="sc_content" class="col-md-10 col-md-offset-1">
            <div class="row">
                
                <?php $this->load->view('left_filter'); ?>

                <div id="right_list" class="col-md-9">
                    <div class="text-right" style="margin-bottom: 20px;">
                        <form class="form-sorter">
                            <a href="javascript:;"><div id="sorter"><i class="glyphicon glyphicon-chevron-up"></i><span>SORT</span></div></a>
                        </form>
                    </div>
                    <div class="list_box">
                        <div class="box_content">
                            <a class="bc_img" href="<?php echo base_url(); ?>activity_detail/<?php echo base64_encode('A001'); ?>" style="background-image:url(<?php echo base_url(); ?>public/assets/img/p2_content1.png)">
                                <div class="bc_img_price">
                                    <p class="disc_txt"><label>45%</label> <del style="color:#FF1D25"><span>Rp. 375.000</span></del></p>
                                    <p class="price_txt">Rp. 256.000/pax</p>
                                </div>
                            </a>
                            <div class="bc_desc">
                                <a href="<?php echo base_url(); ?>activity_detail/<?php echo base64_encode('A001'); ?>"><h2 class="cutsom">Bali Parasailing</h2></a>
                                <div class="stars stars-example-css">
                                    <select class="star-rating" name="rating">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4" selected>4</option>
                                      <option value="5">5</option>
                                    </select>
                                </div>
                                <p class="line_spacing">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat....</p>
                            </div>
                            <!-- <a href="#" class="btn btn_detail">View Details</a> -->
                            <div class="clearfix"></div>
                        </div>
                        <div class="box_content">
                            <a class="bc_img" href="<?php echo base_url(); ?>activity_detail/<?php echo base64_encode('A001'); ?>" style="background-image:url(<?php echo base_url(); ?>public/assets/img/p2_content2.png)">
                                <div class="bc_img_price">
                                    <p class="price_txt">Rp. 856.000/pax</p>
                                </div>
                            </a>
                            <div class="bc_desc">
                                <a href="<?php echo base_url(); ?>activity_detail/<?php echo base64_encode('A001'); ?>"><h2 class="cutsom">Mountaineering Trip Semeru 5D4N</h2></a>
                                <div class="stars stars-example-css">
                                    <select class="star-rating" name="rating">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5" selected>5</option>
                                    </select>
                                </div>
                                <p class="line_spacing">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat....</p>
                            </div>
                            <!-- <a href="#" class="btn btn_detail">View Details</a> -->
                            <div class="clearfix"></div>
                        </div>
                        <div class="box_content">
                            <a class="bc_img" href="<?php echo base_url(); ?>activity_detail/<?php echo base64_encode('A001'); ?>" style="background-image:url(<?php echo base_url(); ?>public/assets/img/p2_content3.png)">
                                <div class="bc_img_price">
                                    <p class="price_txt">Rp. 256.000/pax</p>
                                </div>
                            </a>
                            <div class="bc_desc">
                                <a href="<?php echo base_url(); ?>activity_detail/<?php echo base64_encode('A001'); ?>"><h2 class="cutsom">Lorem Ipsum Trip</h2></a>
                                <div class="stars stars-example-css">
                                    <select class="star-rating" name="rating">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3" selected>3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                    </select>
                                </div>
                                <p class="line_spacing">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat....</p>
                            </div>
                            <!-- <a href="#" class="btn btn_detail">View Details</a> -->
                            <div class="clearfix"></div>
                        </div>
                        <div class="box_content">
                            <a class="bc_img" href="<?php echo base_url(); ?>activity_detail/<?php echo base64_encode('A001'); ?>" style="background-image:url(<?php echo base_url(); ?>public/assets/img/p2_content4.png)">
                                <div class="bc_img_price">
                                    <p class="price_txt">Rp. 256.000/pax</p>
                                </div>
                            </a>
                            <div class="bc_desc">
                                <a href="<?php echo base_url(); ?>activity_detail/<?php echo base64_encode('A001'); ?>"><h2 class="cutsom">Lorem Ipsum Trip</h2></a>
                                <div class="stars stars-example-css">
                                    <select class="star-rating" name="rating">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5" selected>5</option>
                                    </select>
                                </div>
                                <p class="line_spacing">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat....</p>
                            </div>
                            <!-- <a href="#" class="btn btn_detail">View Details</a> -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="text-center">
                      <ul class="pagination">
                        <li class="disabled">
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="glyphicon glyphicon-chevron-left"></i></span>
                          </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="glyphicon glyphicon-chevron-right"></i></span>
                          </a>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
</div>
