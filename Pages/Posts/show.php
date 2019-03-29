<?php
$app=App::getInstance();
 $post = $app->getTable('Post')->findWithCategory($_GET['id']);

if($post === false){
    $app->notFound();
}

$app->title =$post->titre;


?>
<p><em><?= $post->categorie;  ?></em></p>

</br>


<p><?= $post->contenu; ?></p>