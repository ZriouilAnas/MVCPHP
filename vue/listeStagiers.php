
 <?php
    $title = 'stag';

    ob_start()
 ?>   
    <a href="index.php?action=create" class="btn btn-primary">Ajouter</a>
    <table class="table table-striped">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Age</th>
        <th>Login</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($stagiers as $stag) :?>
        <tr>
            <td><?= $stag['id'] ?></td>
            <td><?= $stag['nom'] ?></td>
            <td><?= $stag['prenom'] ?></td>
            <td><?= $stag['age'] ?></td>
            <td><?= $stag['login'] ?></td>
            <td><a class="btn btn-success btn-sm" href="index.php?action=edit&id=<?php echo $stag['id']?>">modifer</a></td>
            <td><a class="btn btn-danger btn-sm" href="index.php?action=delete&id=<?php echo $stag['id']?>">supprimer</a></td>
        </tr>
        <?php endforeach ?>
    </tbody>
        
    </table>
<?php $content = ob_get_clean(); 
include_once 'vue/layout.php';
?>
