
<div class="row">
	<div class="page-header">
		<h1>Invalid Credentials</h1>
	</div>
	<div class="span8 offset4">
		  <fieldset>
            <p class="error">Username and password did not match.</p>
            <br />
            <?php $hidden = array('date' => date('Y-m-d')) ?>
            <?php echo form_open('login', '', $hidden); ?>
		    <?php $attributes = array(
                    'name' => 'username',
                    'maxlength' => '255',
                    'value' => set_value('username'),
                    'placeholder' => 'Username'
            ); ?>
            <?php echo form_input($attributes); ?>

            <br />

            <?php $attributes = array(
                    'name' => 'password', 
                    'maxlength' => '255',
                    'value' => set_value('password'),
                    'placeholder' => 'Password',
                    'type' => 'password'
            ); ?>
            <?php echo form_input($attributes); ?>

            <br />
		    <button type="submit" class="btn btn-success">Submit</button>
            <?php echo form_close(); ?>
		  </fieldset>
	</div>
</div>
