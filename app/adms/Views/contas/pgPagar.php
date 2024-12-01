<?php
if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
if (isset($this->dados['form'])) {
    $valorForm = $this->dados['form'];
    //var_dump($valorForm);
}
if (isset($_SESSION['idlogado'])) {
    //echo "<br>id Logado " . $_SESSION['idlogado'];
    //var_dump($_SESSION);
    //var_dump($this->dadosAlter);
    //echo "<br><br>";
    //var_dump($this->dadosPaginacao);
}
?>
<!-- Begin Page Content -->


<!-- Logout Modal-->
<div class="modal fade" id="novocontas_apagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar Conta à Pagar</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="descricao">descricao</label>
                            <input type="text" class="form-control" id="tel1" placeholder="Digete o descricao"  name="descricao" value="<?php
                            if (isset($valorForm['descricao'])) {
                                echo $valorForm['descricao'];
                            }
                            ?>" required>
                            <div class="invalid-feedback">
                                Insira O descricao.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="valor">Valor Compra</label>
                            <input type="text" class="form-control" id="tel1" placeholder="Valor da Compra"  name="valor" value="<?php
                            if (isset($valorForm['valor'])) {
                                echo $valorForm['valor'];
                            }
                            ?>" required>
                            <div class="invalid-feedback">
                                Campo Obrigatório.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="data_venci">Data Vencimento <span class="text-muted"></span></label>
                            <input type="date" class="form-control" id="data_venci" placeholder="Número data_venci" name="data_venci" value="<?php
                            if (isset($valorForm['data_venci'])) {
                                echo $valorForm['data_venci'];
                            }
                            ?>" required>
                            <div class="invalid-feedback">
                                Campo Obrigatório.
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <img src="<?php echo URLADM . "/app/adms/assets/foto/" . $valorForm['foto']; ?>" style="width: 150px;height: 150px;" class="img-fluid rounded mx-auto d-block img-thumbnail prev-img" id="preview-img" alt="">                            <br>

                            <div class="">
                                <input type="file" class="form-control-file pb-4" value="escoha A foto" name="foto"  onchange="previewImagem();" required>

                                <div class="invalid-feedback">Escolha Uma foto de Perfil Nova</div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary text-white" name="btnCdsContas_apagar">Salvar</button>
                </div>
            </form> 
        </div>
    </div>
</div>
<div class="container-fluid">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <!-- Page Heading -->
    <div class="row mt-4 mb-4">
        <a type="button" class="btn-primary btn-sm ml-3 d-none d-md-block text-white" href="" data-toggle="modal" data-target="#novocontas_apagar">Nova Contas à Pagar</a>
        <!--<a type="button" class="btn-primary btn-sm ml-3 d-block d-lg-none"> + </a>-->
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contas à Pagar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Funcionário</th>
                            <th>Data Vencimento</th>
                            <th>Arquivo</th>
                            <th>Acção</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Funcionário</th>
                            <th>Data Vencimento</th>
                            <th>Arquivo</th>
                            <th>Acção</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if (isset($this->dados)) {
                            for ($index = 0; $index < count($this->dados); $index++) {
                                $valorForm = $this->dados[$index];
                                ?>
                                <tr>
                                    <td><?php
                                        if ($valorForm['pago'] === "sim") {
                                            echo '<i class="fa fa-square text-success px-1"></i>';
                                        } else {
                                            echo '<i class="fa fa-square text-danger px-1"></i>';
                                        }
                                        ?> <?php
                                        if ($valorForm['descricao'] === "Compra de Produto") {
                                            echo '<a data-toggle="modal" data-target="#produto' . $valorForm['idcontas_apagar'] . '" href="" style="color: #858796;">' . $valorForm['descricao'] . '</a>';
                                        } else {
                                            echo $valorForm['descricao'];
                                        }
                                        ?></td>
                                    <td><?php
                                        $valorForm['valor_novo'] = number_format($valorForm['valor'], 2, ',', '.');
                                        echo $valorForm['valor_novo'];
                                        ?> KZ
                                    </td>
                                    <td><?php
                                        $newConn = mysqli_connect("localhost", "root", "", "mecanica");
                                        $query = "SELECT * FROM usuario WHERE nif='{$valorForm['funcionario']}' LIMIT 1";
                                        $result = mysqli_query($newConn, $query);
                                        $mecanico = mysqli_fetch_assoc($result);
                                        //var_dump($mecanico);
                                        @$mecanico = @$mecanico['nome'] . " " . @$mecanico['sobrenome'];
                                        ?>
                                        <?php echo @$mecanico; ?></td>
                                    <td><?php echo $valorForm['data_venci']; ?></td>
                                    <td> 
                                        <?php if ($valorForm['foto']) { ?>
                                            <a href="<?php echo URLADM . "app/adms/assets/foto/" . $valorForm['foto']; ?>" target="_blank">
                                                ver arquivo
                                            </a>
                                        <?php }
                                        ?>

                                    </td>
                                    <td>
                                        <?php if ($valorForm['descricao'] != "Compra de Produto") { ?>
                                            <?php if ($valorForm['descricao'] != "Comissão") { ?>
                                                <a href="<?php echo $valorForm['idcontas_apagar']; ?>" data-toggle="modal" data-target="#edit<?php echo $valorForm['idcontas_apagar']; ?>" title="Editar Registo"><i class="ico icofont-edit px-1"></i></a>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <a href="<?php echo $valorForm['idcontas_apagar']; ?>" data-toggle="modal" data-target="#delete<?php echo $valorForm['idcontas_apagar']; ?>" title="Apagar Registo"><i class="ico icofont-trash text-danger px-1"></i></a>
                                        <?php if ($valorForm['pago'] === "nao") { ?>
                                            <a href="<?php echo $valorForm['idcontas_apagar']; ?>" data-toggle="modal" data-target="#info<?php echo $valorForm['idcontas_apagar']; ?>" title="Aprovar Conta"><i class="ico icofont-ui-clip-board text-success px-1"></i></a>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                                <!--  Modal Deletar-->
                            <div class="modal fade" id="delete<?php echo $valorForm['idcontas_apagar']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger text-white">
                                            <h5 class="modal-title" id="exampleModalLabel">Tens A Certeza Que Queres Apagar?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Clica "Sim" Para Apagar Essa Conta à Pagar <?php echo $valorForm['descricao']; ?>.</div>
                                        <div class="modal-footer bg-danger text-white">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <form action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                                                <input type="hidden" name="idcontas_apagar" value="<?php echo $valorForm['idcontas_apagar']; ?>">
                                                <input type="hidden" name="descricao" value="<?php echo $valorForm['descricao']; ?>">
                                                <input type="hidden" name="pago" value="<?php echo $valorForm['pago']; ?>">
                                                <button class="btn btn-primary" name="btnDeletcontas_apagar">Sim Excluir</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Modal Editar-->
                            <div class="modal fade" id="edit<?php echo $valorForm['idcontas_apagar']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <form action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tens A Certeza Que Queres Editar?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="descricao">descricao</label>
                                                        <input type="text" class="form-control" id="tel1" placeholder="Digete o descricao"  name="descricao" value="<?php
                                                        if (isset($valorForm['descricao'])) {
                                                            echo $valorForm['descricao'];
                                                        }
                                                        ?>" required>
                                                        <div class="invalid-feedback">
                                                            Insira O descricao.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="valor">Valor Compra</label>
                                                        <input type="text" class="form-control" id="tel1" placeholder="Valor da Compra"  name="valor" value="<?php
                                                        if (isset($valorForm['valor'])) {
                                                            echo $valorForm['valor'];
                                                        }
                                                        ?>" required>
                                                        <div class="invalid-feedback">
                                                            Campo Obrigatório.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="data_venci">Data Vencimento <span class="text-muted"></span></label>
                                                        <input type="date" class="form-control" id="data_venci" placeholder="Número data_venci" name="data_venci" value="<?php
                                                        if (isset($valorForm['data_venci'])) {
                                                            echo $valorForm['data_venci'];
                                                        }
                                                        ?>" required>
                                                        <div class="invalid-feedback">
                                                            Campo Obrigatório.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 mb-3">
                                                        <img src="<?php echo URLADM . "/app/adms/assets/foto/" . $valorForm['foto']; ?>" style="width: 150px;height: 150px;" class="img-fluid rounded mx-auto d-block img-thumbnail prev-img" id="preview-img" alt="">
                                                        <br>

                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input pb-4" id="foto" name="foto"  onchange="previewImagem();" required disabled>
                                                            <label class="custom-file-label" for="foto" data-browse="Procurar foto">Escolha a Foto</label>
                                                            <div class="invalid-feedback">Escolha Uma foto de Perfil Nova</div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                <input type="hidden" name="idcontas_apagar" value="<?php echo $valorForm['idcontas_apagar']; ?>">
                                                <input type="hidden" name="data_venci_antigo" value="<?php echo $valorForm['data_venci']; ?>">
                                                <button class="btn btn-primary" name="btnEditcontas_apagar">Sim</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!--  Modal Aprvar do contas_apagar-->
                            <div class="modal fade" id="info<?php echo $valorForm['idcontas_apagar']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info text-white">
                                            <h5 class="modal-title" id="exampleModalLabel">Aprovar Pagamento</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <p> Desejas Realmente Aprovar Esse Pagamento?</p>
                                        </div>
                                        <div class="modal-footer bg-info text-black">
                                            <form action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                <input type="hidden" name="idcontas_apagar" value="<?php echo $valorForm['idcontas_apagar']; ?>">
                                                <input type="hidden" name="descricao" value="<?php echo $valorForm['descricao']; ?>">
                                                <input type="hidden" name="valor" value="<?php echo $valorForm['valor']; ?>">
                                                <button class="btn btn-success" name="btnAprovarConta">Sim Aprovar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Modal Dados Do usuario-->
                            <!--<div class="modal fade" id="usuario<?php echo $valorForm['idcontas_apagar']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Dados do usuario</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <p><strong>descricao: </strong><?php echo $valorForm['descricao']; ?></p>                                                
                                                <p><strong>Nif: </strong><?php echo $valorForm['nif']; ?></p>
                                                <p><strong>Tipo Pessoa: </strong><?php echo $valorForm['tipo_pessoa']; ?></p>
                                                <p><strong>Telefone: </strong><?php echo $valorForm['telefone']; ?></p>
                                                <p><strong>Email: </strong><?php echo $valorForm['email']; ?></p>
                                                <p><strong>Andereço: </strong><?php echo $valorForm['morada']; ?></p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!--  Modal Fazer Pedido Do usuario-->
                            <div class="modal fade" id="mais<?php echo $valorForm['idcontas_apagar']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Dados do usuario</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12 mb-3">
                                                    <label for="usuario">Funcionário</label>
                                                    <select class="custom-select" id="usuario" name="usuario" required>
                                                        <option selected value="<?php echo $valorForm['idusuario']; ?>"><?php echo $valorForm['usuario']; ?></option>
                                                        <?php
                                                        if (isset($this->dadosAlter)) {
                                                            foreach ($this->dadosAlter as $valor) {
                                                                ?>
                                                                <option value="<?php echo $valor['idusuario']; ?>"><?php echo $valor['nome'] . " " . $valor['sobrenome']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>

                                                    </select>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="valor">Valor Compra</label>
                                                    <input type="text" class="form-control" id="tel1" placeholder="Valor da Compra"  name="valor" value="<?php
                                                    if (isset($valorForm['valor'])) {
                                                        //$valorForm['valor'] = number_format($valorForm['valor'], 2, '.');
                                                        echo $valorForm['valor'];
                                                    }
                                                    ?>" required>
                                                    <div class="invalid-feedback">
                                                        Campo Obrigatório.
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="valor_venda">Valor Venda</label>
                                                    <input type="text" class="form-control" id="tel1" placeholder="Valor da Venda"  name="valor_venda" value="<?php
                                                    if (isset($valorForm['valor_venda'])) {
                                                        //$valorForm['valor_venda'] = number_format($valorForm['valor_venda'], 2, '.','.');
                                                        echo $valorForm['valor_venda'];
                                                    }
                                                    ?>" required>
                                                    <div class="invalid-feedback">
                                                        Campo Obrigatório.
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="data_venci">Data Vencimento <span class="text-muted"></span></label>
                                                    <input type="number" class="form-control" id="data_venci" placeholder="Adicio Mais no data_venci" name="data_venci" value="" required>
                                                    <div class="invalid-feedback">
                                                        Campo Obrigatório.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                <input type="hidden" name="idcontas_apagar" value="<?php echo $valorForm['idcontas_apagar']; ?>">
                                                <input type="hidden" name="data_venci_antigo" value="<?php echo $valorForm['data_venci']; ?>">
                                                <input type="hidden" name="descricao" value="<?php echo $valorForm['descricao']; ?>">
                                                <button class="btn btn-primary" name="btnadddata_venci">Sim</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!--  Modal Dados Da Coompra-->
                            <div class="modal fade" id="produto<?php echo $valorForm['idcontas_apagar']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title" id="exampleModalLabel">Dados da Compra</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="list-unstyled">
                                                <li class="media my-4">
                                                    <?php
                                                    $newConn = mysqli_connect("localhost", "root", "", "mecanica");
                                                    $query = "SELECT * FROM compras_contaspagar_dadosproduto WHERE idcontas_apagar='{$valorForm['idcontas_apagar']}' LIMIT 1";
                                                    $result = mysqli_query($newConn, $query);
                                                    $teste = mysqli_fetch_assoc($result);
                                                    //var_dump($mecanico);
                                                    if (isset($teste) AND ! empty($teste)) {
                                                        ?>
                                                        <img src="<?php echo URLADM . "app/adms/assets/foto/" . $teste['foto']; ?>" class="mr-3" alt="Imagem do Produto" width="200" height="200">
                                                        <div class="media-body">
                                                            <strong>Nome do Produto: </strong> <?php echo $teste['produto']; ?><br>
                                                            <span class="pr-3"><strong>Categoria: </strong> <?php echo $teste['categoria']; ?></span><br>
                                                            <strong>Referência: </strong> <?php echo $teste['referencia']; ?><br>
                                                            <span class="pr-3"><strong>Quantidade: </strong> <?php echo $teste['quantidade_estoque']; ?></span><br>
                                                            <strong>Valor de Cada Produto: </strong><?php
                                                            $valorForm['valor_novo'] = number_format($teste['valor_compras'], 2, ',', '.');
                                                            echo $valorForm['valor_novo'] . " Kz";
                                                            ?><br>
                                                            <strong>Total à Pagar: </strong><?php
                                                            $valorForm['valor_novo'] = number_format($teste['total_apagar'], 2, ',', '.');
                                                            echo $valorForm['valor_novo'] . " Kz";
                                                            ?><br>
                                                            <span class="pr-3"><strong>Fornecedor: </strong><?php echo $teste['fornecedor']; ?></span><br>
                                                            <strong>Funcionário: </strong><?php echo $mecanico; ?><br>
                                                            <strong>Data: </strong><?php echo $teste['data_venci']; ?><br>
                                                            <?php
                                                            if ($teste['pago'] == "nao") {
                                                                $status = "<span class='text-danger'>Não Está Paga </span>";
                                                            } else {
                                                                $status = "<span class='text-success'>Está Paga</span>";
                                                            }
                                                            ?>
                                                            <p>
                                                                <span><strong>status:</strong> </span><?php echo $status; ?>

                                                            </p>

                                                        </div>
                                                    <?php } else {
                                                        ?>
                                                        <img src="<?php echo URLADM . "app/adms/assets/foto/" . $valorForm['foto']; ?>" class="mr-3" alt="..." width="200" height="200">
                                                        <div class="media-body">
                                                            <strong>Nome do Produto: </strong> <?php echo $valorForm['nome']; ?><br>
                                                            <strong>Valor do Produto: </strong><?php
                                                            $valorForm['valor_novo'] = number_format($valorForm['valor'], 2, ',', '.');
                                                            echo $valorForm['valor_novo'];
                                                            ?><br>
                                                            <strong>Data: </strong><?php echo $valorForm['data_venci']; ?><br>
                                                            <strong>Funcionário: </strong><?php echo $mecanico; ?><br>

                                                            <?php $mensagem = '<cite class="text-danger"> Esse Produto Foi Apagado, Do Estoque, E também no Registo de Compras Peça para O Adiministrador Apagar</cite>'; ?>
                                                            <?php
                                                            if ($valorForm['pago'] == "nao") {
                                                                $status = $mensagem;
                                                            } else {
                                                                $status = "<span class='text-success'>Está Paga</span>";
                                                            }
                                                            ?>
                                                            <p>
                                                                <span><strong>status:</strong> </span><?php echo $status; ?>

                                                            </p>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer bg-primary text-white">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
