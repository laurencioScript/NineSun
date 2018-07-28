<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Baixada Hoteis</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/home_style.css" rel="stylesheet">
</head>
<body> 

      <div class="container-fluid">
        
        <div class="row" id="navbar">
          
          <nav class="navbar navbar-inverse navbar-static-top">       
            <div class="container">               
              <a class="navbar-brand"  data-toggle="collapse" href="#collapseExample" aria-expand="false" aria-controls="collapseExample">
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
              </a><!-- fechamento BOTAO !-->            
              <div class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" size="30" placeholder="Search" id="ip_serach">
                </div><!-- fechamento INPUT !-->
                <button type="button" id="btn_submit" class="btn btn-default">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button><!-- fechamento BOTAO !-->
              </div><!-- fechamento NAVBAR-FORM !-->          
            </div><!-- fechamento CONTAINER !-->
          </nav><!-- fechamento NAVBAR !-->    
          
          <div class="collapse" id="collapseExample">
            <div class="well">
              <div class="checkbox">
                <table>
                  <td><label><input type="checkbox">Wi-Fi </label></td>
                  <td><label><input type="checkbox">Restaurante</label></td>
                  <td><label><input type="checkbox">Bar</label></td>
                  <td><label><input type="checkbox">Ar-Condicionado</label></td>
                  <td><label><input type="checkbox">Estacionamento</label></td>
                </table><!-- fechamento TABLE !-->
              </div><!-- fechamento CHECKBOX !-->
            </div><!-- fechamento WELL !-->  
          </div><!-- fechamento COLLAPSE !-->
        </div> <!-- fechamento ROW NAVBAR !-->

        <div class="row" >
          <div class="row" id="row_content" >
            <div class="col-md-offset-2 col-md-8" id="content_search">

            </div> <!-- fechamento COL-MD-OFFSET-0 !-->
          </div> <!-- fechamento ROW !-->
        </div> <!-- fechamento ROW  !-->
                
        <div class="row" style="background-color: #474344">
            <div class="col-md-offset-1 col-md-2"><br>
              <li>
                <ul><a>Fale Conosco</a></ul>
                <ul><a>Encontre Seu Hotel Ideal</a></ul>
                <ul><a>Tire Suas Duvidas</a></ul>
                <ul><a>Termos de Acesso</a></ul>
              </li>
            </div><!-- fechamento COL-MD-OFFSET-1 !-->
            
            <div class="col-md-offset-1 col-md-3">
              <li>
                <br><br><br><br><br><br>
                <ul><a>E-Mail: baixahoteis@gmail.com</a></ul>
              </li>
            </div><!-- fechamento COL-MD-OFFSET-1 !-->

            <div class="col-md-offset-1 col-md-2">       
              <br><p class="text-info">
                Site Desenvolvido e mantido pelos alunos |NOME|NOME|NOME|NOME| para o exerciciom e efetivação do projeto de iniciação Cientifica que visa o desenvolvimento e bla bla bla bla bla (Aqui vira um texto falando sobre o site e etc).
              </p>
            </div><!-- fechamento COL-MD-OFFSET-1 !-->
        </div> <!-- fechamento ROW !-->

      </div> <!-- fechamento CONTAINER !-->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/request_server.js"></script>
      <script type="text/javascript" src="js/carrosel.js"></script>

</body>
</html> 