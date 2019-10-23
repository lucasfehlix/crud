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
            $cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY nome");
            $res = $cmd->fetchALL(PDO::FETCH_ASSOC);
            return $res;
        }
        public function cadastrarPessoa($nome, $telefone, $email){
            $cmd = $this->pdo->prepare("SELECT id FROM pessoa WHERE email = :e");
            $cmd->bindValue(":e",$email);
            $cmd->execute();
            if ($cmd->rowCount() > 0) {
                return false;
            }else{
                $cmd = $this->pdo->prepare("INSERT INTO pessoa (nome,telefone,email) VALUES (:n,:t,:e)");
                $cmd->bindValue(":n",$nome);
                $cmd->bindValue(":t",$telefone);
                $cmd->bindValue(":e",$email);
                $cmd->execute();      
                return true;
            }
        }
        public function excluirPessoa($id){
            $cmd = $this->pdo->prepare("DELETE FROM pessoa WHERE id = :id");
            $cmd->bindValue(":id",$id);
            $cmd->execute();
        }
        public function buscarPessoa($id){
            $res = array();
            $cmd = $this->pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
            $cmd->bindValue(":id",$id);
            $cmd->execute();
            $res = $cmd->fetch(PDO::FETCH_ASSOC);
            return $res;
        }
        public function atualizarPessoa($id,$nome,$telefone,$email){
            $cmd = $this->pdo->prepare("UPDATE pessoa SET nome=:n, telefone=:t, email=:e WHERE id = :id");
            $cmd->bindValue(":id",$id);
            $cmd->bindValue(":n",$nome);
            $cmd->bindValue(":t",$telefone);
            $cmd->bindValue(":e",$email);
            $cmd->execute();
            return true;
        }
    }
?>