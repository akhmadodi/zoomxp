Activity Title: <?php echo $query->row()->activity_title; ?><br/>
Activity Description: <?php echo $query->row()->activity_text; ?><br/>
Start Date: <?php echo date('Y-m-d', strtotime($query->row()->start_date)); ?><br/>
End Date: <?php echo date('Y-m-d', strtotime($query->row()->end_date)); ?><br/>
Quota: <?php echo number_format(curquota($query->row()->id), 0, '.', ','); ?><br/>
Price: IDR <?php echo number_format($query->row()->price, 0, '.', ','); ?>

<?php $this->load->view('form_book', array('query' => $query)); ?>