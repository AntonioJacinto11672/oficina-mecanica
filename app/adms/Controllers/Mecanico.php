<?php

namespace App\adms\Controllers;

if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

use PDO;

/**
 * Description of Mecanico
 *
 * @author Double
 */
class Mecanico {

    private $dados;
    private $dadosForm;

    public function index() {
        if (!empty(filter_input_array(INPUT_POST, FILTER_DEFAULT))) {
            $this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            //var_dump($this->dadosForm);
            //var_dump($_FILES);
            if (isset($this->dadosForm['btnCdsMecanico'])) {
                $this->dadosForm['foto'] = ($_FILES['foto'] ? $_FILES['foto'] : null);
                $cdsMecanico = new \App\adms\Models\AdmsMecanico();
                $cdsMecanico->cdsMecanico($this->dadosForm);
            } elseif (isset($this->dadosForm['btnDeletMecanico'])) {
                $cdsMecanico = new \App\adms\Models\AdmsMecanico();
                $cdsMecanico->deleteMecanico($this->dadosForm);
            } elseif (isset($this->dadosForm['btnEditMecanico'])) {
                $cdsMecanico = new \App\adms\Models\AdmsMecanico();
                $cdsMecanico->editMecanico($this->dadosForm);

                //var_dump($this->dadosForm);
            } elseif (isset($this->dadosForm['btnAtivarConta'])) {
                $cdsMecanico = new \App\adms\Models\AdmsMecanico();
                $this->dadosForm['usuario'] = "Mecanico";
                $cdsMecanico->ativarConta($this->dadosForm);
                
            }  elseif (isset($this->dadosForm['btnEditPerfilMecanico'])) {
                var_dump($this->dadosForm);
            } else {
                $this->dados['form'] = $this->dadosForm;
            }
        }

        $this->dadosMecanicos();
        $carregarView = new \Core\ConfigView("adms/Views/mecanico/pgMecanico", $this->dados);
        $carregarView->renderizar();
    }

    public function dadosMecanicos() {
        $dadosMecanicos = new \App\adms\Models\AdmsMecanico();
        $this->dados = $dadosMecanicos->dadosMecanico();
    }

}
