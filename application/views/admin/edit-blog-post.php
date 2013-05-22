<div class="jumbotron masthead">
  <div class="container">
    <div class="hero-unit" id="editPost">
      <?php echo form_open('admin/home/updatePost/'.$post->id); ?>
          
        <div class="row-fluid">
          <div class="span8 offset2">
            <div class="controls controls-row newBlogPost">
              <?php echo form_label('Blog Title:'); ?>
              <?php echo form_input('title', $post->title, "class='span12'"); ?>
            </div>
            <div class="controls controls-row newBlogPost">
              <?php echo form_label('Blog Content:'); ?>
              <?php echo form_textarea('editor1', $post->content, "class='span12' rows='15'"); ?>
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span8 offset2">
            <center>
              <br />
              <?php echo form_submit(array('name'=>'submit', 'value'=>"Save", 'class'=>'btn btn-inverse', 'id'=>'btn-small')); ?>
              <?php echo anchor('admin/home/deletePost/'.$post->id, 'Delete Post', "class='hidden-phone btn btn-small btn-inverse' id='btn-small'"); ?>
            </center>
          </div>
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>


<script>
    CKEDITOR.replace( 'editor1' );
</script>