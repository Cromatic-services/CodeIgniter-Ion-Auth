<div class='mainInfo'>

	<div class="alert alert-danger"><?php echo sprintf(lang('deactivate_subheading'), $user['username']); ?></div>
	
    <?php echo form_open("auth/deactivate/".$user['id']);?>
    	
      <p>
      	<label for="confirm"><?php echo lang('deactivate_confirm_y_label'); ?></label>
		<input type="radio" name="confirm" value="yes" checked="checked" />
      	<label for="confirm"><?php echo lang('deactivate_confirm_n_label'); ?></label>
		<input type="radio" name="confirm" value="no" />
      </p>
      
      <?php echo form_hidden($csrf); ?>
      <?php echo form_hidden(array('id'=>$user['id'])); ?>
      
      <p>
		<input type="submit" value="<?php echo lang('deactivate_submit_btn');?>" class="btn btn-primary" />
	</p>

    <?php echo form_close();?>

</div>
