<?php
if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
//var_dump($this->dados);
?>
<div class="wrapper"> 
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">



                        <!-- Main content -->
                        <div class="invoice p-3 mb-3 p-5">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-center">
                                        <img src="app/adms/assets/imagens/login/logo.png" width="100px" height="60px"/>
                                        <span class="text-muted"><?php echo NOME_OFICINA; ?></span>
                                    </h4>
                                    <div class="row justify-content-center">
                                        <small class="badge badge-primary text-wrap text-center " style="width: 24rem;font-family: 16px"><?php echo ENDERECO_OFICINA; ?><br><?php echo "Tel: " . TELEFONE . "  " . "Email:" . EMAIL_OFICINA; ?></small>
                                    </div>
                                    <hr>
                                </div>
                                <?php
                                if (isset($this->dados)) {
                                    $value = $this->dados;
                                    ?>


                                <?php }
                                ?>
                                <div class="col-12">
                                    <h4>
                                        <span class=" text-muted">Orçamento Nº <?php echo $value['idorcamentos']; ?></span>
                                        <small class="float-right">Data: <?php echo date("d/M/Y"); ?></small><br>
                                    </h4>
                                    <hr>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <strong>Cliente.</strong><br>

                                        Nome: <?php echo $value['nome'] . " " . $value['sobrenome']; ?><br>
                                        Nº BI: <?php echo $value['nbi']; ?><br>
                                        NIF: <?php echo $value['nif']; ?><br>

                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <strong></strong><br>
                                        <?php echo $value['morada']; ?><br>
                                        Telefone: (+244) <?php echo $value['telefone']; ?><br>
                                        Email: <?php echo $value['email']; ?>
                                    </address>
                                </div>

                                <!-- /.col -->

                                <div class="col-sm-4 invoice-col">

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <hr>
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <strong>Veículo.</strong><br>
                                        Matrícula: <?php echo $value['matricula']; ?><br>
                                        Marca: <?php echo $value['marca']; ?><br>
                                        Modelo: <?php echo $value['modelo']; ?><br>
                                        Cor: <?php echo $value['cor']; ?>
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <strong></strong><br>
                                        Nº Motor: <?php echo $value['nmotor']; ?><br>
                                        Nº Quadro: <?php echo $value['nquadro']; ?><br>
                                        Peso Bruto: <?php echo $value['pesobruto']; ?><br>
                                        Medidas do Pneu: <?php echo $value['medidapeneu']; ?><br>
                                        Cilidrade: <?php echo $value['cilindrada']; ?><br>

                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <strong></strong><br>
                                        Nº de Cilidros: <?php echo $value['ncilindros']; ?><br>
                                        Tipo Caixa: <?php echo $value['tipocaixa']; ?><br>
                                        Combustivel: <?php echo $value['combustivel']; ?><br>
                                        Distancia entre Eixos: <?php echo $value['distanciaeixo']; ?><br>
                                        Lotação: <?php echo $value['lotacao']; ?><br>
                                    </address>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <hr>
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <strong>Laudo do Mecânico.</strong><br>
                                        <b>Tipo Serviço:</b> <?php echo $value['nome_servico']; ?><br>

                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <strong></strong><br>
                                        <b> Garantia: </b><?php echo $value['garantia']; ?> dias
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <address>
                                        <strong></strong><br>
                                        <b> Valor De Serviço: </b><?php echo number_format($value['valor_t_servico'], 2, ",", "."); ?> Kz
                                    </address>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Peça / Produto</th>
                                                <th>Valor</th>
                                                <th>Quantidade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $totalproduto = 0;
                                            if (isset($this->dadosAlter)) {
                                                for ($index = 0; $index < count($this->dadosAlter); $index++) {
                                                    $valorForm = $this->dadosAlter[$index];
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $valorForm['nome_produto']; ?></td>
                                                        <td><?php
                                                            $totalproduto = $totalproduto + ($valorForm['valor_venda'] * $valorForm['quantidade']);
                                                            $valorForm['valor_vendam'] = number_format($valorForm['valor_venda'], 2, ",", ".");
                                                            echo $valorForm['valor_vendam'];
                                                            ?>KZ
                                                        </td>
                                                        <td><?php echo $valorForm['quantidade']; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-6">

                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                    <p class="lead">Valor do Orçamento </p>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th style="width:50%">Valor Peça / Produto:</th>
                                                <td><?php echo number_format($totalproduto, 2, ",", "."); ?> Kz</td>
                                            </tr>
                                            <tr>
                                                <th>Valor Mão de Obra</th>
                                                <td><?php echo number_format($value['valor_maodeobra'], 2, ",", ".") ?> Kz</td>
                                            </tr>
                                            <tr>
                                                <th>Desconto
                                                    <?php
                                                    $value['valortotali'] = $value['valor_t_servico'] + $value['valor_maodeobra'] + $totalproduto;
                                                    $desconto = ($value['valortotali'] * VALOR_DESCONTO);
                                                    $value['valortotalf'] = $value['valortotali'] - $desconto;
                                                    ;
                                                    ?>
                                                    (<?php echo (VALOR_DESCONTO * 100); ?>%)</th>
                                                <td><?php echo number_format($desconto, 2, ",", "."); ?> Kz</td>
                                            </tr>
                                            <tr>
                                                <th>Mecânico:</th>
                                                <td><?php
                                                    $newConn = mysqli_connect("localhost", "root", "", "mecanica");
                                                    $query = "SELECT * FROM usuario WHERE nif='{$value['nifmecanico']}' LIMIT 1";
                                                    $result = mysqli_query($newConn, $query);
                                                    $mecanico = mysqli_fetch_assoc($result);
                                                    //var_dump($mecanico);
                                                    $mecanico = $mecanico['nome'] . " " . $mecanico['sobrenome'];
                                                    ?>
                                                    <?php echo $mecanico; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Subtotal:</th>
                                                <td><?php echo number_format($value['valortotali'], 2, ",", "."); ?> Kz</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td><?php echo number_format($value['valortotalf'], 2, ",", "."); ?> Kz</td>
                                            </tr>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2"><b>Obs:</b> Data Prevista Para Entrega <?php echo date("d/m/Y", strtotime($value['data_entrega'])); ?> </td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="<?php echo URLADM . "relatorioMecanica?relatorio=imprimirorcamento&idorcamentos=" . $valorForm['idorcamentos']; ?>" rel="noopener" target="_blank" class="btn btn-default border"><i class="fas fa-print"></i> Print</a>
                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fas fa-download"></i> Gerar PDF
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
</div>
<script>
    window.addEventListener("load", window.print());
</script>