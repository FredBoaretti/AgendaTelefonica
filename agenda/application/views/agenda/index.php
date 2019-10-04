<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title"><?php echo $titulo?></h4>
            <p class="card-category">Veja os dados dos seus Contatos</p>
        </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="text-primary">
                    <tr>
                        <td style="font-weight: bold" >Nome</td>
                        <td style="font-weight: bold">Apelido</td>
                        <td style="font-weight: bold">Telefone</td>
                        <td style="font-weight: bold" text-align='center'>Favoritos</td>
                        <td style="font-weight: bold">Opções</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($tabela as $linha)
                        {
                            if( ($linha->favorito==0)){
                                $favorito="<a href ='/agenda/index.php/agenda/favoritar/".$linha->id."' class='btn btn-primary btn-round'><i class='material-icons'>favorite</i></a>";
                            }
                            else{
                                $favorito="<a href ='/agenda/index.php/agenda/desfavoritar/".$linha->id."' class='btn btn-primary btn-round'><i class='material-icons'>grade</i></a>";
                            }
                            echo "<tr>".
                                    "<td>".$linha->nome."</td>".
                                    "<td>".$linha->apelido."</td>".
                                    "<td>".$linha->telefone."</td>".
                                    "<td>".$favorito."</td>".
                                    "<td><button type='button' class='btn btn-primary btn-round' data-toggle='modal' href='#modalExibir".$linha->id."'>Visualizar</button> <a href ='/agenda/index.php/agenda/alterar/".$linha->id."' class='btn btn-primary btn-round'>Alterar</a> <a href ='/agenda/index.php/agenda/deletar/".$linha->id."' class='btn btn-primary btn-round'>Excluir</a></td>".
                                "</tr>";
                            
                            echo "<div class='modal fade bd-example-modal-lg' id='modalExibir".$linha->id."' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel'    >".
                                "<div class='modal-dialog modal-lg' role='document'>".
                                    "<div class='modal-content'>".
                                        "<div class='modal-header'>".
                                            "<h5 class='modal-title' id='myLargeModalLabel'>Dados do Contato</h5>".
                                            "<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>".
                                            "<span aria-hidden='true'>&times;</span>".
                                            "</button>".
                                        "</div>".
                                        "<div class='modal-body'>".
                                            "<div class='row'>".
                                                "<div class='col-md-4'>".
                                                    "<div class='form-group bmd-form-group'>".
                                                        "<label class='bmd-label-static'>Nome</label>".
                                                        "<input type='text' readonly class='form-control-plaintext' name='nome'value='".$linha->nome."'/>".
                                                    "</div>".
                                                "</div>".
                                                "<div class='col-md-4'>".
                                                    "<div class='form-group bmd-form-group'>".
                                                        "<label class='bmd-label-static'>Apelido</label>".
                                                        "<input type='text' readonly class='form-control-plaintext' name='apelido'value='".$linha->apelido."'/>".
                                                    "</div>".
                                                "</div>".
                                            "</div>.".
                                            "<div class='row'>".
                                                "<div class='col-md-4'>".
                                                    "<div class='form-group bmd-form-group'>".
                                                        "<label class='bmd-label-static'>Telefone</label>".
                                                        "<input type='text' readonly class='form-control-plaintext' name='telefone' value='".$linha->telefone."'/>".
                                                    "</div>".
                                                "</div>".
                                                "<div class='col-md-4'>".
                                                    "<div class='form-group bmd-form-group'>".
                                                        "<label class='bmd-label-static'>Email</label>".
                                                        "<input type='text' readonly class='form-control-plaintext' name='email' value='$linha->email'/>".
                                                    "</div>".
                                                "</div>".
                                            "</div>".
                                            "<div class='row'>".
                                                "<div class='col-md-4'>".
                                                    "<div class='form-group bmd-form-group'>".
                                                        "<label class='bmd-label-static'>Cep</label>".
                                                        "<input type='text' readonly class='form-control-plaintext' name='cep'value='".$linha->cep."'/>".
                                                    "</div>".
                                                "</div>".
                                                "<div class='col-md-4'>".
                                                    "<div class='form-group bmd-form-group'>".
                                                        "<label class='bmd-label-static'>Rua</label>".
                                                        "<input type='text' readonly class='form-control-plaintext' name='rua'value='".$linha->rua."'/>".
                                                    "</div>".
                                                "</div>".
                                                "<div class='col-md-2'>".
                                                    "<div class='form-group bmd-form-group'>".
                                                        "<label class='bmd-label-static'>Complemento</label>".
                                                        "<input type='text' readonly class='form-control-plaintext' name='complemento'value='".$linha->complemento."'/>".
                                                    "</div>".
                                                "</div>".
                                            "</div>.".
                                            "<div class='row'>".
                                                "<div class='col-md-4'>".
                                                    "<div class='form-group bmd-form-group'>".
                                                        "<label class='bmd-label-static'>Bairro</label>".
                                                        "<input type='text' readonly class='form-control-plaintext' name='bairro' value='".$linha->bairro."'/>".
                                                    "</div>".
                                                "</div>".
                                                "<div class='col-md-6'>".
                                                    "<div class='form-group bmd-form-group'>".
                                                        "<label class='bmd-label-static'>Cidade</label>".
                                                        "<input type='text' readonly class='form-control-plaintext' name='cidade' value='$linha->cidade'/>".
                                                    "</div>".
                                                "</div>".
                                            "</div>".
                                        "</div>".
                                        "<div class='modal-footer'>".
                                            "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>".
                                        "</div>".
                                    "</div>".
                                "</div>".
                            "</div>";
                        }
                    
                    
                    ?>
                    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                    <!-- Include all compiled plugins (below), or include individual files as needed -->
                    <script src="<?php echo base_url(); ?>/public/assets/js/plugins/bootstrap.min.js"></script>
                </tbody>
            </table>
        </div>
    </div>
</div>    