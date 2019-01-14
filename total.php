
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gerenciador Previdenciário</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <?php include 'menu.php'; ?>

        <div class="container" id="print">

            <h1 class="page-header text-center">Cadastro Cargo</h1>
            <div class="row" id="btn-save">
                <div class="col-sm-8 col-sm-offset-2">
                    <button id="imprimir" class="btn btn-warning"><span class="glyphicon glyphicon-print"></span> Imprimir</button>
                    <button id="salvar" class="btn btn-info"><span class="glyphicon glyphicon-save"></span> Salvar Arquivo</button>
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
                        <th>Voto</th>
                        <th>Candidato</th>
                        <th>Cargo</th>
                        </thead>
                        <tbody>
                            <?php
                            include_once('connection.php');
                            $database = new Connection();
                            $db = $database->open();
                            try {
                                $sql = 'SELECT COUNT(candidato) AS voto,candidato, cargo FROM eleitor GROUP BY candidato';
                                foreach ($db->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['voto']; ?></td>
                                        <td><?php echo $row['candidato']; ?></td>
                                        <td><?php echo $row['cargo']; ?></td>
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

        <script type="text/javascript">
            document.getElementById('imprimir').onclick = function () {
                var conteudo = document.getElementById('print').innerHTML,
                        tela_impressao = window.open('about:blank');

                tela_impressao.document.write(conteudo);
                tela_impressao.window.print();
                tela_impressao.window.close();
            };
        </script>
        
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>