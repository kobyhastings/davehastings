<div class="jumbotron masthead">
 	<div class="container">
 		<div class="hero-unit">
        <h2 class="hidden-phone">Blog Posts</h2>
 				<a class="hidden-phone btn btn-small btn-inverse" id="btn-small" style="float:right;" href="#myModal" data-toggle="modal">New Post</a>
		    <div class="newBlogPost row">
          <a class="visible-phone btn btn-small btn-inverse" id="btn-small-phone" style="width: 100%;" href="#myModal" data-toggle="modal">New Post</a>
        </div>

		  <?php

		  if(isset($posts) && $posts != NULL && $posts != '') { ?>
      <p id="datePosted" class="hidden-phone">Click a blog post to read the content.</p>
      <p id="datePosted" class="visible-phone">Tap a blog post to read the content.</p>
        <div class="accordion" id="accordion2">
        <?php $count = 0; ?>
		  	 <?php foreach($posts as $post) { ?>
         <?php $count++; ?>
          <div class="accordion-group">
            <div class="accordion-heading">
              <strong>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $post->id; ?>">
                  <div class="row" style="margin-bottom: -10px;">
                    <div class="span3" id="date">
                      <?php echo date('l F d, Y', strtotime($post->date))." @ ".date('g:i a', strtotime($post->date)); ?>
                    </div>
                    <div class="span7" id="titlePhone">
                      <?php echo "<strong>".$post->title."</strong>"; ?>
                    </div>
                  </div>
                </a>
              </strong>
            </div>
            <div id="<?php echo $post->id; ?>" class="accordion-body collapse in">
              <div class="accordion-inner">
                <div class="row-fluid raffleContainer">
                  <p id="postContent"><?php echo $post->content; ?></p>
                  <br />
                  <?php echo anchor('admin/home/editPost/'.$post->id, 'Edit Post', "class='hidden-phone btn btn-small btn-inverse' id='btn-small' style='float:right;'"); ?>
                </div>
              </div>
            </div>
          </div>

		  	<?php }
		  }
		  else {
		  	echo "<p>You do not have any blog posts yet. </p>";
		  }
		  ?>

    </div> <!-- close accordion div -->
    <?php echo $pages; ?>
		</div>
	</div>
</div>






 <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">New Blog Post</h3>
      </div>
      <div class="modal-body">
          <?php echo form_open('admin/home/savePost'); ?>
          
          <div class="controls controls-row newBlogPost">
          	<?php echo form_label('Blog Title:'); ?>
          	<?php echo form_input('title', '', "class='span5'"); ?>
          </div>

          <div class="controls controls-row newBlogPost">
          	<?php echo form_label('Blog Content:'); ?>
          	<?php echo form_textarea('editor1', '', "class='span5' rows='15'"); ?>
          </div>
          <br />
          <center>
          	<?php echo form_submit(array('name'=>'submit', 'value'=>"Post", 'class'=>'btn btn-inverse')); ?>
          </center>
          <?php echo form_close(); ?>
      </div>
    </div>


          <!--   // echo "<h3 id='postTitle'>".$post->title."</h3>";
      //     echo "<p id='datePosted'>".$post->date."</p>";
          // echo "<p id='postContent'>".$post->content."</p>";
      //     echo "<hr />"; -->

<script>
    (function(){
      $(".collapse").collapse('hide');
    })();
</script>

<script>
    CKEDITOR.replace( 'editor1' );
</script>