<?php 
require_once './model/stagier.php';
function indexAction () {
    $stagiers = findAll();
    require_once './vue/listeStagiers.php';
}
function createAction() {
    require_once './vue/createVue.php';
}

function editAction() {
    $id = $_GET['id'];
    $stagier = findID($id);
    require_once './vue/editVue.php';
}

function deleteAction() {
    $id = $_GET['id'];
    require_once './vue/deleteVue.php';

}

function destroyAction() {
    
    destroy($_GET['id']);
    header('location:index.php');
}

function storeAction()  {
    $isCreated = create();
    
    header('location:index.php');
}
function updateAction() {
    extract($_POST);
edit($nom,$prenom,$age,$login,$id);
header('location: ./index.php ');
}

?>