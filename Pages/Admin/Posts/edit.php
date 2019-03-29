<?php

$postTable = App::getInstance()->getTable('Post');
if(!empty($_POST)){
$result = $postTable->update($_GET['id'],
    ['titre' => $_POST['titre'],
    'contenu' => $_POST['contenu'],
        'category_id' => $_POST['category_id']
    ] );

    if($result){
        ?>
        <div class="notification is-success">Update reussier avec sucess</div>
        <?php
    }
    }
    


$post = $postTable->find($_GET['id']);

$categories =App::getInstance()->getTable('Category')->extract('id','titre');
$form =new Core\HTML\BulmaForm($post);
 
?>

<form method="POST">

    <?= $form->input('titre', 'Titre articles'); ?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea' ]) ; ?>
    <?= $form->select('category_id', 'Categorie', $categories); ?>
    <br/>

    <button  class="button is-primary">Sauvegarder</button>    

</form>