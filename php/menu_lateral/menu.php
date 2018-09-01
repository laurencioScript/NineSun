<div class="icon-close">                    
    <div class="col-md-offset-10 btn_invi">
        <button id="btn_fechar"><span class="glyphicon glyphicon-remove  btn-lg"></span></button>   
    </div>
</div>
    <ul id="menu">
        <li>
             <button type="button" class="btn btn-link colo_btn" id="btn_cidade">Cidades</button>
        </li>
        <li>
             <button type="button" class="btn btn-link colo_btn" id="btn_classificacao">Classificação</button>
        </li>
        <li>
             <button type="button" class="btn btn-link colo_btn" id="btn_acomodidade">Acomidades</button>
        </li>
        <li>
            <button type="button" class="btn btn-link colo_btn" id="btn_fale_conosco">Keyword</button>
        </li>
</ul>
<script type="text/javascript">$(document).ready(() => {
    $('.icon-menu').click(() => { moverMenu(0, 350) });
    $('#btn_fechar').click(() => { moverMenu(-350, 0) });
    $("#btn_cidade").click(function(){teste("checks_boxs_cidades.php");});
    $("#btn_classificacao").click(function(){teste("checks_boxs_classificacao.php");});
    $("#btn_acomodidade").click(function(){teste("checks_boxs_acomodidades.php");});

});</script>
           