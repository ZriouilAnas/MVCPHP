
<?php
    $title = 'Create';

    ob_start()
 ?>   
    <div>
        <form action="index.php?action=store" method="post">
            <div class="form-group"><label for="">nom</label><input type="text" class="form-control" name="nom"></div>
            <div class="form-group"><label for="">prenom</label><input type="text" class="form-control" name="prenom"></div>
            <div class="form-group"><label for="">age</label><input type="text" class="form-control" name="age"></div>
            <div class="form-group"><label for="">login</label><input type="text" class="form-control" name="login"></div>
            <div class="form-group"><label for="">......</label><input type="submit" class="btn" name="ajouter" value="ajouter"></div>

        </form>
    </div>
<?php $content = ob_get_clean(); 
include_once 'vue/layout.php';
?>
