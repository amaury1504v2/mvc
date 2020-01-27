<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($articles as $article): ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        <div class="card-body">
                        <a href="?detail=<?= $article->id ?>"><h2 ><?= $article->title ?></h2></a>
                        <p class="card-text">
                                <?php echo first15words($article->text);?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="?deleteArticle=<?= $article->id ?>" class="btn btn-sm btn-outline-secondary">Supprimer</a></div>
                                    <small class="text-muted"><?= $article->date ?></small>
                                </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php
function first15words($s, $limit=15) { //fontion qui prend en parametre une string et un int et qui renvoie la string tronquer au nombre de mot de la limite
    return preg_replace('/((\w+\W*){'.($limit-1).'}(\w+))(.*)/', '${1}', $s);   
}
?>