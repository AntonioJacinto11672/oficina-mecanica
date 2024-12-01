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
}
?>
<!-- Begin Page Content -->

<div class="container-fluid">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Compras</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Matrícua</th>
                            <th>Cliente</th>
                            <th>Mecânico</th>
                            <th>Data Entrada</th>
                            <th>Serviço</th>
                            <th>Acção</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Modelo</th>
                            <th>Matrícua</th>
                            <th>Cliente</th>
                            <th>Mecânico</th>
                            <th>Data Entrada</th>
                            <th>Serviço</th>
                            <th>Acção</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        </tr>
                        <?php
                        if (isset($this->dados)) {
                            for ($index = 0; $index < count($this->dados); $index++) {
                                $valorForm = $this->dados[$index];
                                ?>
                                <tr>
                                    <td><?php echo $valorForm['modelo']; ?></td>
                                    <td><?php echo $valorForm['matricula']; ?></td>
                                    <td>
                                        <?php
                                        $newConn = mysqli_connect("localhost", "root", "", "mecanica");
                                        $query = "SELECT * FROM clientes WHERE nif='{$valorForm['cliente']}' LIMIT 1";
                                        $result = mysqli_query($newConn, $query);
                                        $mecanico = mysqli_fetch_assoc($result);
                                        //var_dump($mecanico);
                                        @$mecanico = @$mecanico['nome'] . " " . @$mecanico['sobrenome'];
                                        ?>
                                        <?php echo @$mecanico; ?></td>
                                    </td>
                                    <td><?php
                                        $newConn = mysqli_connect("localhost", "root", "", "mecanica");
                                        $query = "SELECT * FROM usuario WHERE nif='{$valorForm['nifmecanico']}' LIMIT 1";
                                        $result = mysqli_query($newConn, $query);
                                        $mecanico = mysqli_fetch_assoc($result);
                                        //var_dump($mecanico);
                                        @$mecanico = @$mecanico['nome'] . " " . @$mecanico['sobrenome'];
                                        ?>
                                        <?php echo @$mecanico; ?></td>
                                    <td><?php echo $valorForm['data_entrada']; ?></td>
                                    <td><?php echo $valorForm['servico']; ?></td>
                                    <td>
                                        <a href="<?php echo $valorForm['identrada_veiculo']; ?>" data-toggle="modal" data-target="#delete<?php echo $valorForm['identrada_veiculo']; ?>"><i class="ico icofont-trash text-danger"></i></a>
                                    </td>
                                </tr>
                                <!--  Modal Deletar-->
                            <div class="modal fade" id="delete<?php echo $valorForm['identrada_veiculo']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h5 class="modal-title" id="exampleModalLabel">Tens A Certeza Que Queres Apagar?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Clica "Sim" Para Pagar Esse Veiculo da Oficina</div>
                                        <div class="modal-footer bg-danger text-white">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <form action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                                                <input type="hidden" name="identrada_veiculo" value="<?php echo $valorForm['identrada_veiculo']; ?>">
                                                <button class="btn btn-primary" name="btndeletVeiculo">Sim</button>
                                            </form>
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
