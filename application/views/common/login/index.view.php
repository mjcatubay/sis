<div class="account-container stacked">
	<div class="content clearfix">	
		<?php if(isset($message_error) && $message_error){
			  echo '<div class="alert alert-error">';
				echo '<a class="close" data-dismiss="alert">×</a>';
				echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';
			  echo '</div>';             
		  }
		 ?>
		<form action="<?php echo base_url(); ?>user/validate_credentials" method="post">
			<h1>Sign In</h1>		
			<div class="login-fields">
				<p>Sign in using your registered account:</p>
				<div class="field">
					<label for="username">Username:</label>
					<input type="text" id="user_name" name="user_name" value="" placeholder="Username" class="form-control input-lg username-field" />
				</div> <!-- /field -->
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="form-control input-lg password-field"/>
				</div> <!-- /password -->
			</div> <!-- /login-fields -->
			<div class="login-actions">
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>	
				<button class="login-action btn btn-primary">Sign In</button>
			</div> <!-- .actions -->
		</form>                                                                             
	</div> <!-- /content -->
</div> <!-- /account-container -->
<!-- Text Under Box -->
<div class="login-extra">
	Don't have an account? <a href="<?php echo base_url(); ?>signup">Sign Up</a><br/>
	Remind <a href="#">Password</a>
</div> <!-- /login-extra -->

