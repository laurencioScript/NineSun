$(document).ready(function(){
    $('.icon-menu').click(() => { moverMenu(0, 350) });
    $('#btn_fechar').click(() => { moverMenu(-350, 0) });
    $("#btn_cidade").click(function(){add_lista_checkBox("checks_boxs_cidades.php","#li_cidades");});
    $("#btn_classificacao").click(function(){add_lista_checkBox("checks_boxs_classificacao.php","#li_classificacao");});
    $("#btn_acomodidade").click(function(){add_lista_checkBox("checks_boxs_acomodidades.php","#li_acomidades");});
    parametro_url();
    
});

function add_lista_checkBox(arquivo,local){
    //SE O LOCAL JA TIVER VALOR ELE LIMPAR
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
                    if(btns[i].name == this.id)
                        document.querySelector("button[name='"+btns[i].name+"']").remove();
                        setTimeout(searchDataBase(),200);  
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
        searchDataBase();
        $(".btn_divKeys").click(function(){
            document.getElementById(this.id).remove();
            setTimeout(searchDataBase(),200);
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

function parametro_url(){
    let url = location.search.split("=");
    let value = url[1];
    if(value != undefined){
        while(value.indexOf("%20")>-1)
            value = value.replace("%20"," ");    
        $('#input').val(value);
        add_btn_filter("li_cidades",value);
    }
}

function moverMenu(distMenu, distBody) {
    $('.menu').animate({left: distMenu + "px"}, 200);
    $('body').animate({left: distBody + "px"}, 200);
}

function searchDataBase(){
    $('#coluna_grid').innerHTML = "";
    
    let text_city = ['Bertioga','Cubatão','Guarujá','Itanhaém','Mongaguá','Peruibe','Praia Grande','Santos','São Vicente'];
    let text_clas = ['1','2','3','4','5'];
    let text_acom = ['wifi_nos_quartos','wifi_no_lobby','Piscina','Estacionamento','Academia','Spa','bar_no_hotel','Restaurante','pet_permitido'];
    let btns = document.querySelector("#barra_btn_filter").children;
    let city = ['bug_php']; let clas = ['bug_php']; let acom = ['bug_php']; let keyword = ['bug_php'];
    let encontrado = false;
    
    for (var i = 0; i < btns.length; i++) {
        encontrado = false;

        for (var c = 0; c < text_city.length; c++) {
            if(btns[i].name == text_city[c]){
                city.push(btns[i].name);
                encontrado = true;
            }
        
        }
        for (var e = 0; e < 5; e++) {
            if(btns[i].name == e+1){
                clas.push(btns[i].name);
                encontrado = true;
            }     
        }
        for (var a = 0; a < text_acom.length; a++){
            if(btns[i].name == text_acom[a]){
                acom.push(btns[i].name);
                encontrado = true;
            }    
        }
        if(encontrado==false){
            keyword.push(btns[i].name);
        }
    }
   // console.log(city.length+','+clas.length+','+acom.length+','+keyword.length);
    $.ajax({
        url: 'php/Grid/grid.php',        
        type: 'GET',
        dataType: 'html',
        data:{cidade:city, classificacao:clas, acomodidade:acom, keyword : keyword},
        success: function(msg){   
            $('#coluna_grid').html(function(){return msg});
            colocarEventoGrid();}    
    });
}
