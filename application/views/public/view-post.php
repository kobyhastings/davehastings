<div class="jumbotron masthead">
 	<div class="container">

    <div class="hero-unit"> 
      <div id="sharePost">
        <li class="tweet-btn">
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://davehastings.org/public/viewPost/<?php echo $post->id; ?>" data-count="horizontal" data-via="twbootstrap" data-related="mdo:Creator of Twitter Bootstrap">Share</a>
        </li>
        <div class="fb-like" data-href="http://localhost/sites/davehastings" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
      </div>     
      <h2><?php echo $post->title; ?></h2>
      <p><?php echo $post->content; ?></p>
    </div>


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





