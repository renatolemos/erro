<!-- Editar -->
<div class="modal fade" id="viewCandidato_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Visualizar Candidato</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="">
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="control-label" style="position:relative; top:7px;">Nome Candidato:</label>
                            </div>
                            <div class="col-sm-8">
                                <p><?php echo $row['nome']; ?></p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="control-label" style="position:relative; top:7px;">Imagem:</label>
                            </div>
                            <div class="col-sm-8">
                                <img src="img/<?php echo $row['img']; ?>"  style="width: 300px;"/>
                               
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="control-label" style="position:relative; top:7px;">Cargos:</label>
                            </div>
                            <div class="col-sm-8">
                                <p><?php echo $row['cargos']; ?></p>
                            </div>
                        </div>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fechar</button>
                    </form>
            </div>

        </div>
    </div>
</div>
