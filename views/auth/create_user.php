<div class='mainInfo'>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
    <?php echo form_open("auth/create_user", array('role' => 'form'));?>
    <?php foreach($columns_create_form as $column_name):
    	if ($column_name == 'password') continue;?>
    <div class="form-group">
		<label for="<?php echo $column_name; ?>"><?php echo lang(sprintf('create_user_%s_label', $column_name));?></label>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-10">
	    		<?php echo form_input($$column_name, null, ' class="form-control"');?>
	    	</div>
	    </div>
	</div>
	<?php endforeach; ?>
	<div class="form-group">
		<label for="password"><?php echo lang('create_user_password_label');?></label>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-10">
	    		<?php echo form_input($password, null, ' class="form-control"');?>
	    	</div>
	    </div>
	</div>
	<div class="form-group">
		<label for="password_confirm"><?php echo lang('create_user_password_confirm_label');?></label>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-10">
	    		<?php echo form_input($password_confirm, null, ' class="form-control"');?>
	    	</div>
	    </div>
	</div>
	<p>
		<input type="submit" value="<?php echo lang('create_user_submit_btn');?>" class="btn btn-primary" />
	</p>
    <?php echo form_close();?>

</div>
