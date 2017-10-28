<section>
    <div id="breadcrump" class="col-md-10 col-md-offset-1">
        <ul class="breadcrump_list">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="javascript:void(0);"><?php echo ucwords(str_replace('_', ' ', $this->uri->segment(1))); ?></a></li>
            <li class="active"><?php echo ucwords(str_replace('_', ' ', $this->uri->segment(2))); ?></li>
        </ul>
    </div>
    <div class="clearfix"></div>
</section>