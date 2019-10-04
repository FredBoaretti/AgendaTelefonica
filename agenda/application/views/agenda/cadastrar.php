<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary" data-color="purple">
            <h4 class="card-title"><?php echo $titulo?></h4>
            <p class="card-category">Preecha os dados dos seus contatos</p>
        </div>
    <div class="card-body">
        <?php echo form_open('agenda/salvar'); ?>
        <div class='row'>
            <div class='col-md-4'>
                <div class='form-group bmd-form-group'>
                    <label class="bmd-label-floating">Nome</label>
                    <input type="text" class="form-control" name="nome"/>
                </div>
            </div>
            <div class='col-md-4'>
                <div class='form-group bmd-form-group'>
                    <label class="bmd-label-floating">Apelido</label>
                    <input type="text" class="form-control" name="apelido"/>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-4'>
                <div class='form-group bmd-form-group'>
                    <label class="bmd-label-floating">Telefone</label>
                    <input type="text" class="form-control" name="telefone"/>
                </div>
            </div>
            <div class='col-md-4'>
                <div class='form-group bmd-form-group'>
                    <label class="bmd-label-floating">Email</label>
                    <input type="text" class="form-control" name="email"/>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-4'>
                <div class='form-group bmd-form-group'>
                    <label class="bmd-label-floating">Cep</label>
                    <input type="text" class="form-control" name="cep"/>
                </div>
            </div>
            <div class='col-md-4'>
                <div class='form-group bmd-form-group'>
                    <label class="bmd-label-floating">Rua</label>
                    <input type="text" class="form-control" name="rua"/>
                </div>
            </div>
            <div class='col-md-2'>
                <div class='form-group bmd-form-group'>
                    <label class="bmd-label-floating">Complemento</label>
                    <input type="text" class="form-control" name="complemento"/>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-4'>
                <div class='form-group bmd-form-group'>
                    <label class="bmd-label-floating">Bairro</label>
                    <input type="text" class="form-control" name="bairro"/>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group bmd-form-group'>
                    <label class="bmd-label-floating">Cidade</label>
                    <input type="text" class="form-control" name="cidade"/>
                </div>
            </div>
        </div>
            <input type="submit" class="btn btn-primary pull-right" value='Salvar'>
    </div>
</div>


