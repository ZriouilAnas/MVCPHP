<?php 
$title = 'Supprimer Stagiers';
var_dump($id);
ob_start();
echo 'voulez vous supprimer ';
?>
<a href="./index.php?action=destroy&id=<?=$id?>">OK?</a>
<?php
$content = ob_get_clean();
require_once 'layout.php';

?>