<?php
if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
?>
<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sistema de gestão de Oficina Mecânica</title>
        <meta content="#Sistema de gestão de Oficina Mecânica" name="descriptison">
        <meta content="Oficina,Mecânica,Carros,Motas, Reparação" name="keywords">

        <!-- Favicons -->
        <link href="<?php URLADM; ?>app/adms/assets/imagens/login/logo.png" rel="icon">
        <link href="<?php URLADM; ?>app/adms/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <link href="<?php URLADM; ?>app/adms/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Bootstrap CSS -->
        <!--        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
        <!-- Vendor CSS Files -->
        <link href="<?php URLADM; ?>app/adms/assets/vendor/bootstrap/css/bootstrap-grid.css" rel="stylesheet" type="text/css"/>
        <link href="<?php URLADM; ?>app/adms/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php URLADM; ?>app/adms/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="<?php URLADM; ?>app/adms/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="<?php URLADM; ?>app/adms/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?php URLADM; ?>app/adms/assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="<?php URLADM; ?>app/adms/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?php URLADM; ?>app/adms/assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="<?php URLADM; ?>app/adms/assets/vendor/W3/w3.css" rel="stylesheet">
        <link href="<?php URLADM; ?>app/adms/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href=<?php URLADM; ?>app/adms/assets/css/adminlte.min.css">
        <link href="<?php URLADM; ?>app/adms/assets/css/adminlte.min.css" rel="stylesheet" type="text/css"/>
        <!--<link href="<?php URLADM; ?>app/adms/assets/css/docs.min.css" rel="stylesheet">-->
        <link href="<?php URLADM; ?>app/adms/assets/css/form-validation.css" rel="stylesheet">
        <link href="<?php URLADM; ?>app/adms/assets/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="<?php URLADM; ?>app/adms/assets/css/personalizado1.css" rel="stylesheet">


    </head>
    <!-- JS do Highcharts -->
    <script src="<?php URLADM; ?>app/adms/assets/vendor/code/highcharts.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/code/modules/exporting.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/code/modules/export-data.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/code/modules/accessibility.js"></script>

    <script src="<?php URLADM; ?>app/adms/assets/vendor/code/modules/data.js"></script>
    <script src="<?php URLADM; ?>app/adms/assets/vendor/code/modules/drilldown.js"></script>
 
    <!-- Css Louco do Highcharts -->

    <style type="text/css">
        .highcharts-figure, .highcharts-data-table table {
            min-width: 320px; 
            max-width: 800px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }
        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }
        .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
            padding: 0.5em;
        }
        .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }
        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }


        input[type="number"] {
            min-width: 50px;
        }
    </style>
    <body class="page-top">
        <!--  Modal Editar Perfif-->
        <div class="modal fade" id="editperfil<?php echo $_SESSION['idlogado']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="<?php echo URLADM; ?>perfil" method="get" class="needs-validation" enctype="multipart/form-data" novalidate>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tens A Certeza Que Queres Editar?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="tel1" placeholder="Digete o Nome"  name="nome" value="<?php
                                    if (isset($_SESSION['nome'])) {
                                        echo $_SESSION['nome'];
                                    }
                                    ?>" required>
                                    <div class="invalid-feedback">
                                        Insira O Nome.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="sobrenome">Sobrenome</label>
                                    <input type="text" class="form-control" id="sobrenome" placeholder="Inseri O Sobrenome" name="sobrenome" value="<?php
                                    if (isset($_SESSION['sobrenome'])) {
                                        echo $_SESSION['sobrenome'];
                                    }
                                    ?>" required>
                                    <div class="invalid-feedback">
                                        Campo Obrigatório.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nbi">Nº Do Bilhete</label>
                                    <input type="text" class="form-control" id="tel1" placeholder="Digete O Número do Bilhete"  name="nbi" value="<?php
                                    if (isset($_SESSION['nbi'])) {
                                        echo $_SESSION['nbi'];
                                    }
                                    ?>" required>
                                    <div class="invalid-feedback">
                                        Campo Obrigatório.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nif">Nº de Indetificação Fiscal (NIF)</label>
                                    <input type="text" class="form-control" id="nif" placeholder="Nº de Indetificação Fiscal (NIF)" name="nif" value="<?php
                                    if (isset($_SESSION['nif'])) {
                                        echo $_SESSION['nif'];
                                    }
                                    ?>" required>
                                    <div class="invalid-feedback">
                                        Campo Obrigatório.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="emailnovo">Email <span class="text-muted"></span></label>
                                <input type="emailnovo" class="form-control" id="email" placeholder="you@example.com" name="emailnovo" value="<?php
                                if (isset($_SESSION['email'])) {
                                    echo $_SESSION['email'];
                                }
                                ?>" required>
                                <div class="invalid-feedback">
                                    Campo Obrigatório.
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="telefone">Nº de Telefone</label>
                                    <input type="text" class="form-control" id="tel1" placeholder="Número do Telefone"  name="telefone" value="<?php
                                    if (isset($_SESSION['telefone'])) {
                                        echo $_SESSION['telefone'];
                                    }
                                    ?>" required>
                                    <div class="invalid-feedback">
                                        Campo Obrigatório.
                                    </div>
                                </div>
                                <?php if ($_SESSION['usuario'] != "adimin") { ?>


                                    <div class="col-md-6 mb-3">
                                        <label for="morada">Morada</label>
                                        <input type="text" class="form-control" id="tel1" placeholder="Digete A Morada"  name="morada" value="<?php
                                        if (isset($_SESSION['morada'])) {
                                            echo $_SESSION['morada'];
                                        }
                                        ?>" required>
                                        <div class="invalid-feedback">
                                            Campo Obrigatório.
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>  

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <input type="hidden" name="idusuario" value="<?php echo $_SESSION['idlogado']; ?>">
                            <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
                            <input type="hidden" name="nbiantigo" value="<?php echo $_SESSION['nbi']; ?>">
                            <input type="hidden" name="nifantigo" value="<?php echo $_SESSION['nif']; ?>">
                            <input type="hidden" name="nivel" value="<?php echo $_SESSION['usuario']; ?>">
                            <button class="btn btn-primary" name="btnEditPerfil">Sim</button>
                        </div>
                </div>
                </form>
            </div>
        </div>

