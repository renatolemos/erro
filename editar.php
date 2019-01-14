<?php

session_start();
include_once('connection.php');
$database = new Connection();
$db = $database->open();
if (isset($_POST['eleicao'])) {

    try {
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $dt_inicial = $_POST['dt_inicio'];
        $dt_final = $_POST['dt_fim'];

        $sql = "UPDATE eleicao SET nome = '$nome', dt_inicio = '$dt_inicial', dt_fim = '$dt_final' WHERE id = '$id'";
        $_SESSION['message'] = ( $db->exec($sql) ) ? 'Atualizado com sucesso' : 'Algo deu errado, não é possível adicionar';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }

    $database->close();
    header('location: eleicao.php');
} else {
    $_SESSION['message'] = 'Preencha primeiro o formulário';
}

if (isset($_POST['cargo'])) {

    try {
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $candidato = $_POST['candidato'];

        $sql = "UPDATE cargo SET nome = '$nome', candidato = '$candidato' WHERE id = '$id'";
       
        $_SESSION['message'] = ( $db->exec($sql) ) ? 'Atualizado com sucesso' : 'Algo deu errado, não é possível adicionar';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }

    //close connection
    $database->close();
    header('location: cargo.php');
} else {
    $_SESSION['message'] = 'Preencha primeiro o formulário';
}

if (isset($_POST['voto'])) {

    try {
        $id = $_GET['id'];
        $candidato = $_POST['candidato'];
        $cargo = $_POST['cargos'];
        $recibo = md5(microtime());

        $sql = "UPDATE eleitor SET candidato = '$candidato', cargo = '$cargo', recibo = '$recibo' WHERE id = '$id'";
  
        $_SESSION['message'] = ( $db->exec($sql) ) ? 'Voto com sucesso - Comprovante - '. $recibo.'' : 'Algo deu errado, não é possível adicionar';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }

    
    $database->close();
    header('location: eleitor.php');
} else {
    $_SESSION['message'] = 'Preencha primeiro o formulário';
}


?>