<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gerenciador Previdenciário</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <?php include 'menu.php'; ?>
        <div class="container">

            <h1 class="page-header text-center">Cadastro Eleição</h1>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <a href="#addEleitor" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Adicionar</a>
                    <?php
                    session_start();
                    if (isset($_SESSION['message'])) {
                        ?>
                        <div class="alert alert-info text-center" style="margin-top:20px;">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                        <?php
                        unset($_SESSION['message']);
                    }
                    ?>
                    <table class="table table-bordered table-striped" style="margin-top:20px;">
                        <thead>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th></th>
                        </thead>
                        <tbody>
                            <?php
                            include_once('connection.php');
                            $database = new Connection();
                            $db = $database->open();
                            try {
                                $sql = 'SELECT * FROM eleitor';
                                foreach ($db->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php echo $row['cpf']; ?></td>
                                        <td>
                                            <?php if ($row['recibo'] == ''){?>
                                            <a href="#votoEleitor_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Votar</a>
                                            <?php }?>
                                        </td>
                                        <?php include('votoEleitor.php'); ?>
                                    </tr>
                                    <?php
                                }
                            } catch (PDOException $e) {
                                echo "Algo de errado com a conexão: " . $e->getMessage();
                            }
                            $database->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include('addEleitor.php'); ?>
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>