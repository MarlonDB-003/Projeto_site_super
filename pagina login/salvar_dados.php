<?php
include_once('conexao.php');
$nome = $_POST['nome'];
$email_user = $_POST['email_user'];
$siap_user = $_POST['siap_user'];
$area_user = $_POST['area_user'];
$tipo_user = $_POST['tipo_user'];

$result_dados_user = "INSERT INTO usuario(nome, email, siap, area, tipo_contrato) VALUES ('$nome', '$email_user', '$siap_user', '$area_user', '$tipo_user', NOW())";

$resultado_dados_user = mysqli_query($conn, $result_dados_user);
?>