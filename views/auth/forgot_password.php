<p><?php echo sprintf(lang('forgot_password_subheading'), lang(sprintf('forgot_password_%s_identity_label', $identity)));?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password", array('role' => 'form', 'class' => 'form-inline'));?>
	<div class="form-group">
		<label for="<?php echo $identity; ?>"><?php echo lang(sprintf('forgot_password_%s_identity_label', $identity)) ;?></label> <br />
		<?php echo form_input($identity, null, ' class="form-control"');?>
	</div>
	<p>
		<input type="submit" value="<?php echo lang('forgot_password_submit_btn');?>" class="btn btn-default" />
	</p>
<?php echo form_close();?>