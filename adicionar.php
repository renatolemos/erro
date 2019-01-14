<?php

session_start();
include_once('connection.php');
$database = new Connection();
$db = $database->open();
if (isset($_POST['eleicao'])) {

    try {

        $stmt = $db->prepare("INSERT INTO eleicao  (nome, dt_inicio, dt_fim) VALUES (:nome, :dt_inicio, :dt_fim)");

        $_SESSION['message'] = ( $stmt->execute(array(':nome' => $_POST['nome'], ':dt_inicio' => $_POST['dt_inicio'], ':dt_fim' => $_POST['dt_fim'])) ) ? 'Adicionado com sucesso' : 'Algo deu errado, não é possível adicionar';
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

        $stmt = $db->prepare("INSERT INTO cargo  (nome) VALUES (:nome)");

        $_SESSION['message'] = ( $stmt->execute(array(':nome' => $_POST['nome'])) ) ? 'Adicionado com sucesso' : 'Algo deu errado, não é possível adicionar';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }


    $database->close();
    header('location: cargo.php');
} else {
    $_SESSION['message'] = 'Preencha primeiro o formulário';
}

if (isset($_POST['candidato'])) {

    if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {

        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        $nome = $_FILES['arquivo']['name'];
        $extensao = strrchr($nome, '.');
        $extensao = strtolower($extensao);

        if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
            $novoNome = md5(microtime()) . '.' . $extensao;
            $destino = 'img/' . $novoNome;

            if (@move_uploaded_file($arquivo_tmp, $destino)) {
                
            }
        }
    }

    try {

        $stmt = $db->prepare("INSERT INTO candidato  (nome, img, cargos) VALUES (:nome, :img, :cargos)");
        $_SESSION['message'] = ( $stmt->execute(array(':nome' => $_POST['nome'], ':img' => $novoNome, ':cargos' => $_POST['cargos'])) ) ? 'Adicionado com sucesso' : 'Algo deu errado, não é possível adicionar';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }

    $database->close();
    header('location: candidato.php');
} else {
    $_SESSION['message'] = 'Preencha primeiro o formulário';
}


if (isset($_POST['eleitor'])) {

    try {

        $stmt = $db->prepare("INSERT INTO eleitor  (nome, cpf) VALUES (:nome, :cpf)");

        $_SESSION['message'] = ( $stmt->execute(array(':nome' => $_POST['nome'], ':cpf' => $_POST['cpf'])) ) ? 'Adicionado com sucesso' : 'Algo deu errado, não é possível adicionar';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }

    $database->close();
    header('location: eleitor.php');
} else {
    $_SESSION['message'] = 'Preencha primeiro o formulário';
}

if (isset($_POST['voto'])) {

    try {

        $stmt = $db->prepare("INSERT INTO eleitor  (nome, cpf) VALUES (:nome, :cpf)");
        $_SESSION['message'] = ( $stmt->execute(array(':nome' => $_POST['nome'], ':cpf' => $_POST['cpf'])) ) ? 'Adicionado com sucesso' : 'Algo deu errado, não é possível adicionar';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }


    $database->close();
    header('location: eleitor.php');
} else {
    $_SESSION['message'] = 'Preencha primeiro o formulário';
}
?>