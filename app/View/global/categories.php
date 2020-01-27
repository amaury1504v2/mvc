<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Categories</h6>
    <?php foreach ($categories as $categories): ?>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%"/><text x="50%" y="50%" dy=".3em">32x32</text></svg>
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark"><?= $categories->titre ?></strong>
        <?= $categories->description ?>
      </p>
    </div>
    <?php endforeach; ?>
        </div>
    </div>
</div>

