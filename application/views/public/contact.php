<div class="jumbotron masthead">
    <div class="container">
        <div class="hero-unit">
            <h2>Contact Us</h2>

            <div class="row">
                <div class="span8 offset4">
                    <p>Please take a moment to complete this form. </p>
                      <fieldset>
                        <?php echo validation_errors('<p class="error">'); ?>
                        <br />
                        <?php $hidden = array('date' => date('Y-m-d')) ?>
                        <?php echo form_open('public/home/saveFormSubmission', '', $hidden); ?>
                        <?php $attributes = array(
                                'name' => 'name',
                                'maxlength' => '255',
                                'value' => set_value('name'),
                                'placeholder' => 'Name*',
                                'class' => 'input-large required'
                        ); ?>
                        <?php echo form_input($attributes); ?>

                        <br />

                        <?php $attributes = array(
                                'name' => 'email', 
                                'maxlength' => '255',
                                'value' => set_value('email'),
                                'placeholder' => 'Email*',
                                'class' => 'input-xlarge'
                        ); ?>
                        <?php echo form_input($attributes); ?>

                        <br />

                        <?php $attributes = array(
                                'name' => 'phone', 
                                'maxlength' => '10',
                                'value' => set_value('phone'),
                                'placeholder' => 'Phone Number',
                                'class' => 'input-large'
                        ); ?>
                        <?php echo form_input($attributes); ?>

                        <br />

                        <?php $attributes = array(
                                'name' => 'address', 
                                'maxlength' => '255',
                                'value' => set_value('address'),
                                'placeholder' => 'Address',
                                'class' => 'input-xlarge'
                        ); ?>
                        <?php echo form_input($attributes); ?>

                        <br />

                        <?php $attributes = array(
                                'name' => 'city', 
                                'maxlength' => '255',
                                'value' => set_value('city'),
                                'placeholder' => 'City*',
                                'class' => 'input-medium'
                        ); ?>
                        <?php echo form_input($attributes); ?>

                        <?php $attributes = array(
                                'name' => 'state',
                                'maxlength' => '2',
                                'value' => set_value('state'),
                                'placeholder' => 'State*',
                                'class' => 'input-mini'
                        ); ?>
                        <?php echo form_input($attributes); ?>

                        <?php $attributes = array(
                                'name' => 'zip',
                                'maxlength' => '5',
                                'value' => set_value('zip'),
                                'placeholder' => 'Zip*',
                                'class' => 'input-mini'
                        ); ?>
                        <?php echo form_input($attributes); ?>

                        <br />

                        <?php $attributes = array(
                                'name' => 'comments',
                                'value' => set_value('comments'),
                                'placeholder' => 'Enter your comments here.',
                                'rows' => 8,
                                'class' => 'input-xlarge'
                        ); ?>
                        <?php echo form_textarea($attributes); ?>

                        <br />
                        
                        <div class="span2">
                            <?php echo $captcha; ?>
                        </div>
                        <div class="span2">
                            <?php $attributes = array(
                                    'name' => 'captcha',
                                    'value' => set_value('captcha'),
                                    'class' => 'input-mini'
                            ); ?>
                            <?php echo form_input($attributes); ?>
                        </div>

                        <br />
                        <br />
                        <button type="button" class="btn btn-inverse">Submit</button>
                        <?php echo form_close(); ?>
                      </fieldset>
                </div>
            </div>


        </div>
    </div>
</div>


<div class="bs-docs-social">
    <ul class="bs-docs-social-buttons">
      <li class="follow-btn">
        <a href="https://twitter.com/preacherhaste" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @preacherhaste</a>
      </li>
    </ul>

</div>