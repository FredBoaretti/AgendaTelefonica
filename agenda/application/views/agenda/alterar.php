<div class="col-md-12">
    <div class="card">   
        <div class="card-header card-header-primary" data-color="purple">
            <h4 class="card-title"><?php echo $titulo?></h4>
            <p class="card-category">Altere os seus dados aqui</p>
        </div>
    <div class="card-body">
            <?php echo form_open('agenda/salvaralteracao'); ?>
            <input type="hidden" name='id' value="<?php echo $tabela[0]->id?>">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Nome</label>
                        <input type="text" class="form-control" name='nome'value="<?php echo $tabela[0]->nome?>"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Apelido</label>
                        <input type="text" class="form-control" name='apelido'value="<?php echo $tabela[0]->apelido?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Telefone</label>
                        <input type="text" class="form-control" name='telefone' value="<?php echo $tabela[0]->telefone?>"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input type="text" class="form-control" name='email' value="<?php echo $tabela[0]->email?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Cep</label>
                        <input type="text" class="form-control" name='cep' value="<?php echo $tabela[0]->cep?>"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Rua</label>
                        <input type="text" class="form-control" name='rua' value="<?php echo $tabela[0]->rua?>"/>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Complemento</label>
                        <input type="text" class="form-control" name='complemento' value="<?php echo $tabela[0]->complemento?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Bairro</label>
                        <input type="text" class="form-control" name='bairro' value="<?php echo $tabela[0]->bairro?>"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Cidade</label>
                        <input type="text" class="form-control" name='cidade' value="<?php echo $tabela[0]->cidade?>"/>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary pull-right" value='Alterar'>
    </div>
</div>


