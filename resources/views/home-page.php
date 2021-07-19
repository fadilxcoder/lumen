<?php include('head.php'); ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo url() ?>/img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Lumen.</h1>
          <span class="subheading">The stunningly fast micro-framework by Laravel.</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php foreach($posts as $_posts): ?>
                <div class="post-preview">
                    <a href="<?php echo url('post/'.$_posts->id) ?>">
                        <h2 class="post-title"> <?php echo $_posts->title; ?></h2>
                        <h3 class="post-subtitle"><?php echo strip_tags(str_limit($_posts->description, 150)); ?></h3>
                    </a>
                </div>
                <hr>
            <?php endforeach; ?>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>
<hr>
<?php include('footer.php'); ?>        