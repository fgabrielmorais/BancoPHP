<?php

$servidor =  "107.161.183.203";
$banco = "terceirods_gabrielfelix";
$usuario = "terceirods_gabriel_felix";
$senha = "xXGMF_2005";

$con = mysqli_connect($servidor, $usuario, $senha);

    if(!$con){
        echo "Erro ao conectar o banco de dados.";
    }
?>