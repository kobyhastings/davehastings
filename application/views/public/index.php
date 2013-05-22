

<div class="jumbotron masthead">
  <div class="container">
    <h1>Welcome</h1>
    <p>Welcome to my blog. This site is currently under construction.</p>
  </div>
</div>

<div class="bs-docs-social">
  <div class="container">
    <ul class="bs-docs-social-buttons">
      <li class="follow-btn">
        <a href="https://twitter.com/preacherhaste" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @preacherhaste</a>
      </li>
      <li class="tweet-btn">
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://twitter.github.com/bootstrap/" data-count="horizontal" data-via="twbootstrap" data-related="mdo:Creator of Twitter Bootstrap">Share</a>
      </li>
    </ul>
  </div>
</div>

<div class="container" style="padding-bottom: 70px;">

  <div class="marketing">

    <h1>Recent Blog Posts:</h1>
    <br />

    <div class="row-fluid">
      <?php foreach ($posts as $post) { ?>
        <div class="span4">
          <h2>
            <?php 
              $title = str_split($post->title);
              if(count($title) < 30) {
                echo $post->title;   
              } else {
                for ($i=0; $i < 30; $i++) { 
                  echo $title[$i];
                }
                echo "...";
              }

             ?>
          </h2>
          <p class="blogDate"><strong><?php echo date('F d, Y', strtotime($post->date)); ?></strong></p>
          <div class="blogBody">
            <?php 
              $content = str_split($post->content);
              if(count($content) < 200) {
                echo $post->content;
              } else {
                for ($i=0; $i < 200; $i++) { 
                  echo $content[$i];
                }
                echo "...";
              }

             ?>
             <br />
             <?php echo anchor('blog/viewBlogPost/'.$post->id, 'read more...'); ?>
          </div>
        </div>
      <?php } ?>
      
    </div>
  </div>

</div>



  