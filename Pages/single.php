<?php
use App\App;
use App\Table\Article;
use App\Table\Categorie;


$post =Article::find($_GET['id']);

if($post === false){
    App::notFound();
}

App::setTitle($post->titre);

$categorie= Categorie::find($post->category_id)

?>

<h1 class="title"><?= $post->titre; ?> </h1>

</br>

<p><em><?= $post->categorie;  ?></em></p>

</br>


<p><?= $post->contenu; ?></p>