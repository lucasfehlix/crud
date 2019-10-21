<?php
    Class Pessoa{

        private $pdo;

        //6 funções
        //CONEXAO COM O BANCO DE DADOS
        public function __construct($dbname,$host,$dbUsuario,$dbSenha){
            try{
                $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$dbUsuario,$dbSenha);
            }catch(PDOException $e){
                echo "Erro com banco de dados: ".$e->getMessage();
                exit();
            }catch(Exception $e){
                echo "Erro generico: ".$e->getMessage();
                exit();
            }
        }
        public function buscarDados(){
            $cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY id");
            $res = $cmd->fetchALL(PDO::FETCH_ASSOC);
            return $res;
        }
    }
?>