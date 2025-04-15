<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "quiz";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$a = $_POST['pergunta1'];
$b = $_POST['r1'];
$c = $_POST['r2'];
$d = $_POST['r3'];
$e = $_POST['r4'];


$query = "INSERT INTO perguntas (pergunta1, r1, r2, r3, r4)
            VALUES('$a','$b','$c','$d','$e')";

mysqli_query($conexao, $query);

//echo"Fornecedor cadastrado com sucesso";//

header('location:index.php');