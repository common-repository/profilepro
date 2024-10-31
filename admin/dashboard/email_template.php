<form method="post" action="">

<h4 class="profilepro-title">

               <?php _e('Outgoing Mail Setting','profilepro'); ?>

            </h4>
<div id="accordion" class="panel-group">

    <div class="panel panel-default">

        <div class="panel-heading">

            

        </div>

        <div id="outgoing" class="panel-collapse collapse">

            <div class="panel-body">
<table class="form-table">

		<tr valign="top">
		<th scope="row"><label for="from_email_address"><?php _e('From email address','profilepro'); ?></label></th>
		<td>
			<input type="text" name="from_email_address" id="from_email_address" value="<?php echo profilepro_get_option('from_email_address'); ?>" class="regular-text" />
			
		</td>
	</tr>
<tr valign="top">
		<th scope="row"><label for="from_email_name"><?php _e('From_email_name','profilepro'); ?></label></th>
		<td>
			<input type="text" name="from_email_name" id="from_email_address" value="<?php echo profilepro_get_option('from_email_name'); ?>" class="regular-text" />
			
		</td>
	</tr>

</table>
     
            </div>

        </div>

    </div>

    <div class="panel panel-default">

        <div class="panel-heading">

            <h4 class="profilepro-title">

                <?php _e('Welcome Email ','profilepro'); ?>

            </h4>

        </div>

        <div id="welcome" class="panel-collapse collapse">

            <div class="panel-body">
<table class="form-table">

		<tr valign="top">
		<th scope="row"><label for="new_user_notification"><?php _e('New User Notification','profilepro'); ?></label></th>
		<td>
			<select name="new_user_approve" id="new_user_notification" class="chosen-select" style="width:300px">
				<option value="1" <?php selected(1, profilepro_get_option('new_user_notification')); ?>><?php _e('Yes','profilepro'); ?></option>
				<option value="0" <?php selected(0, profilepro_get_option('new_user_notification')); ?>><?php _e('No','profilepro'); ?></option>
				
			</select>
		</td>
	</tr>
<tr valign="top">
		<th scope="row"><label for="welcome_email_subject"><?php _e('Subject','profilepro'); ?></label></th>
		<td>
			<input type="text" name="welcome_email_subject" id="welcome_email_subject" value="<?php echo profilepro_get_option('welcome_email_subject'); ?>" class="regular-text" />
			
		</td>
	</tr>
<tr valign="top">
		<th scope="row"><label for="welcome_email_content"><?php _e('Email Content','profilepro'); ?></label></th>
		<td><textarea name="welcome_email_content" id="welcome_email_content" class="large-text code" rows="10"><?php echo profilepro_get_option('welcome_email_content'); ?></textarea></td>
	</tr>

</table>
     
            </div>

        </div>

    </div>

     <div class="panel panel-default">

        <div class="panel-heading">

            <h4 class="profilepro-title">

                <?php _e('Password Reset Email ','profilepro'); ?>

            </h4>

        </div>

        <div id="reset" class="panel-collapse collapse">

            <div class="panel-body">
<table class="form-table">

		<tr valign="top">
		<th scope="row"><label for="passwordreset_notifications"><?php _e('Password Reset Notification','profilepro'); ?></label></th>
		<td>
			<select name="passwordreset_notifications" id="passwordreset_notifications" class="chosen-select" style="width:300px">
				<option value="1" <?php selected(1, profilepro_get_option('passwordreset_notifications')); ?>><?php _e('Yes','profilepro'); ?></option>
				<option value="0" <?php selected(0, profilepro_get_option('passwordreset_notifications')); ?>><?php _e('No','profilepro'); ?></option>
				
			</select>
		</td>
	</tr>
<tr valign="top">
		<th scope="row"><label for="passwordreset_subject"><?php _e('Subject','profilepro'); ?></label></th>
		<td>
			<input type="text" name="passwordreset_subject" id="passwordreset_subject" value="<?php echo profilepro_get_option('passwordreset_subject'); ?>" class="regular-text" />
			
		</td>
	</tr>
<tr valign="top">
		<th scope="row"><label for="passwordreset_content"><?php _e('Email Content','profilepro'); ?></label></th>
		<td><textarea name="passwordreset_content" id="passwordreset_content" class="large-text code" rows="10"><?php echo profilepro_get_option('passwordreset_content'); ?></textarea></td>
	</tr>

</table>
     
            </div>

        </div>

    </div>

  <div class="panel panel-default">

        <div class="panel-heading">

            <h4 class="profilepro-title">

               <?php _e('Awaiting Admin Approval ','profilepro'); ?>

            </h4>

        </div>

        <div id="adminapproval" class="panel-collapse collapse">

            <div class="panel-body">
<table class="form-table">

		<tr valign="top">
		<th scope="row"><label for="awaiting_admin_approval_n"><?php _e('Admin Approval Notification','profilepro'); ?></label></th>
		<td>
			<select name="awaiting_admin_approval_n" id="awaiting_admin_approval_n" class="chosen-select" style="width:300px">
				<option value="1" <?php selected(1, profilepro_get_option('awaiting_admin_approval_n')); ?>><?php _e('Yes','profilepro'); ?></option>
				<option value="0" <?php selected(0, profilepro_get_option('awaiting_admin_approval_n')); ?>><?php _e('No','profilepro'); ?></option>
				
			</select>
		</td>
	</tr>
<tr valign="top">
		<th scope="row"><label for="awaiting_admin_approval_s"><?php _e('Subject','profilepro'); ?></label></th>
		<td>
			<input type="text" name="awaiting_admin_approval_s" id="awaiting_admin_approval_s" value="<?php echo profilepro_get_option('awaiting_admin_approval_s'); ?>" class="regular-text" />
			
		</td>
	</tr>
<tr valign="top">
		<th scope="row"><label for="awaiting_admin_approval_c"><?php _e('Email Content','profilepro'); ?></label></th>
		<td><textarea name="awaiting_admin_approval_c" id="awaiting_admin_approval_c" class="large-text code" rows="10"><?php echo profilepro_get_option('awaiting_admin_approval_c'); ?></textarea></td>
	</tr>

</table>
     
            </div>

        </div>

    </div>


  <div class="panel panel-default">

        <div class="panel-heading">

            <h4 class="profilepro-title">

                <?php _e('Verify Email ','profilepro'); ?>

            </h4>

        </div>

        <div id="verifyemail" class="panel-collapse collapse">

            <div class="panel-body">
<table class="form-table">

		<tr valign="top">
		<th scope="row"><label for="passwordreset_notifications"><?php _e('Verify Email Notification','profilepro'); ?></label></th>
		<td>
			<select name="verify_email_n" id="verify_email_n" class="chosen-select" style="width:300px">
				<option value="1" <?php selected(1, profilepro_get_option('verify_email_n')); ?>><?php _e('Yes','profilepro'); ?></option>
				<option value="0" <?php selected(0, profilepro_get_option('verify_email_n')); ?>><?php _e('No','profilepro'); ?></option>
				
			</select>
		</td>
	</tr>
<tr valign="top">
		<th scope="row"><label for="verify_email_s"><?php _e('Subject','profilepro'); ?></label></th>
		<td>
			<input type="text" name="verify_email_s" id="verify_email_s" value="<?php echo profilepro_get_option('verify_email_s'); ?>" class="regular-text" />
			
		</td>
	</tr>
<tr valign="top">
		<th scope="row"><label for="verify_email_c"><?php _e('Email Content','profilepro'); ?></label></th>
		<td><textarea name="verify_email_c" id="verify_email_c" class="large-text code" rows="10"><?php echo profilepro_get_option('verify_email_c'); ?></textarea></td>
	</tr>

</table>
     
            </div>

        </div>

    </div>
   

</div>
<p class="submit">
	<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','profilepro'); ?>"  />

</p>

</form>