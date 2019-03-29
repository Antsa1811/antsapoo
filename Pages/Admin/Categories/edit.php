<?php

$categoryTable = App::getInstance()->getTable('Category');
if(!empty($_POST)){
$result = $categoryTable->update($_GET['id'],
    ['titre' => $_POST['titre']
    ]);

    if($result){
        ?>
        <div class="notification is-success">Update reussier avec sucess</div>
        <?php
    }
    }
    


$category= $categoryTable->find($_GET['id']);

$form =new Core\HTML\BulmaForm($category);
 
?>

<form method="POST">

    <?= $form->input('titre','Titre Categories'); ?>
    <br/>
    <button  class="button is-primary">Modifier</button>    

</form>