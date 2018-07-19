
//"insert into cidades(cidade) values ('santos');"

//"insert into tipos(tipo) values ('hotel');"

/*
-Tipos
ID	1-Hotel
ID	2-Pousada

-Cidades
ID	1-Bertioga
ID	2-Cubatão
ID	3-Guarujá
ID	4-Itanhaém
ID	5-Mongaguá
ID	6-Peruíbe
ID	7-Praia Grande
ID	8-Santos
ID	9-São Vicente

-Resposta
ID	1-sim
ID	2-nao
ID	3-oculto

*/

var hoteis = [];
var servicos = [];

var hotel = new Object();
var servico = new Object();

hoteis[1] = [hotel.nome = "" ,hotel.id_tipo = "" , hotel.endereco = "" , hotel.telefone = "" , 
			hotel.website = "" , hotel.email = "" , hotel.id_servico = "" , hotel.classificao = "" ,
			hotel.id_cidade = "" , hotel.id_img = "" ]

servicos[1] = [servico.wifi_quartos = "" , servico.wifi_lobby = "" , servico.psicina = "" , servico.estacionamento = "" ,
			servico.academia = "" , servico.spa = "" , servico.bar_no_hotel = "" , servico.restaurante = "" , servico.pet_permitidos = ""] 


document.write("insert into hoteis(nome,id_tipo,endereco,telefone,website,email,id_servico,classificao,id_cidade,id_img) values('"+hoteis[x][0]+"',"+hoteis[x][1]+"," +
"'"+hoteis[x][2]+"','"+hoteis[x][3]+"','"+hoteis[x][4]+"','"+hoteis[x][5]+"',"+hoteis[x][6]+","+hoteis[x][7]+","+hoteis[x][8]+","+hoteis[x][9]+");");


