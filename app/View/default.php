<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/examples/album/album.css">
      <title>MVC Blog</title>
  </head>
  <body>
    <header>
      <div class="navbar navbar-dark shadow-sm" style="background: blue;">
        <div class="container d-flex justify-content-between">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="?home">MVC Blog</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href=?home>Articles</a>
                <a class="nav-item nav-link active" href=?categories>Categories</a>
                <a class="nav-item nav-link active" href=?addArticle>Ajouter un article</a>
                <a class="nav-item nav-link active" href=?addCategorie>Ajouter une categorie</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <main role="main">
      <?= $content ?>
    </main>
  </body>
</html>





