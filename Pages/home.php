<h1 class="title"> Je suis la home pages </h1>

<ul>

<?php foreach ($db->query('SELECT * FROM articles','App\Table\Article') as $post ): ?>

      
    <h2> <a href="<?php echo $post->url  ?>"><?= $post->titre; ?></a> </h2>
   
    <p><?php echo $post->extrait ; ?></p>

     

 

<?php endforeach; ?>
</ul>



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
  * */
  
 
 ?>