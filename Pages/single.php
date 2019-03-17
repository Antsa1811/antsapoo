<?php
$post =$db->prepare("SELECT * FROM articles WHERE id = ?", [$_GET['id']], 'App\Table\Article',true);
var_dump($post);

?>

<h1 class="title"><?= $post->titre; ?> </h1>
<p><?= $post->contenu; ?></p>