<?php
    //------------CONEXÃO COM O BANCO DE DADOS------------//
    try{
        $pdo = new PDO("mysql:dbname=php;host=localhost","root","");
    }catch(PDOException $e){
        echo "Erro com banco de dados: ".$e->getMessage();
    }catch(Exception $e){
        echo "Erro generico: ".$e->getMessage();
    }
    //----------------------------------------------------//
    //METODOS PARA REALIZAR UM ////INSERT////
    //-1---PASSANDO PARAMETROS
    //$cmd = $pdo->prepare("INSERT INTO pessoa(nome, telefone, email) VALUES(:n, :t, :e)");
    //$cmd->bindValue(":n","Lucas");
    //$cmd->bindValue(":t","88955557777");
    //$cmd->bindValue(":e","lucas@gmail.com");
    //$cmd->execute();
    
    //-2---PASSANDO QUERY PRONTA
    //$pdo->query("INSERT INTO pessoa(nome, telefone, email) VALUES('Rachel', '88977776666', 'rachel@gmail.com')");
    
    //----------------------------------------------------//
    //METODOS PARA REALIZAR UM ////DELETE////

    //-1---PASSANDO PARAMETROS
    //$cmd = $pdo->prepare("DELETE FROM pessoa WHERE id = :i");
    //$id = "3";
    //$cmd->bindValue(":i",$id);
    //$cmd->execute();
    
    //-2---PASSANDO QUERY PRONTA
    //$pdo->query("DELETE FROM pessoa WHERE id='3'");   

    //----------------------------------------------------//
    //METODOS PARA REALIZAR UM ////UPDATE////

    //-1---PASSANDO PARAMETROS
    //$cmd = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :i");
    //$id = "3";
    //$email = "lafp@gmail.com";
    //$cmd->bindValue(":i",$id);
    //$cmd->bindValue(":e",$email);
    //$cmd->execute();
    
    //-2---PASSANDO QUERY PRONTA
    //$pdo->query("UPDATE pessoa SET email = 'lafp@gmail.com' WHERE id = '3'");   

    //----------------------------------------------------//
    //METODOS PARA REALIZAR UM ////SELECT////   
    
    
    
    
    //----------------------------------------------------//
    

?>