<?php include('head.php'); ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo secure_url().'/img/'.$post[0]->img_name ?>')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1><?php echo $post[0]->title ?></h1>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php echo $post[0]->description ?>
            <br><hr><br>
            <h2 class="post-title">Comments</h2>
            <ul>
                <?php foreach($comments as $_comments): ?>
                <li><?php echo $_comments->message; ?></li>
                <?php endforeach; ?>
            </ul>
            <br><br><hr><br>
            <form name="sentMessage" id="contactForm" action="<?php echo route('post', ['id' => $post[0]->id]) ?>" method="post">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Message</label>
                        <textarea rows="5" class="form-control" placeholder="Message" id="message" name="message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="sendMessageButton" id="sendMessageButton">Send</button>
                </div>
          </form>
        </div>
    </div>
</div>
<hr>
<?php include('footer.php'); ?>        