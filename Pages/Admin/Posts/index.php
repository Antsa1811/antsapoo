<?php

$posts=App::getInstance()->getTable('Post')->all();

?>


<h1 class="title">Administrer les articles </h1>

<p>
    <a href="?p=posts.add" class="button is-success">Ajouter</a>
</p>

<table class="table">
    <thead>
        <tr>
            <td> ID</td>
            <td> Titre</td>
            <td> Actions</td>
    </thead>
    <tbody>
        <?php foreach($posts as $post): ?>
            <tr>
                <td><?= $post->id; ?> </td>
                <td><?= $post->titre; ?> </td>

               
                <td>
                <form action="?p=posts.delete" method="POST" style="display : inline;">
                    <input type="hidden" name="id"value='<?= $post->id ?>'>
                    <button class="button is-danger" type="submit" href="?p=posts.delete&id=<?= $post->id; ?>">Supprimer</button>
                </form>
                 <a href="?p=posts.edit&id=<?= $post->id ?>" class="button is-primary">Editer</a></td>
            </tr>

        <?php endforeach; ?>

        

</table>