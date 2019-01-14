<?php

session_start();
include_once('connection.php');
$database = new Connection();
$db = $database->open();
if (isset($_GET['idEleicao'])) {

    try {
        $sql = "DELETE FROM eleicao WHERE id = '" . $_GET['idEleicao'] . "'";
       
        $_SESSION['message'] = ( $db->exec($sql) ) ? 'Excluído com sucesso' : 'Algo deu errado, não é possível adicionar';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }

    
    header('location: eleicao.php');
    $database->close();
} else {
    $_SESSION['message'] = 'Não pode ser excluído';
}

if (isset($_GET['idCargo'])) {

    try {
        $sql = "DELETE FROM cargo WHERE id = '" . $_GET['idCargo'] . "'";
     
        $_SESSION['message'] = ( $db->exec($sql) ) ? 'Excluído com sucesso' : 'Algo deu errado, não é possível adicionar';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }

   
    header('location: cargo.php');
    $database->close();
} else {
    $_SESSION['message'] = 'Não pode ser excluído';
}


?>