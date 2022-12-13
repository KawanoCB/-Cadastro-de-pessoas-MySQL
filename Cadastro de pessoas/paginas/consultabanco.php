<?php
include "./dataBase.php";
include "./config.php";

if (isset($_GET["txtnome"])) {
    $nome = $_GET["txtnome"];
    // Conexao com o banco de dados  
    $con = mysqli_connect("localhost:3306", "root", "", "veiculos") or die("Erro na conexão!");
    // Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "SELECT * FROM usuario";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM usuario WHERE nome like '$nome'";
    }
    sleep(1);
    $resultado = $con->query($sql);
    //var_dump($resultado);   
    if ($resultado->num_rows > 0) {
        // Verifica se a consulta retornou linhas
        //declação

    }
};
