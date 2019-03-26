<h1 class="title"> Je suis la home pages </h1>

<div class="columns">
    <div class="column">
        <?php foreach (App::getInstance()->getTable('Post')->last() as $post ): ?>

   
      
    <h2> <a href="<?php echo $post->url  ?>"><?= $post->titre; ?></a> </h2>
    
    <p><em><?= $post->categorie;  ?></em></p>
   
    <p><?php echo $post->extrait ; ?></p>
     
<?php endforeach; ?> 
    </div>
    
    
    
    <div class="column">
        <ul>
         <?php foreach(App::getInstance()->getTable('Category')->all() as $categorie) :  ?>
            
            <li> <a href="<?= $categorie->url;  ?>"><?= $categorie->titre; ?></a> </li>
        <?php endforeach; ?>
        </ul> 
    </div>
</div>

    <?php
/*
 Affiche tous les enregistrement
 * $db = new App\Database('poo');
 $datas =$db->query("SELECT * FROM articles");
 var_dump($datas);
 */


 /*
 $res =$pdo->query();
 $data = 
 var_dump($data[0]->titre);
 $count= $pdo->exec('INSERT INTO articles SET titre="Mon titre", date="'.date('Y-m-d H:i:s ') .'"');



 $db->insert('INSERT INTO articles SET titre="Mon titre", date="'.date('Y-m-d H:i:s ') .'"');
  * 
  * 
  * 
  * 
  * */
  
 
 ?>