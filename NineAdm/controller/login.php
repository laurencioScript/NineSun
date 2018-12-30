<?php
require_once('class/conexao.php');
require_once('validacao.php');

$name = $_POST['name'];
$password = md5($_POST['password']);

$conexao = Conexao::pegaConexao();
$query = "SELECT nome FROM gods WHERE nome = '{$name}' and senha = '{$password}'";

$resultado = $conexao->query($query);
$lista = $resultado->fetchAll();
valida_login($lista);
die();