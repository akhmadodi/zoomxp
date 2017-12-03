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
                <p><img src="<?php echo base_url(); ?>public/assets/img/ic_destination.png"> DESTINATION <i class="glyphicon glyphicon-chevron-up pull-right"></i></p>
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
                <p><img src="<?php echo base_url(); ?>public/assets/img/ic_activity.png"> ACTIVITY <i class="glyphicon glyphicon-chevron-up pull-right"></i></p>
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
                <p><img src="<?php echo base_url(); ?>public/assets/img/ic_price.png"> PRICE RANGE <i class="glyphicon glyphicon-chevron-up pull-right"></i></p>
            </div>
            <div class="bf_body">
                <div class="text-left" style="display: inline-block;">
                    <div class="zradio1">
                        <input type="radio" name="price" value="1" id="p1"><label for="p1">< Rp. 200.000</label>
                    </div>
                    <div class="zradio1">
                        <input type="radio" name="price" value="2" id="p2"><label for="p2">Rp. 200.000 - 500.000</label>
                    </div>
                    <div class="zradio1">
                        <input type="radio" name="price" value="3" id="p3"><label for="p3">> Rp. 500.000</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="box_filter col-sm-6 col-md-12">
            <div class="bf_head">
                <p><img src="<?php echo base_url(); ?>public/assets/img/ic_duration.png"> DURATION <i class="glyphicon glyphicon-chevron-up pull-right"></i></p>
            </div>
            <div class="bf_body" style="padding: 10px 30px;">
                <input type="text" name="duration" data-slider-ticks="[1,2,3,4,5]" data-slider-ticks-labels="[1,2,3,4,5]" data-slider-value="1"/>
            </div>
        </div>
    </div>
</div>