<?php

namespace App\adms\Models;
if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

use PDO;
/**
 * Description of Conn
 *
 * @author Celke
 */
class Conn
{
    private  $db = "mysql";
    private  $host = "localhost";
    private  $user = "root";
    private  $pass = "";
    private  $dbname = "mecanica";
    private  $port = 3306;
    private  $connect;
    
    protected function connect() {
        try {
            //$this->connect = new PDO($this->db . ':host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);
            
            $this->connect = new PDO($this->db . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname, $this->user, $this->pass);
            return $this->connect;
        } catch (Exception $ex) {
            die('Erro: Por favor tente novamente. Caso o problema persista, entre em contato o administrador adm@empresa.com');
        }
    }
    
}
