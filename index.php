<?php
    require_once "classes/classe-pessoa.php";
    $p = new Pessoa("php","localhost","root","");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro Pessoa</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <section id="esquerda">
            <form action="">
                <h2>CADASTRAR PESSOA</h2>
                <LAbel for="nome">Nome</LAbel>
                <input type="text" name="nome" id="nome">
                <LAbel for="telefone">Telefone</LAbel>
                <input type="text" name="telefone" id="telefone">
                <LAbel for="email">Email</LAbel>
                <input type="text" name="email" id="email">
                <input type="submit" value="Cadastrar">
            </form>
        </section>
        <section id="direita">
            <?php
                $dados = $p->buscarDados();
                //echo "<pre>";
                //var_dump($dados);
                //echo "</pre>";
            ?>
            <table>
                <tr id="titulo">
                    <td>NOME</td>
                    <td>TELEFONE</td>
                    <td colspan="2">EMAIL</td>
                </tr>
                <tr>
                    <td>Lucas</td>
                    <td>88977776666</td>
                    <td>lucas@gmail.com</td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Excluir</a>
                    </td>
                </tr>
            </table>
        </section>
    </body>
</html>