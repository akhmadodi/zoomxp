<?php
$get_activity = $this->master_model->get_data('activity_title', 'activity', array('activated' => 1, 'id' => $activity_id), null, null);
?>

Information Payment<br/><br/>
Activity Name: <?php echo $get_activity->row()->activity_title; ?><br/>
Quota: <?php echo number_format($quota, 0, '.', ','); ?><br/>
Price: <?php echo number_format($price, 0, '.', ','); ?><br/>
Total: <?php echo number_format(($price * $quota), 0, '.', ','); ?><br/>
Status: <?php echo 'Waiting payment'; ?>

<p><a href="<?php echo base_url(); ?>activity">Back</a></p>