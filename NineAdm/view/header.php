<?php include_once('../controller/exibe-mensagem.php');?>
<?php include_once('../controller/validacao.php');?>
<?php require_once('../controller/class/Acomodidade.php');?>
<?php include_once('../controller/class/Hotel.php');?>
<?php include_once('../controller/class/Formulario.php');?>
<?php include_once('../controller/class/ServicoDoHotel.php');?>
<?php
        function get_btn_logout(){
            if(isset($_SESSION['acesso'])):
?>
            <li><a href="../controller/logout.php">Sair</a></li>
<?php       
            endif;
        }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NineAdm</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/index.css" rel="stylesheet">
</head>
  <body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        
        <a class="navbar-brand" href="index.php">NINE ADM</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="formulario-hotel.php">Adicionar Hotel</a></li>
            <li><a href="formulario-hotel-lista.php">Lista de Hoteis</a></li>
            <li><a href="formulario-servico.php">Adicionar Servico</a></li>
            <li><a href="formulario-servico-lista.php">Lista de Serviços</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
           <li><?php get_btn_logout();?></li>
        </ul>    
        </div>
    </div>
    </nav>

    <div id="conteudo" class="container-fluid">