<?php

namespace App\adms\Controllers;

class Consultas {

    //put your code here
    private $dados;
    private $dadosForm;

    public function index() {

        if (filter_input(INPUT_GET, 'value', FILTER_SANITIZE_SPECIAL_CHARS)) {
            @$this->dadosForm['value'] = filter_input(INPUT_GET, 'value', FILTER_SANITIZE_SPECIAL_CHARS);
            //var_dump($this->dadosForm);
            echo $this->dadosForm['value'];
            if ($this->dadosForm['value'] == "produtos") {

                $this->dadosProdutos();
                $this->viewProdutos();
            } elseif ($this->dadosForm['value'] == "veiculos") {

                $this->dadosVeiculos();
                $this->viewVeiculos();
            } elseif ($this->dadosForm['value'] == "servico") {

                $this->dadosServicos();
                $this->viewServicos();
            } else {
                $destino = URLADM . "home";
                header("Location: $destino");
            }
        } else {
            $destino = URLADM . "home";
            header("Location: $destino");
        }
    }

    private function viewProdutos() {
        $carregarView = new \Core\ConfigView("adms/Views/consulta/pgProduto", $this->dados);
        $carregarView->renderizar();
    }

    private function viewVeiculos() {
        $carregarView = new \Core\ConfigView("adms/Views/consulta/pgVeiculo", $this->dados);
        $carregarView->renderizar();
    }

    private function dadosVeiculos() {
        $dadosVeiculos = new \App\adms\Models\AdmsRecepcionista();
        $this->dados = $dadosVeiculos->dadosVeiculo();
    }

    private function dadosProdutos() {
        $dados = new \App\adms\Models\AdmsMecanico();
        $this->dados = $dados->dadosProdutos();
    }

    private function dadosServicos() {
        $dadosVeiculos = new \App\adms\Models\AdmsMecanico();
        $this->dados = $dadosVeiculos->dadosOrcamentosCompleto();
    }

    private function viewServicos() {
        $carregarView = new \Core\ConfigView("adms/Views/consulta/pgServico", $this->dados);
        $carregarView->renderizar();
    }

}
