    function moverMenu(distMenu, distBody) {

        $('.menu').animate({left: distMenu + "px"}, 175);
        $('body').animate({left: distBody + "px"}, 175);
    }

    function valida_lista(local,arquivo){

        if($(local).html().length != 0){
            $(local).html("");
        }
        else{
            adiciona_checkBox(arquivo,local);
            fecha_divs(local);
        } 
        

    }

    function adiciona_checkBox(arquivo,local){

        $.ajax({
            url: arquivo,     
            type: 'POST',
            dataType: 'html',
            success: 
                function(msg){
                    $(local).html(() => { return msg; 
                        
                });
                adiciona_evento_checkBox();
                validar_valores_dos_checkBoxs();
            }
        });  

    }

    function adiciona_evento_checkBox(){

        $("input[type=checkbox]").click(function(){

            if( $(this).is(':checked') ){
                let path = $(this).parent().parent().parent().parent().get( 0 ).id;
                add_btn_filter(path,$(this).val(),$(this).attr('name'));

            } 
            else {
                    let btns = document.querySelector("#barra_btn_filter").children; //OBTEM TODOS OS BOTOES QUE ESTAM NA BARRA
                    for (var i = 0; i < btns.length; i++){
                        //console.log("id"+btns[i].id+" value:"+this.value + " Name:"+this.name);
                        if(btns[i].id == this.value || btns[i].id == this.name){

                            document.querySelector("button[id='"+btns[i].id+"']").remove();
                            setTimeout(searchDataBase(),200);  
                        }
                    } 
                }
                                        
        });
    }

    function validar_valores_dos_checkBoxs(){
        let btns = document.querySelector("#barra_btn_filter").children; //OBTEM TODOS OS BOTOES QUE ESTAM NA BARRA

        for (var i = 0; i < btns.length; i++)
        {
            if(btns[i].name == "cidade"){
                compara_checkBox_com_btn(document.querySelector("#li_cidades").children, btns[i].id, true);
            }
            if(btns[i].name == "classificação"){
                compara_checkBox_com_btn(document.querySelector("#li_classificacao").children, btns[i].id, true);
            }
            if(btns[i].name == "acomodidades"){
                compara_checkBox_com_btn(document.querySelector("#li_acomidades").children, btns[i].id, true);
            }
            if(btns[i].name == "buscador"){
                compara_checkBox_com_btn(document.querySelector("#li_cidades").children, btns[i].id, true);

                
            }
        }
    }

    function fecha_divs(local){
        if(local != "#li_cidades") $("#li_cidades").html("");        
        if(local != "#li_classificacao") $("#li_classificacao").html("");
        if(local != "#li_acomidades") $("#li_acomidades").html("");
    }

    // Quando a lista for adicionada, se houver algum botão ele ira comparar com o checkboxs se for o mesmo valor ira deixar checked 
    // o checkbox com o mesmo valor que o botão
    function compara_checkBox_com_btn(object,valor,value){

        name = name.indexOf(' ') > -1 ? name.replace(" ","_") : name;
        
        for (let i = 0; i < object.length; i++){
            
            let id = object[i].children[0].children[0].children[0].value;
            //console.log("ID:"+id +" Valor:"+valor);
            if(id == valor){
                object[i].children[0].children[0].children[0].checked = value;
            }
            let name = object[i].children[0].children[0].children[0].name;
            //console.log("Name:"+name +" Valor:"+valor);
            if(name == valor){
                object[i].children[0].children[0].children[0].checked = value;
            }         
        }
    }

