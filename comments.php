
<div class="post-comments">
  <header>
    <h3 class="h6">Post Comments<span class="no-of-comments"><?php comments_number();?></span></h3>
  </header>
  <?php foreach($comments as $comment){?>
  <div class="comment">
    <div class="comment-header d-flex justify-content-between">
      <div class="user d-flex align-items-center">
        <div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title"><strong><?php comment_author();?></strong><span class="date"><?php comment_date();?></span></div>
      </div>
    </div>
    <div class="comment-body">
    <?php comment_text();?>
    </div>
  </div>
<?php } ?>
  <!-- <div class="comment">
    <div class="comment-header d-flex justify-content-between">
      <div class="user d-flex align-items-center">
        <div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title"><strong>Nikolas</strong><span class="date">May 2016</span></div>
      </div>
    </div>
    <div class="comment-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    </div>
  </div>
  <div class="comment">
    <div class="comment-header d-flex justify-content-between">
      <div class="user d-flex align-items-center">
        <div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title"><strong>John Doe</strong><span class="date">May 2016</span></div>
      </div>
    </div>
    <div class="comment-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    </div>
  </div> -->
</div>

<?php
if(comments_open()){ ?>
  <form action="<?php echo site_url('wp-comments-post.php');?>" method="post" class="commenting-form" id="commentform">
    <div class="row">
      <div class="form-group col-md-6">
        <input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" id="comment_post_ID">
        <input type="text" name="name" id="username" placeholder="Name" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <input type="email" name="email" id="useremail" placeholder="Email Address (will not be published)" class="form-control">
      </div>
      <div class="form-group col-md-12">
        <textarea name="usercomment" id="comment" placeholder="Type your comment" class="form-control"></textarea>
      </div>
      <div class="form-group col-md-12">
        <button type="submit" class="btn btn-secondary">Submit Comment</button>
      </div>
    </div>
  </form>
  <?php

}else{
  _e('Comments are closed','spnin');
}

 ?>
