<div class="wrapper_content">
    <section class="container" style="padding-top: 60px;">
        <div class="col-md-offset-1 col-md-10">
            <h3 class="font_cft yc">Your Chart</h3>
            <div class="table-responsive">
                <table id="list_payment">
                    <thead>
                        <tr>
                            <th>Product Description</th>
                            <th class="hidden-xs">Date</th>
                            <th class="hidden-xs">Quality</th>
                            <th class="hidden-xs">Subtotal</th>
                            <th class="hidden-xs"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="lp_content">
                                <img class="img-responsive" src="<?php echo base_url(); ?>public/assets/img/payment/list1.png">
                                <div class="lpc_desc">
                                    <h4>Bali Parasailing</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </td>
                            <td>
                                <span class="hidden-lg hidden-md hidden-sm">Date:</span>
                                09/09/2017
                            </td>
                            <td>
                                <span class="hidden-lg hidden-md hidden-sm">Quantity:</span>
                                <input class="form-control nquantity" type="number" name="quantity" value="1" style="display:inline-block;width:40px;">
                            </td>
                            <td class="subtotal">
                                <span class="hidden-lg hidden-md hidden-sm">Subtotal:<br></span>
                                Rp 256.000
                            </td>
                            <td class="payment_role">
                                <a href="javascript:;" role="edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="javascript:;" role="remove"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="lp_content">
                                <img class="img-responsive" src="<?php echo base_url(); ?>public/assets/img/payment/list2.png">
                                <div class="lpc_desc">
                                    <h4>Mountaineering Trip Semeru 5D4N</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </td>
                            <td>
                                <span class="hidden-lg hidden-md hidden-sm">Date:</span>
                                09/09/2017
                            </td>
                            <td>
                                <span class="hidden-lg hidden-md hidden-sm">Quantity:</span><br>
                                <input class="form-control nquantity" type="number" name="quantity" value="1" style="display:inline-block;width:40px;">
                            </td>
                            <td class="subtotal">
                                <span class="hidden-lg hidden-md hidden-sm">Subtotal:</span><br>
                                Rp 256.000
                            </td>
                            <td class="payment_role">
                                <a href="javascript:;" role="edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="javascript:;" role="remove"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h3 class="font_cft cs">Continue Shopping</h3>

            <div id="payment_info">
                <div class="row">
                    <div class="col-md-6">
                        <div class="payment_box">
                            <div>
                                <h4 class="pb_no"><span>1</span> Customer Information</h4>
                            </div>
                            <form>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="first_name" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="last_name" placeholder="Last Name">
                                    </div>
                                </div>
                                <input class="form-control" type="text" name="email" placeholder="Email">
                                <label>You’ll receive receipts and notifications at this email address.</label>
                                <input class="form-control" type="text" name="phone" placeholder="Phone Number">
                                <div class="form-inline">
                                    <input type="checkbox" name="subscribe_email" value="true">
                                    <label>Subscribe to our email list.</label>
                                </div>
                            </form>
                        </div>
                        <div class="payment_box">
                            <h4 class="pb_no"><span>2</span> Payment Method</h4>
                            <form>
                                <div class="form-group row payment_method">
                                    <div class="col-xs-12">
                                        <input class="radio_s1" type="radio" name="payment_method" value="1" id="pm_1" checked>
                                        <label for="pm_1">Credit Card</label>
                                        <img src="<?php echo base_url(); ?>public/assets/img/payment/ico_mastercard.png" style="height: 17px;">
                                        <img src="<?php echo base_url(); ?>public/assets/img/payment/ico_visa.png" style="height: 18px;">
                                        <div class="pm_content row">
                                            <div class="col-sm-10">
                                                <input class="form-control" type="input" name="text" placeholder="Credit Card Number" style="margin-bottom: 10px;">
                                                <input class="form-control" type="input" name="text" placeholder="month" style="width:20%; display: inline-block;">
                                                <span class="pm_or">/</span>
                                                <input class="form-control" type="input" name="text" placeholder="year" style="width:20%; display: inline-block;">
                                                <input class="form-control" type="input" name="text" placeholder="CCV" style="width:20%; float: right;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <input class="radio_s1" type="radio" name="payment_method" value="2" id="pm_2">
                                        <label for="pm_2">Bank Transfer</label>
                                        <div class="pm_content">
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <input class="radio_s1" type="radio" name="payment_method" value="3" id="pm_3">
                                        <label for="pm_3">Over The Counter</label>
                                        <div class="pm_content">
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment_box">
                            <h4 class="pb_no">Order Summary</h4>
                            <form>
                                <table class="order_summary">
                                    <tbody>
                                        <tr>
                                            <td>Number of Item</td>
                                            <td><b>2</b></td>
                                        </tr>
                                        <tr>
                                            <td>Subtotal</td>
                                            <td><b>Rp 1.112.000</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="gift_code">
                                                <label>Gift Code</label><br>
                                                <input type="text" name="gift_code" class="form-control"> <a href="javascript:;" class="gc_apply">Apply</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr style="margin: 20px -20px;">
                                <table class="order_summary">
                                    <tbody>
                                        <tr>
                                            <td>Order Total</td>
                                            <td>Rp 1.112.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" id="submit_payment">Proceed to Checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
