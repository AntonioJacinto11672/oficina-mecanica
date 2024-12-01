<?php

namespace App\adms\Controllers;

/**
 * Description of RelatorioMecanica
 *
 * @author Double
 */
class RelatorioMecanica {

    private $dados;
    private $dadosAlter;
    private $dadosPaginacao;
    private $dadosForm;

    public function index() {
        if (filter_input(INPUT_GET, 'relatorio', FILTER_SANITIZE_SPECIAL_CHARS)) {
            $this->dadosForm['tipo'] = filter_input(INPUT_GET, 'relatorio', FILTER_SANITIZE_SPECIAL_CHARS);

            //echo $this->dadosForm['tipo'];
            if ($this->dadosForm['tipo'] == "orcamento") {
                $this->dadosForm['idorcamentos'] = filter_input(INPUT_GET, 'idorcamentos', FILTER_VALIDATE_INT);

                //var_dump($this->dadosForm);

                $this->dadosOrcamentos();
                $this->dadosOrcamentosAlter();


                $carregarView = new \Core\ConfigView("adms/Views/relatorio/mecanico/relatorioVeiculo", $this->dados, $this->dadosAlter);
                $carregarView->renderizaRelatorio();
            } elseif ($this->dadosForm['tipo'] == "imprimirorcamento") {
            $this->dadosForm['idorcamentos'] = filter_input(INPUT_GET, 'idorcamentos', FILTER_VALIDATE_INT);

                //var_dump($this->dadosForm);

                $this->dadosOrcamentos();
                $this->dadosOrcamentosAlter();
                
                
                $carregarView = new \Core\ConfigView("adms/Views/relatorio/mecanico/imprimirRelatorioVeiculo", $this->dados, $this->dadosAlter);
                $carregarView->renderizaRelatorio();    
            }
        }
        //$this->dadosOperacaoMovimentacao();
        //$this->dadosMovimentacao();
    }

    private function dadosOrcamentos() {
        $dados = new \App\adms\Models\AdmsMecanico();
        $this->dados = $dados->dadosOrcamentosCompletoId($this->dadosForm);
    }

    private function dadosOrcamentosAlter() {
        $dados = new \App\adms\Models\AdmsMecanico();
        $this->dadosAlter = $dados->dadosOrcamentosCompletoAlter($this->dadosForm);
    }

}
