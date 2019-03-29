<?php

if(!empty($_POST)){
    $auth = new \Core\Auth\DbAuth(App::getInstance()->getDb());
    if($auth->login($_POST['username'],$_POST['password'])){
    header('Location:admin.php');
    }else{
        ?>

        <div class="notification is-danger">
            identifiant incorecte
        </div>
        
        <?php
        
    } 
}


$form =new Core\HTML\BulmaForm($_POST);
 
?>

<form method="POST">

    <?= $form->input('username', 'Pseudo'); ?>
    <?= $form->input('password', 'Mots de passe ', ['type' => 'password' ]) ; ?>
    <br/>

    <button class="button is-primary">Envoyer</button>    

</form>