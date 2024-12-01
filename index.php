<?php

session_start();
ob_start();
define('R4F5CC', true);

require './vendor/autoload.php';
$db = "mysql";
$host = "localhost";
$port = "3306";
$dbname = "mecanica";
$user = "root";
$pass = "";

$con = new PDO($db . ':host=' . $host . ';port=' . $port . ';dbname=' . $dbname, $user, $pass);
/* $result = $con->prepare("SELECT idcandidaturas FROM candidaturas WHERE st_candidatura = 'Aberto' AND data_termino=curDate()");
$result->execute();
if ($result->rowCount()) {
    $resultado = $result->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($resultado);
    //echo count($resultado);
    $st_candidatura = "Fechado";
    for ($index1 = 0; $index1 < count($resultado); $index1++) {
        $idcandidaturas = $resultado[$index1]['idcandidaturas'];
        $result1 = $con->prepare("UPDATE candidaturas SET st_candidatura=:st_candidatura WHERE idcandidaturas=:idcandidaturas");
        $result1->bindParam(":st_candidatura", $st_candidatura);
        $result1->bindParam(":idcandidaturas", $idcandidaturas);
        $result1->execute();
        if ($result1->rowCount()) {
            $_SESSION['msg'] = "<div class='alert alert-warning text-center '>Fechou Hoje Algumas Candidatura</div>";
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger text-center '>Fechou Hoje Algumas Candidatura</div>";
        }
    }
} */
$url = new Core\ConfigController();
$url->carregar();
// Excluir Orçamento Após XX Dias
$data_hoje = date('Y-m-d');

//$data_15 = date('Y-m-d', strtotime("".EXCLUIR_ORCAMENTO_DIAS." days",
//strtotime($data_hoje)));
//echo $data_15;
?>