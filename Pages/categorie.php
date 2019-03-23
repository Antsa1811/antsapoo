<?php

use App\Table\Article;
use App\Table\Categorie;
use App\App;

$categorie = Categorie::find($_GET['id']);

 if($categorie === false){
     \App\App::notFound();
 }

$articles = Article::lastByCategory($_GET['id']);
$categories=Categorie::all();


?>

<h1><?= $categorie->titre  ?></h1>

<div class="columns">
    <div class="column">
        <?php foreach ($articles as $post ): ?>

   
      
    <h2> <a href="<?php echo $post->url  ?>"><?= $post->titre; ?></a> </h2>
    
    <p><em><?= $post->categorie;  ?></em></p>
   
    <p><?php echo $post->extrait ; ?></p>
     
<?php endforeach; ?> 
    </div>
    
    
    
    <div class="column">
        <ul>
         <?php foreach(\App\Table\Categorie::all() as $categorie) :  ?>
            
            <li> <a href="<?= $categorie->url;  ?>"><?= $categorie->titre; ?></a> </li>
        <?php endforeach; ?>
        </ul> 
    </div>
</div>