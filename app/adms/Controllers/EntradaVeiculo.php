<?php

namespace App\adms\Controllers;

/**
 * Description of Produto
 *
 * @author Double
 */
class entradaVeiculo {
    private $dados;
    public function index() {
        if (!empty(filter_input_array(INPUT_POST, FILTER_DEFAULT))) {
            $this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            //var_dump($this->dadosForm);
            //var_dump($_FILES);
            if (isset($this->dadosForm['btndeletVeiculo'])) {
                $dadosVendas = new \App\adms\Models\AdmsMecanico();
                $dadosVendas->deletVeiculo($this->dadosForm);
                
                //var_dump($this->dadosForm);
            }  else {
                $this->dados['form'] = $this->dadosForm;
            }
        }

        $this->dadosEntradaVeiculo();
        $carregarView = new \Core\ConfigView("adms/Views/entradaVeiculo/pgEntradaVeiulo", $this->dados);
        $carregarView->renderizar();
    }
    private function dadosEntradaVeiculo() {
        $dadosVendas = new \App\adms\Models\AdmsMecanico();
        $this->dados = $dadosVendas->dadosEntradaCarro();
    }
}
