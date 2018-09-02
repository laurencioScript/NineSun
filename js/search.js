let height = document.getElementById("header").clientHeight;
document.getElementById("div_input").style.marginTop = (height/2)+'px';

function parametro_url(){
    let url = location.search.split("=");
    console.log(url)
    let value = url[1];
    while(value.indexOf("%20")>-1)
        value = value.replace("%20"," ");    
    $('#input').val(value);
    add_btn_filter("li_cidades",value);
}

function moverMenu(distMenu, distBody) {
    $('.menu').animate({left: distMenu + "px"}, 200);
    $('body').animate({left: distBody + "px"}, 200);
}

$(document).ready(function(){
    $('.icon-menu').click(() => { moverMenu(0, 350) });
    $('#btn_fechar').click(() => { moverMenu(-350, 0) });
    $("#btn_cidade").click(function(){add_lista_checkBox("checks_boxs_cidades.php","#li_cidades");});
    $("#btn_classificacao").click(function(){add_lista_checkBox("checks_boxs_classificacao.php","#li_classificacao");});
    $("#btn_acomodidade").click(function(){add_lista_checkBox("checks_boxs_acomodidades.php","#li_acomidades");});
    parametro_url();
});

function add_lista_checkBox(arquivo,local){
    if($(local).html().length != 0) return $(local).html("");
    let btns = document.querySelector("#barra_btn_filter").children;
                
    $.ajax({
        url: 'php/menu_lateral/'+arquivo,     
        type: 'POST',
        dataType: 'html',
        success: function(msg){$(local).html(function(){return msg});}
    });
       
    setTimeout(function(){ 
        $("input[type=checkbox]").click(function(){
            
            if( $(this).is(':checked') ){
                let path = $(this).parent().parent().parent().get( 0 ).id;
                add_btn_filter(path,$(this).val());
            }else{
                for (var i = 0; i < btns.length; i++){
                    if(btns[i].name == this.value)
                        document.querySelector("#"+btns[i].id).remove();
                        console.log()  
                } 
            }                             
        });
        for (var i = 0; i < btns.length; i++){
            check_input(document.querySelector("#li_cidades").children,btns[i].name,true);
            check_input(document.querySelector("#li_classificacao").children,btns[i].name,true);
            check_input(document.querySelector("#li_acomidades").children,btns[i].name,true);
        }

        }, 200);    

    if(local!="#li_cidades") $("#li_cidades").html("");        
    if(local!="#li_classificacao") $("#li_classificacao").html("");
    if(local!="#li_acomidades") $("#li_acomidades").html("");      
}

function add_btn_filter(path,value){

    path =  (path == "li_classificacao") ? "php/barra_de_filtros/btn_classificacao.php" : 
       "php/barra_de_filtros/btn_city.php";  
    
    $.ajax({
            url: path,       
            type: 'POST',
            dataType: 'html',
            data:{key : value},
            success: function(msg){
                document.querySelector("#barra_btn_filter").innerHTML += msg; }
            }   
    );

    setTimeout(function(){ 
        $(".btn_divKeys").click(function(){
            document.getElementById(this.id).remove();
            check_input(document.querySelector("#li_cidades").children,this.name,false);
            check_input(document.querySelector("#li_classificacao").children,this.name,false);
            check_input(document.querySelector("#li_acomidades").children,this.name,false);
    }); }, 200);
}  

function check_input(object,name,value){
    for (var i = 0; i < object.length; i++) {
         let input = object[i].children[0].children[0].value;
         if(input == name)
             object[i].children[0].children[0].checked = value;      
     }
}
