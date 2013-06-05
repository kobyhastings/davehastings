<div class="jumbotron masthead">
 	<div class="container">



<?php $this->db->order_by('date', 'desc'); ?>
<?php $post = $this->db->get('blogposts', 1)->row(); ?>    
  <?php if(isset($post) && $post != NULL && $post != '') { ?>  
    <div class="hero-unit">      
      <h2><?php echo $post->title; ?></h2>
      <p class="indexViewsCounter"><?php echo $post->views." views"; ?></p>
      <p>
        <?php 
          $content = str_split($post->content);
          if(count($content) < 1000) {
            echo $post->content;
          } else {
            for ($i=0; $i < 1000; $i++) { 
              echo $content[$i];
            }
            echo "......<br />";
          }
        ?>
      </p>
      <p><?php echo anchor('public/home/viewPost/'.$post->id, 'Read more...', "class='btn btn-inverse'"); ?></p>
    </div>
  <?php } ?>



  <?php if(isset($posts) && $posts != NULL && $posts != '') { ?>
          <?php $counter = 1; ?>
          <?php foreach ($posts as $post) { ?>
          <?php if($counter != 1) { ?>
            <div id="blog_post">
              <h2 id="postTitle"><?php echo $post->title; ?><small> <em><?php echo date('F d, Y', strtotime($post->date)); ?></em></small></h2>
              <p class="indexViewsCounter" style="color: #fff;"><?php echo $post->views." views"; ?></p>
              <p id="postContent">
                <?php 
                $content = str_split($post->content);
                if(count($content) < 700) {
                  echo $post->content;
                } else {
                  for ($i=0; $i < 700; $i++) { 
                    echo $content[$i];
                  }
                  echo "...<br />";
                }
                echo "<br /><br /><br />";
                echo anchor('public/home/viewPost/'.$post->id, 'read more...', "class='btn btn-small btn-inverse' id='btn-small' style='float:right;'"); ?>
              </p>
            </div>
            <?php } ?>
          <?php $counter++; ?>
          <?php } ?>

      <?php } ?>

      <br />
      <center><?php echo $pages; ?></center>
	</div>
</div>

<div class="bs-docs-social">
  <div class="container">
    <ul class="bs-docs-social-buttons">
      <li class="follow-btn">
        <a href="https://twitter.com/preacherhaste" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @preacherhaste</a>
      </li>
    </ul>
  </div>
</div>





