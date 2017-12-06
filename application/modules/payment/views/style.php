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
<style type="text/css">
    h3.yc { font-size: 20px; }
    h3.cs { font-size: 13px; color: #0fa3af; margin-bottom: 40px; }
    .pm_or { font-size: 30px; top: 6px; position: relative; color: #BBB; }

    /* List Payment */
    #list_payment thead tr th { background: #e6212b; color: #FFF; padding: 10px 20px; text-align: center }
    #list_payment thead tr th:first-child { text-align: left; }
    #list_payment tbody tr { border-bottom: 2px solid #CCC; }
    #list_payment tbody tr td { padding: 30px 10px; text-align: center; }
    #list_payment tbody tr td:first-child { text-align: left; width: 55%; }
    #list_payment tbody tr td.subtotal { font-weight: bold; }
    #list_payment tbody tr td.payment_role a { display: block; padding: 15px 0; color: #AAA; }
    #list_payment .lp_content img { width: 25%; display: inline-block; }
    #list_payment .lp_content .lpc_desc { width: 70%; display: inline-block; padding-left: 20px; vertical-align: top; }

    /* Payment Info */
    #payment_info { background: #efefef; padding: 30px 70px 20px 70px; margin-bottom: 30px; }
    #payment_info .payment_box { position: relative; background: #FFF; padding: 20px 20px; border: 1px solid #BBB; margin-bottom: 15px; }
    #payment_info .payment_box h4 { margin-top: 0; font-family: "Comfortaa"; font-size: 16px; }
    #payment_info .payment_box .pb_no span { padding: 3px 9px; margin-right: 10px; border: 1px solid grey; border-radius: 50%; line-height: 0; }
    #payment_info .payment_box label { font-size: 11px; font-weight: normal; color: grey; margin: 10px 0; }
    #payment_info .payment_box .payment_method label { cursor: pointer; }

    /* Order Summary */
    .order_summary { width: 100%; }
    .order_summary tr td { padding: 8px 0; }
    .order_summary tr td:first-child { width: 60%; }
    .order_summary tr td:last-child { width: 40%; text-align: center; }
    .order_summary tr td.gift_code { text-align: left }
    .order_summary tr td.gift_code label { font-size: 13px; margin-bottom: 3px; }
    .order_summary tr td.gift_code input { margin-right: 15px; width: 50%; display: inline-block; }
    #submit_payment { width: 100%; position: absolute; left: 0; bottom: -40px; background: #e6212b; color: #FFF; border-top: none; border-radius: 0; }

    .nquantity { text-align: center; padding: 6px 6px; display:inline-block;width:55px; }
    /*.nquantity::-webkit-inner-spin-button,
    .nquantity::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }*/

    @media(max-width: 767px){
        .wrapper_content .container { padding-left: 0; padding-right: 0; }

        /* List Payment */
        #list_payment thead tr, #list_payment thead tr th, #list_payment tbody tr td { display: block; width: 100% !important; }
        #list_payment tbody tr td { padding: 10px; text-align: center; }
        #list_payment tbody tr td:first-child { padding: 10px; text-align: center; }
        #list_payment tbody tr td:first-child p { margin-bottom: 0; }
        #list_payment tbody tr td:nth-child(3) { display: inline-block; text-align: right; height: 70px; width: 50% !important; }
        #list_payment tbody tr td:nth-child(3) span { display: block; margin-bottom: 10px; }
        #list_payment tbody tr td:nth-child(4) { display: inline-block; text-align: left; height: 70px; width: 50% !important; }
        #list_payment tbody tr td:nth-child(4) span { display: block; margin-bottom: 10px; font-weight: normal; }
        #list_payment tbody tr td:nth-child(5) a { display: inline-block; margin: 0 10px; font-size: 20px; }
        #list_payment .lp_content img { width: auto; }
        #list_payment .lp_content .lpc_desc { width: 100%; padding-left: 0; }

        /* Payment Info */
        #payment_info { padding: 15px 15px 40px 15px; }
        #payment_info .payment_box h4 { font-size: 15px; }
    }
</style>