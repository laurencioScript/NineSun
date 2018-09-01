<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nine Sun</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css">
  </head>
  <body>
    <div class="container-fluid">
      
      <div class="row" id="logo">   
        <div class="col-md-offset-4 col-md-4" id="div_logo">
          <img src="img/logo_04.png" class="img-responsive" alt="img logo"> 
        </div>
      </div><!-- Logo -->
    
      <div class="row" id="campo_busca">
        <div class="col-md-offset-4 col-md-4 col-xs-offset-1 col-xs-8 ">
          <form autocomplete="off" action="/search.php" method="GET" class="form-horizontal">
            <div class="form-group">
              <input type="search" class="form-control" id="input" placeholder="Encontre seu hotel ideal">
            </div>    
          </form>
        </div>
          <button class="btn btn-warning" type="submit" id="btn_search">
                <span class="glyphicon glyphicon-search"></span>
          </button>          
      </div><!-- Campo de Busca -->

      <footer class="row">         
            <div class="col-md-2 col-xs-6">
              <button type="button" class="btn btn-link colo_btn" id="btn_fale_conosco">Fale Conosco</button>
              <button type="button" class="btn btn-link" id="btn_duvidas">Duvidas</button>  
            </div>  
            <div class="col-md-2 col-xs-5" id="footer_right">
              <button type="button" class="btn btn-link" id="btn_contato">Contato</button>
              <button type="button" class="btn btn-link" id="btn_sobre">Sobre</button>  
            </div>
      </footer>

    </div><!-- Container -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/buscador.js"></script>
  </body>
</html>