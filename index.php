
 <?php
 
 require_once 'controller\stagierController.php';

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            case 'afficher': indexAction ();
                break;
                case 'create': createAction ();
                break;
                case 'destroy': destroyAction();
                break;
                case 'edit': editAction ();
                break;
                case 'store': storeAction() ;
                break;
                case 'delete': deleteAction ();
                break;
                case 'update': updateAction ();
                break;
                
        }
    }

indexAction();
?>



