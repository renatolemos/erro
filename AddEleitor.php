<div class="modal fade" id="addEleitor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Cadastro Eleitor</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="adicionar.php">
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
                                <label class="control-label" style="position:relative; top:7px;">CPF:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cpf" maxlength="14" onkeydown="javascript: fMasc( this, mCPF );" required="required">
                            </div>
                        </div>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="eleitor" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</a></button>
                </form>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    function fMasc(objeto, mascara) {
        obj = objeto
        masc = mascara
        setTimeout("fMascEx()", 1)
    }
    function fMascEx() {
        obj.value = masc(obj.value)
    }
    function mCPF(cpf) {
        cpf = cpf.replace(/\D/g, "")
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
        cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
        return cpf
    }

</script>
