    $(document).ready(function(){
        $('#btn_open_menu').click(() => { 
            moverMenu(0, 350);
            
        });
        $('#btn_close_menu').click(() => { 
            moverMenu(-350, 0); 
        }); 
        
        $("#btn_cidade").click(() =>{
            valida_lista("#li_cidades","../controller/checks_boxs_cidades.php");
            
        });
        $("#btn_classificacao").click(() =>{
            valida_lista("#li_classificacao","../controller/checks_boxs_classificacao.php");
        });
        $("#btn_acomodidade").click(() =>{
            valida_lista("#li_acomidades","../controller/checks_boxs_acomodidades.php");
        });
        
        parametro_url();
    });  

    function parametro_url(){
        let value = document.getElementsByName('palavra-chave');
        value = value[0].value;
        if(value != undefined && value != "")
        {
            add_btn_filter("search",value,value);
        }
    }


    function add_btn_filter(path,value,text){
        
            if(path == "li_classificacao")
            {
                nome = "classificação";
            }
            if(path == "li_cidades")
            {
                nome = "cidade";
            }
            if(path == "li_acomidades")
            {
                nome = "acomodidades";
            }
            if(path == "search")
            {
                nome = "buscador";
            }


            value = value.indexOf('_') > -1 ? value.replace("_"," ") : value;
        
            $.ajax({
                url:  "../controller/btn.php",       
                type: 'POST',
                dataType: 'html',
                data:
                {
                    key : value,
                    tipo : nome,
                    content:text
                },
                
                success: function(msg){
                    document.querySelector("#barra_btn_filter").innerHTML += msg;
                    searchDataBase();
                    $(".btn_divKeys").click(function(){
                        let id = this.id;
                        let name = this.name;
                        document.querySelector("button[id='"+id+"']").remove();
                        setTimeout(searchDataBase(),200);
                        compara_checkBox_com_btn(document.querySelector("#li_cidades").children,id,false);
                        compara_checkBox_com_btn(document.querySelector("#li_classificacao").children,id,false);
                        compara_checkBox_com_btn(document.querySelector("#li_acomidades").children,id,false);
                        
                }); }
            });
        
     
    }  




    function searchDataBase(){
        $('#coluna_grid').innerHTML = "";
        let city = ['bug_php']; let clas = ['bug_php']; let acom = ['bug_php']; let keyword = ['bug_php'];
        let btns = document.querySelector("#barra_btn_filter").children;
        
        for (let index = 0; index < btns.length; index++) {
            
            if(btns[index].name == "classificação")
            {
                clas.push(btns[index].id);
            }
            if(btns[index].name == "cidade")
            {
                city.push(btns[index].id);
            }
            if(btns[index].name == "acomodidades")
            {
                acom.push(btns[index].id);
            }
            if(btns[index].name == "buscador")
            {
                keyword.push(btns[index].textContent);
            }
        }

        $.ajax({
            url: '../controller/buscarHoteis.php',        
            type: 'GET',
            dataType: 'html',

            data:{cidade:city, classificacao:clas, acomodidade:acom, keyword : keyword},
            success: function(msg){   
                $('#coluna_grid').html(function(){return msg});
                colocarEventoGrid();
            }    
        });
    }

    function colocarEventoGrid(){
        $(".btn_plus_info").click(function(event) 
        {    
            let row_grid = $(this).parent().parent().parent();
            let array = row_grid.children();
            let sub_menu = array[1];
            let hotel = $(this).parent().parent().parent().children('#grid').children('#informacoes').children().children().children();
            hotel = hotel[0].textContent;
            $(sub_menu).addClass( "col-md-offset-3  col-md-6" );
            $(sub_menu).attr('id','sub_grid');
            let valor = 0;
            
            $.ajax({
                url: '../controller/sub_grid.php',     
                type: 'POST',
                data:{key : hotel, comando:valor},
                dataType: 'html',
                success: function(msg){$("#sub_grid").html(function(){return msg});}
            });
        
            setTimeout(function()
            {
                

                $('#myTabs').click(function (e) 
                {
                    e.preventDefault()
                    $(this).tab('show')
                })

                $('#fotos').click(function (e) 
                {
                    let subGrid =  $(this).parent().parent().children();
                    subGrid = subGrid[1];
                    let valor = 2;
                    $.ajax({
                        url: '../controller/componentes-sub_grid.php',     
                        type: 'POST',
                        data:{key : hotel, comando: valor},
                        dataType: 'html',
                        success: function(msg){ subGrid.innerHTML = msg; }
                    });
                })

                $('#acomodidades').click(function (e) 
                {
                    let subGrid =  $(this).parent().parent().children();
                    subGrid = subGrid[1];
                    let valor = 1
                    $.ajax({
                        url: '../controller/componentes-sub_grid.php',     
                        type: 'POST',
                        data:{key : hotel, comando: valor},
                        dataType: 'html',
                        success: function(msg){subGrid.innerHTML = msg; }
                    });
                })
        
                $('#btn-fechar').click(function (e) 
                {
                    let subGrid =  $(this).parent().parent().parent()[0];
                    $($(this).parent().parent().parent()[0]).removeAttr("id");
                    $($(this).parent().parent().parent()[0]).removeAttr("class");  
                    $(this).parent().parent()[0].remove();   
                });
        
            },200)
        });
    }
    
function removeBarra()
{
    var elemento = $.trim($("#barra_btn_filter").html());
    if (elemento == '')
    {
        $("#barra_btn_filter").hide();
        return true;
    }
    else
    {
        $("#barra_btn_filter").show();
        return false;
    }
}

setInterval(removeBarra, 500);