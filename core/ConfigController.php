<?php

namespace Core;

if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Description of ConfigController
 *
 * @author Double
 */
class ConfigController {

    //put your code here
    private $url;

    public function __construct() {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
        } else {
            $this->url = "login";
        }
    }

    public function carregar() {
        $this->config();
        $valPermissao = new \Core\Permissao();
        $valPermissao->index($this->url);
        $urlController = ucwords($this->url);
        $classe = "\\App\\adms\\Controllers\\" . $urlController;
        $classeCarregar = new $classe;
        $classeCarregar->index();
    }

    private function config() {
        define("NOME_OFICINA", "OFICINA DO BAIRRO");
        define('URLADM', "http://localhost/oficinamecanica.co.ao/");
        define('ENDERECO_OFICINA', "Luanda Rua da CTT, Rangel");
        define("EMAIL_OFICINA", "antjacinto11672@gmail.com");
        define("TELEFONE", "+244 931 950 857");
        define('NIVEL_STOQUE', 5); // A Partir De X Produtos O Nível de Estoue Estará Baixo
        define('DESCONTO_ORC', "SIM");
        define('VALOR_DESCONTO', 0.05); // Valor Em Percetagem, Por Exemplo 5 vai ser 5%
        define('VALIDAR_ORCAMENTO_DIAS', 5);
        define('EXCLUIR_ORCAMENTO_DIAS', 15); // Excluir Orçamento após 15 dias orcamento que estiver Aberto
        define('COMISSAO_MECANICO', "SIM"); // Se não Existir Comissão no Sistema Muda Para Não
        define('VALOR_COMISSAO', 0.30);  // Colocar o vaor da comissão com a percetangem matendo 0 na frente, 0.30  corresponde a 30%

        define('DIAS_ALERTA_RETORNO', 180); // Dias para Avisar  A recepção que o veiculo não retorna ao serviço a  Alerta Após 180 dias
        define('MENAGEM_RETORNO', "Vimos quee já faz um tempo que não fazemos nenhum
                                  serviço em seu veículo, estamos com uma promoção para serviço de 
                                  Balanceamento, troca de óleo e varios outros aproveite a nossa promoção...");



        $newConn = mysqli_connect("localhost", "root", "", "mecanica");
        $query = "SELECT * FROM usuario WHERE nivel='adimin'";
        $result = mysqli_query($newConn, $query);
        if (mysqli_num_rows($result) == 0) {
            $query = "INSERT INTO usuario (nbi,nif,nome,sobrenome,email,telefone,senha,nivel,st_conta,foto,created,modified) VALUES ('ALDADL1222334','ALDADL1222334','Antonio','Jacinto','Jacinto ','937585960','827ccb0eea8a706c4c34a16891f84e7b','Ativada')";
            $result = mysqli_query($newConn, $query);
        }
    }

}
