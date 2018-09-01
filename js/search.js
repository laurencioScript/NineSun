let height = document.getElementById("header").clientHeight;
console.log(height);

document.getElementById("div_input").style.marginTop = (height/2)+'px';

function moverMenu(distMenu, distBody) {
            $('.menu').animate({
                left: distMenu + "px"
            }, 200);

            $('body').animate({
                left: distBody + "px"
            }, 200);
        }

$(document).ready(() => {
    $('.icon-menu').click(() => { moverMenu(0, 350) });
    $('#btn_fechar').click(() => { moverMenu(-350, 0) });
    
});

let x = document.getElementById("btn_cidade");

$("#btn_cidade").click(function(){teste("checks_boxs_cidades.php","#li_cidades");});
$("#btn_classificacao").click(function(){teste("checks_boxs_classificacao.php","#li_classificacao");});
$("#btn_acomodidade").click(function(){teste("checks_boxs_acomodidades.php","#li_acomidades");});


function teste(arquivo,local){
    let conteudo = $(local).html().length;;
    if(conteudo==0){
        $.ajax({
            url: 'php/menu_lateral/'+arquivo,     
            type: 'POST',
            dataType: 'html',
            success: function(msg){ $(local).html(function(){return msg});}
        });

        if(local!="#li_cidades"){
            $("#li_cidades").html("");
        }
        if(local!="#li_classificacao"){
            $("#li_classificacao").html("");
        }
        if(local!="#li_acomidades"){
            $("#li_acomidades").html("");
        }

    }
    else{
        $(local).html("");
    }   
}