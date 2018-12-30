<?php require_once('header.php') ?>

    <div id="centralizador" onload="centraliza()">
      <div class="row" id="logo">
        <div class="col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6" id="div_logo">
          <img src="img/NovaLogo.png" class="img-responsive" alt="img logo">
        </div>
      </div><!-- Logo -->

      <div class="row" id="campo_busca">
        <div class="col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
           <form autocomplete="off" action="search.php" method="GET" class="form-horizontal">
            <div class="input-group">
              <input type="search" name="palavra-chave" class="form-control" id="input" placeholder="Encontre seu hotel ideal">
              <div class="input-group-btn">
                <button class="btn btn-warning" type="submit" id="btn_search">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div><!-- Campo de Busca -->
    </div>
    <div class="clearfix"></div>
<?php require_once('footer.php') ?>
