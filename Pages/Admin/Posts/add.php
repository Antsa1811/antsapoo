<?php

$postTable = App::getInstance()->getTable('Post');
if(!empty($_POST)){
$result = $postTable->creat(
    ['titre' => $_POST['titre'],
    'contenu' => $_POST['contenu'],
        'category_id' => $_POST['category_id']
    ] );
  

    if($result){
        header ('Location:admin.php?p=posts.edit&id=' . App::getInstance()->getDb()->lastInsertId());
    }
    }
    



$categories =App::getInstance()->getTable('Category')->extract('id','titre');
$form =new Core\HTML\BulmaForm($_POST);
 
?>

<form method="POST">

    <?= $form->input('titre', 'Titre articles'); ?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea' ]) ; ?>
    <?= $form->select('category_id', 'Categorie', $categories); ?>
    <br/>

    <button  class="button is-primary">Sauvegarder</button>    

</form>