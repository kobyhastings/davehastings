<div class="jumbotron masthead">
    <div class="container">
        <div class="hero-unit">
            <div class="row">
                <div class="page-header">
                    <h1>Login</h1>
                </div>
                <div class="span8 offset4">
                      <fieldset>
                        <?php echo validation_errors('<p class="error">'); ?>
                        <br />
                        <?php $hidden = array('date' => date('Y-m-d')) ?>
                        <?php echo form_open('', '', $hidden); ?>
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
        </div>
    </div>
</div>

<div class="bs-docs-social">
    <ul class="bs-docs-social-buttons">
      <li class="follow-btn">
        <a href="https://twitter.com/preacherhaste" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @preacherhaste</a>
      </li>
      <li class="tweet-btn">
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://twitter.github.com/bootstrap/" data-count="horizontal" data-via="twbootstrap" data-related="mdo:Creator of Twitter Bootstrap">Share</a>
      </li>
    </ul>

</div>




