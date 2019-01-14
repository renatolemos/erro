<div class="modal fade" id="addCandidato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Cadastro Candidato</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" enctype="multipart/form-data"  action="adicionar.php">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Nome:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" required="required">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Imagem:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="arquivo"  id="arquivo" required="required">

                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Candidato:</label>
                            </div>
                            <div class="col-sm-10">
                                <select class="form-control" name="cargos" id="cargos" class="form-control">
                                   
                                    <?php
                                    include_once('connection.php');
                                    $database = new Connection();
                                    $db = $database->open();
                                    $sql = 'SELECT nome FROM cargo';
                                    foreach ($db->query($sql) as $row) {
                                        ?> 
                                        <option value="<?php echo utf8_encode($row["nome"]) ?>"> <?php echo utf8_encode($row['nome']) ?></option>                                                  
<?php } ?>
                                </select>
                            </div>
                        </div>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove" /></span> Cancelar</button>
                <button type="submit" name="candidato" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" /></span> Salvar</button>
         
            </div>

        </div>
    </div>
</div>