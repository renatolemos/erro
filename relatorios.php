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
            <h1 class="page-header text-center">Relatorio Eleição</h1>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <table class="table table-bordered table-striped" style="margin-top:20px;">
                        <thead>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Data Início</th>
                        <th>Data Fim</th>
                        <th></th>
                        </thead>
                        <tbody>
                            <?php
                            include_once('connection.php');
                            $database = new Connection();
                            $db = $database->open();
                            $data = date('Y-m-d');
                            try {
                                $sql = 'SELECT * FROM eleicao';
                                foreach ($db->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php
                                            $dataInicio = $row['dt_inicio'];
                                            $novaDataInicio = explode("-", $dataInicio);
                                            echo $novaDataInicio[2] . "-" . $novaDataInicio[1] . "-" . $novaDataInicio[0];
                                            ?></td>
                                        <td><?php
                                            $dataFim = $row['dt_fim'];
                                            $novaDataFim = explode("-", $dataFim);
                                            echo $novaDataFim[2] . "-" . $novaDataFim[1] . "-" . $novaDataFim[0];
                                            ?></td>
                                        
                                        
                                        <td><?php if($row['dt_fim']<$data){?>
                                            <a href="total.php" class="btn btn-info btn-sm" ><span class="glyphicon glyphicon-th-list"></span> Resultado Final</a>
                                            
                                        <?php }else{?>
                                            
                                            <a href="total.php" class="btn btn-info btn-sm" ><span class="glyphicon glyphicon-th-list"></span> Resultado Parcial</a>
                                        <?php }?>
                                        </td>
                                        
                                        <?php include('editarEleicao.php'); ?>
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
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>