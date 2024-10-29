
<?php
    $title = 'Edit';

    ob_start()
 ?>   
    <div>
        <form action="index.php?action=update" method="post">
        <div class="form-group"><label for="">id</label><input type="text" class="form-control" name="id" value="<?= $stagier['id'] ?>"></div>
            <div class="form-group"><label for="">nom</label><input type="text" class="form-control" name="nom" value="<?= $stagier['nom'] ?>"></div>
            <div class="form-group"><label for="">prenom</label><input type="text" class="form-control" name="prenom" value="<?= $stagier['prenom'] ?>"></div>
            <div class="form-group"><label for="">age</label><input type="text" class="form-control" name="age"value="<?= $stagier['age'] ?>"></div>
            <div class="form-group"><label for="">login</label><input type="text" class="form-control" name="login"value="<?= $stagier['login'] ?>"></div>
            <div class="form-group"><label for="">......</label><input type="submit" class="btn btn-primary" name="ajouter" value="modifer"></div>

        </form>
    </div>
<?php $content = ob_get_clean(); 
include_once 'vue/layout.php';
?>
