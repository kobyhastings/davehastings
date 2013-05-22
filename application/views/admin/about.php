<div class="jumbotron masthead">
 	<div class="container">
 		<div class="hero-unit">
        <h2 class="hidden-phone">Biography Page</h2>
		    <?php echo form_open('admin/home/updateAbout'); ?>
          <?php echo form_textarea('editor1', $content->content); ?>
          <br />
          <center>
            <?php echo form_submit('submit', 'Save Changes', "class='btn btn-inverse btn-small'"); ?>
            <br /><br />
          </center>
        <?php echo form_close(); ?>
    </div>
	</div>
</div>




<script>
    CKEDITOR.replace( 'editor1' );
</script>



