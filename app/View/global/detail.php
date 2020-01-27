<?php foreach ($articleSingle as $article): ?>
  <div class="container marketing" style="margin-top:40px">
    <!-- START THE FEATURETTES -->
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><?= $article->title ?></span></h2>
        <p class="lead"><?= $article->text ?></p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>
  </div><!-- /.container -->
  <?php endforeach; ?>
