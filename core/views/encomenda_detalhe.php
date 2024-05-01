<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <h1 class="text-center">Detalhe da encomenda</h1>

            <div class="row">
                <div class="col">
                    <div class="p-2 my-3">
                        <span><strong>Data da encomenda</strong></span><br>
                        <?= $dados_encomenda->data_encomenda ?>
                    </div>
                    <div class="p-2 my-3">
                        <span><strong>Morada</strong></span><br>
                        <?= $dados_encomenda->morada ?>
                    </div>
                    <div class="p-2 my-3">
                        <span><strong>Cidade</strong></span><br>
                        <?= $dados_encomenda->cidade ?>
                    </div>
                </div>
                <div class="col">
                    <div class="p-2 my-3">
                        <span><strong>Email</strong></span><br>
                        <?= $dados_encomenda->email ?>
                    </div>
                    <div class="p-2 my-3">
                        <span><strong>Telefone</strong></span><br>
                        <?= !empty($dados_encomenda->telefone) ? $dados_encomenda->telefone : '&nbsp;' ?>
                    </div>
                    <div class="p-2 my-3">
                        <span><strong>Código da encomenda</strong></span><br>
                        <?= $dados_encomenda->codigo_encomenda ?>
                    </div>
                </div>
                <div class="col align-self-center">
                    <div class="text-center mb-3">
                        Estado da encomenda
                    </div>
                    <div>
                        <h4 class="text-center"><?= $dados_encomenda->status ?></h4>
                    </div>
                </div>
            </div>

            <!-- dados da encomenda -->
            <div class="row mb-5">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th class="text-center">Quantidade</th>
                                <th class="text-end">Preço / Uni.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($produtos_encomenda as $produto): ?>
                                <tr>
                                    <td><?= $produto->designacao_produto ?></td>
                                    <td class="text-center"><?= $produto->quantidade ?></td>
                                    <td class="text-end"><?= number_format($produto->preco_unidade,2,',','.') . ' $' ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="3" class="text-end">Total: <strong><?= number_format($total_encomenda,2,',','.') . ' $'?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col text-center mb-5">
                    <a href="?a=historico_encomendas" class="btn btn-primary">Voltar</a>
                </div>
                <div class="mb-5">
                    &nbsp;
                </div>
            </div>



            
            
            






            <!-- lista de produtos da encomenda -->

        </div>
    </div>
</div>