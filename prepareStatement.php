<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

        require './inc/Config.inc.php';
        $conn = new Conn();
        $nome = "Paulo";
        $email = "paulo@gmail.com";
        $nivelacessoid = "3";
        $situacaousuarioid = "6";
        $criadoem = "2022/01/30";
        $modificadoem = "2022/01/31";


        try {

            $cadastro = "INSERT INTO tblusuarios(nome, email, nivelacessoid, situacaousuarioid, criadoem, modificadoem) VALUES(:nome, :email, :nivelacessoid, :situacaousuarioid, :criadoem, :modificadoem)";
            $cadastrar = $conn->getConn()->prepare($cadastro);
            $cadastrar->bindParam(':nome', $nome, PDO::PARAM_STR);
            $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
            $cadastrar->bindParam(':nivelacessoid', $nivelacessoid, PDO::PARAM_STR);
            $cadastrar->bindParam(':situacaousuarioid', $situacaousuarioid, PDO::PARAM_STR);
            $cadastrar->bindParam(':criadoem', $criadoem, PDO::PARAM_STR);
            $cadastrar->bindParam(':modificadoem', $modificadoem, PDO::PARAM_STR);
            $cadastrar->execute();

            if($cadastrar->rowCount()):
                echo "Cadastrado com sucesso!";
            endif;
        } catch (Exception $e) {
            //throw $th;
        }


    ?>
</body>
</html>