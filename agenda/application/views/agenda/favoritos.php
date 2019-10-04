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
                        <td style="font-weight: bold">Nome</td>
                        <td style="font-weight: bold">Apelido</td>
                        <td style="font-weight: bold">Telefone</td>
                        <!-- <td style="font-weight: bold">Email</td>
                        <td style="font-weight: bold">Grupo</td>
                        <td style="font-weight: bold">CEP</td>
                        <td style="font-weight: bold">Rua</td>
                        <td style="font-weight: bold">Complemento</td>
                        <td style="font-weight: bold">Bairro</td>
                        <td style="font-weight: bold">Cidade</td> -->
                        <!-- <td style="font-weight: bold">Opções</td> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($tabela as $linha)
                        {
                            echo "<tr>".
                                    "<td>".$linha->nome."</td>".
                                    "<td>".$linha->apelido."</td>".
                                    "<td>".$linha->telefone."</td>".
                                    //"<td>".$linha->email."</td>".
                                    // "<td>".$linha->grupo."</td>".
                                    // "<td>".$linha->cep."</td>".
                                    // "<td>".$linha->rua."</td>".
                                    // "<td>".$linha->complementoend."</td>".
                                    // "<td>".$linha->bairro."</td>".
                                    // "<td>".$linha->cidade."</td>".
                                    // "<td><a href ='/agenda/index.php/agenda/alterar/".$linha->id."' class='btn btn-primary btn-round'>Alterar</a> <a href ='/agenda/index.php/agenda/deletar/".$linha->id."' class='btn btn-primary btn-round'>Excluir</a></td>".
                                "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>    