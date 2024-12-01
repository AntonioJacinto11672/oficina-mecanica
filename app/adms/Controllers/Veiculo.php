<?php

namespace App\adms\Controllers;

if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

use PDO;

/**
 * Description of dadosClisente
 *
 * @author Double
 */
class Veiculo {

    private $dados;
    private $dadosAlter;
    private $dadosForm;

    public function index() {
        if (!empty(filter_input_array(INPUT_POST, FILTER_DEFAULT))) {
            $this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            //var_dump($this->dadosForm);
            //var_dump($_FILES);
            if (isset($this->dadosForm['btnCdsVeiculo'])) {
                $dadosClisente = new \App\adms\Models\AdmsRecepcionista();
                $dadosClisente->cdsVeiculo($this->dadosForm);
            } elseif (isset($this->dadosForm['btnEditveiculo'])) {
                $dadosClisente = new \App\adms\Models\AdmsRecepcionista();
                $dadosClisente->editVeiculo($this->dadosForm);
            } elseif (isset($this->dadosForm['btnDeletVeiculo'])) {
                $dadosClisente = new \App\adms\Models\AdmsRecepcionista();
                $dadosClisente->deleteVeiculo($this->dadosForm);

                //var_dump($this->dadosForm);
            } elseif (isset($this->dadosForm['dadosClisente'])) {
                var_dump($this->dadosForm);
            } else {
                $this->dados['form'] = $this->dadosForm;
            }
        }

        $this->dadosVeiculos();
        $this->dadosCliente();
        $carregarView = new \Core\ConfigView("adms/Views/cliente/pgVeiculo", $this->dados,$this->dadosAlter);
        $carregarView->renderizar();
    }

    public function dadosVeiculos() {
        $dadosVeiculos = new \App\adms\Models\AdmsRecepcionista();
        $this->dados = $dadosVeiculos->dadosVeiculo();
    }

    public function dadosCliente() {
        $dadosVeiculos = new \App\adms\Models\AdmsRecepcionista();
        $this->dadosAlter = $dadosVeiculos->dadosClientes();
    }

}
