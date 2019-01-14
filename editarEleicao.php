<!-- Editar -->
<div class="modal fade" id="editarEleicao_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Eleição</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="editar.php?id=<?php echo $row['id']; ?>">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Nome:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" value="<?php echo $row['nome']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Data Inicial:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="dt_inicio" value="<?php 
                                            $dataInicio = $row['dt_inicio'];
                                            $novaDataInicio = explode("-", $dataInicio);
                                            echo $novaDataInicio[2] . "-" . $novaDataInicio[1] . "-" . $novaDataInicio[0];
                                            ?>
                                           ">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Data Final:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="dt_fim" value="<?php 
                                       
                                            $dataFim = $row['dt_fim'];
                                            $novaDataFim = explode("-", $dataFim);
                                            echo $novaDataFim[2] . "-" . $novaDataFim[1] . "-" . $novaDataFim[0]; ?>">
                            </div>
                        </div>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="eleicao" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Atualizar</a>
                    </form>
            </div>

        </div>
    </div>
</div>

<!-- excluir -->
<div class="modal fade" id="deleteEleicao_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Excluir Eleição</h4></center>
            </div>
            <div class="modal-body">	
                <p class="text-center">Tem certesa que seseja excuir?<p>
                <h2 class="text-center"><?php echo $row['nome']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Não</button>
                <a href="delete.php?idEleicao=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Sim</a>
            </div>

        </div>
    </div>
</div>