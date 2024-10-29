<?php
 $title = 'afficher'; 
 
 

 function dbConnexion() {
    return new PDO('mysql:dbname=mvc;host=localhost','root','');
 }

 function findAll() {
    $pdo = dbConnexion();
    return $pdo->query('SELECT * FROM t_stag')->fetchAll(PDO::FETCH_ASSOC); 
 }

 function create() {
    // dont use extract use nom = $_POST['nom']
    extract($_POST);
    $pdo = dbConnexion();
    $sqlState = $pdo->prepare('INSERT INTO t_stag VALUES(NULL,?,?,?,?) ');
    return $sqlState->execute([$nom,$prenom,$age,$login]); 
 }
 
 function edit($nom,$prenom,$age,$login,$id) {
    extract($_POST);
    $pdo = dbConnexion();
    $sqlState = $pdo->prepare('UPDATE t_stag SET nom = ?,prenom = ?,age = ?,login = ? WHERE id=?');
    return $sqlState->execute([$nom,$prenom,$age,$login,$id]);
 }
 
 function destroy($id) {
    $pdo = dbConnexion();
    $sqlState = $pdo->prepare('DELETE FROM t_stag WHERE id=?' );
    return $sqlState->execute([$id]);
 }
 
 function findID($id) {
    $pdo = dbConnexion();
    $sqlState = $pdo->prepare('SELECT * FROM t_stag WHERE id=?');
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_ASSOC); 
 }

 ?>