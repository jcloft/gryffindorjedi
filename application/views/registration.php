<h1>Registration</h1>
<?  $this->load->helper('form');
	$form_attributes = array('class' => 'register', 'id' => 'register');
	echo form_open('logincontrol/register', $form_attributes);
	$user_data = array('name' => 'username',
						'id' => 'username',
						'placeholder' => 'Desired Username'
						);
	$password_data = array('name' => 'password',
							'id' => 'password',
							'placeholder' => 'Password'
							);
	$confirm_pass = array ('name' => 'confirm_pass',
							'id' => 'confirm_pass',
							'placeholder' => 'Confirm Password'
							);
	$submit_data = array('name' => 'submit',
						'id' => 'submit',
						'value' => 'Register'
						);
	echo form_input($user_data);
	echo form_password($password_data);
	echo form_password($confirm_pass);
	echo form_submit($submit_data);
	echo form_close();

	echo '<br /><br />';

	$cancel_attributes = array('class' => 'cancel', 'id' => 'cancel');
	echo form_open('welcome/index', $cancel_attributes);
	$cancel_data = array('name' => 'submit',
						'id' => 'submit',
						'value' => 'Cancel');
	echo form_submit($cancel_data);
	echo form_close();
?>
