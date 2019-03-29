<?php

$categories=App::getInstance()->getTable('Category')->all();

?>


<h1 class="title">Administrer les categories </h1>

<p>
    <a href="?p=categories.add" class="button is-success">Ajouter</a>
</p>

<table class="table">
    <thead>
        <tr>
            <td> ID</td>
            <td> Titre</td>
            <td> Actions</td>
    </thead>
    <tbody>
        <?php foreach($categories as $categorie): ?>
            <tr>
                <td><?= $categorie->id; ?> </td>
                <td><?= $categorie->titre; ?> </td>

               
                <td>
                 <form action="?p=categories.delete" method="POST" style="display : inline;">
                    <input type="hidden" name="id"value='<?= $categorie->id ?>'>
                    <button class="button is-danger" type="submit" href="?p=categories.delete&id=<?= $categorie->id; ?>">Supprimer</button>
                </form>
                 <a href="?p=categories.edit&id=<?= $categorie->id ?>" class="button is-primary">Editer</a>
                 </td>
            </tr>

        <?php endforeach; ?>

        

</table>