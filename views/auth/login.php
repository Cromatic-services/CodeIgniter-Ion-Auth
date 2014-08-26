<div id="infoMessage"><?php echo $message;?></div>
<?php echo form_open("auth/login", array('role' => 'form'));?>
<div class="form-group">
	<label for="identity"><?php echo lang('login_identity_label', 'identity');?></label>
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-10">
    		<?php echo form_input($email, null, ' class="form-control"');?>
    	</div>
    </div>
</div>
<div class="form-group">
	<label for="password"><?php echo lang('login_password_label', 'password');?></label>
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-10">
	    	<?php echo form_input($password, null, ' class="form-control"');?>
	    </div>
	</div>
</div>
<div class="form-group">
	<input type="submit" value="<?php echo lang('login_submit_btn');?>" class="btn btn-primary" />
	<a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
</div>
<?php echo form_close();?>
