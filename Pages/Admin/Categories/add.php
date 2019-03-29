<?php

$categoryTable = App::getInstance()->getTable('Category');
if(!empty($_POST)){
$result = $categoryTable->creat(
    ['titre' => $_POST['titre']
    ]);
  

    if($result){
        header ('Location:admin.php?p=categories.edit&id=' . App::getInstance()->getDb()->lastInsertId());
    }
    }
    



//$categories =App::getInstance()->getTable('Category')->extract('id','titre');
$form =new Core\HTML\BulmaForm($_POST);
 
?>

<form method="POST">

    <?= $form->input('titre', 'Titre articles'); ?>
    <br/>

    <button  class="button is-primary">Ajouter</button>    

</form>