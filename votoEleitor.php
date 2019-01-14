<div class="modal fade" id="votoEleitor_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Voto</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="editar.php?id=<?php echo $row['id']; ?>">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Nome:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" disabled="" value="<?php echo $row['nome']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">CPF</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cpf" disabled="" value="<?php echo $row['cpf']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Candidato:</label>
                            </div>
                            <div class="col-sm-10">
                                    <?php
                                    include_once('connection.php');
                                    $database = new Connection();
                                    $db = $database->open();
                                    $sql = 'SELECT * FROM candidato';
                                    foreach ($db->query($sql) as $row) {
                                        ?> 
                                <input type="radio"  value="<?php echo $row['nome'] ?>" name="candidato" >     <?php echo $row['nome']?> - <?php echo $row['cargos'] ?>  <br>                                   
                                <input type="hidden" id="cargos" name="cargos" value="<?php echo $row['cargos']?>">
    <?php } ?>
                              
                            </div>
                        </div>
                        
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="voto" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Confirmar voto</a></button>
                </form>
            </div>

        </div>
    </div>
</div>

