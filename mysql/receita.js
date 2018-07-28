//"insert into cidades(cidade) values ('santos');"

//"insert into tipos(tipo) values ('hotel');"

/*
-Tipos
ID	1-Hotel
ID	2-Pousada
ID	3-Resort
ID	4-Hotel-Fazenda
ID	5-Cama e Café
ID	6-Hotel-Histórico
ID	7-Flat/Apart-Hotel

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
/* Cópia
hoteis[1] = [hotel.nome = "" ,hotel.id_tipo = "" , hotel.endereco = "" , hotel.telefone = "" , 
			hotel.website = "" , hotel.email = "" , hotel.id_servico = "" , hotel.classificao = "" ,
			hotel.id_cidade = "" , hotel.id_img = "" ]

servicos[1] = [servico.wifi_quartos = "" , servico.wifi_lobby = "" , servico.psicina = "" , servico.estacionamento = "" ,
			servico.academia = "" , servico.spa = "" , servico.bar_no_hotel = "" , servico.restaurante = "" , servico.pet_permitidos = ""] 
*/

hoteis[106] = [hotel.nome = "Dom Bosco Praia" ,hotel.id_tipo = "1" , hotel.endereco = "Avenida Governador Mário Covas Júnior, 358, Itanhaém/SP, CEP 17400-000, Brasil" , hotel.telefone = "(13)3425-2759" , 
			hotel.website = "http:domboscopraiahotel.kit.net" , hotel.email = "andersondombosco@hotmail.com" , hotel.id_servico = "106" , hotel.classificao = "2" ,
			hotel.id_cidade = "4" , hotel.id_img = "" ]

servicos[106] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "1" , servico.psicina = "2" , servico.estacionamento = "1" ,
			servico.academia = "2" , servico.spa = "2" , servico.bar_no_hotel = "2" , servico.restaurante = "1" , servico.pet_permitidos = "2"] 



hoteis[107] = [hotel.nome = "Hotel Marinas" ,hotel.id_tipo = "1" , hotel.endereco = "Praça 22 de Abril, N° 38, Centro – Itanhaém/SP, CEP : 11740-000, Brasil" , hotel.telefone = "(13)3422-4777" , 
			hotel.website = "http://www.marinasparkhotel.com.br" , hotel.email = "contato@marinasparkhotel.com.br" , hotel.id_servico = "107" , hotel.classificao = "" ,
			hotel.id_cidade = "4" , hotel.id_img = "" ]
			//Classificação desconhecida

servicos[107] = [servico.wifi_quartos = "1" , servico.wifi_lobby = "1" , servico.psicina = "1" , servico.estacionamento = "1" ,
			servico.academia = "2" , servico.spa = "2" , servico.bar_no_hotel = "2" , servico.restaurante = "1" , servico.pet_permitidos = "3"] 



hoteis[108] = [hotel.nome = "Hotel Miami" ,hotel.id_tipo = "1" , hotel.endereco = "" , hotel.telefone = "" , 
			hotel.website = "hotelpousadapantanal.com.br" , hotel.email = "" , hotel.id_servico = "108" , hotel.classificao = "" ,
			hotel.id_cidade = "" , hotel.id_img = "" ] //https://www.tripadvisor.com.br/Hotel_Review-g780029-d6746859-Reviews-Miami_Hotel-Itanhaem_State_of_Sao_Paulo.html

servicos[108] = [servico.wifi_quartos = "" , servico.wifi_lobby = "" , servico.psicina = "" , servico.estacionamento = "" ,
			servico.academia = "" , servico.spa = "" , servico.bar_no_hotel = "" , servico.restaurante = "" , servico.pet_permitidos = ""] 



hoteis[109] = [hotel.nome = "Hotel Pousada Pantanal" ,hotel.id_tipo = "1" , hotel.endereco = "R. Eduardo Pedro Mariano, 465 - Praia dos Sonhos, Itanhaém - SP, 11740-000, Brasil" , hotel.telefone = "(13)3422-3292" , 
			hotel.website = "" , hotel.email = "" , hotel.id_servico = "109" , hotel.classificao = "2" ,
			hotel.id_cidade = "4" , hotel.id_img = "" ] //Hotel Pousada. Hotel ?? ou Pousada ?? E-mail apenas através do site

servicos[109] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "1" , servico.psicina = "1" , servico.estacionamento = "1" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "1" , servico.pet_permitidos = "3"] 



hoteis[110] = [hotel.nome = "Rial Hotel" ,hotel.id_tipo = "1" , hotel.endereco = "164 Rua João M Ferreira hotel, Itanhaém, CEP 11740-000, Brasil" , hotel.telefone = "(13)3422-2411" , 
			hotel.website = "rialhotel.com.brrialindex_rial.php" , hotel.email = "rialhotel@rialhotel.com.br" , hotel.id_servico = "110" , hotel.classificao = "" ,
			hotel.id_cidade = "4" , hotel.id_img = "" ]//Classificação Desconhecida

servicos[110] = [servico.wifi_quartos = "1" , servico.wifi_lobby = "1" , servico.psicina = "1" , servico.estacionamento = "1" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "1" , servico.pet_permitidos = "2"] 



hoteis[111] = [hotel.nome = "San Marino Hotel" ,hotel.id_tipo = "" , hotel.endereco = "Av. Roberto Iwakichi Uraguchi, nº 99 - Praia do Sonho, Itanhaém-SP" , hotel.telefone = "(13)3426-3314" , 
			hotel.website = "http://sanmarinohotel.tur.br/local.html" , hotel.email = "sanmarinohotel@uol.com.br" , hotel.id_servico = "111" , hotel.classificao = "2" ,
			hotel.id_cidade = "4" , hotel.id_img = "" ]

servicos[111] = [servico.wifi_quartos = "2" , servico.wifi_lobby = "1" , servico.psicina = "1" , servico.estacionamento = "1" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "1" , servico.pet_permitidos = "1"] 			


//MONGAGUÁ


hoteis[112] = [hotel.nome = "Hotel Mongaguá" ,hotel.id_tipo = "1" , hotel.endereco = "Av. São Paulo, 1536 - Centro - Mongaguá - SP - 11730-000 " , hotel.telefone = "(13)3448-1566" , 
			hotel.website = "http://www.hotelmongagua.com.br" , hotel.email = "" , hotel.id_servico = "112" , hotel.classificao = "" ,
			hotel.id_cidade = "5" , hotel.id_img = "" ]//e-mail e classificação desconhecidos

servicos[112] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "3" , servico.psicina = "2" , servico.estacionamento = "1" ,
			servico.academia = "2" , servico.spa = "3" , servico.bar_no_hotel = "2" , servico.restaurante = "2" , servico.pet_permitidos = "3"]



hoteis[113] = [hotel.nome = "De Maria Flat" ,hotel.id_tipo = "1" , hotel.endereco = "" , hotel.telefone = "3446-2026" , 
			hotel.website = "demaria.cim.br" , hotel.email = "" , hotel.id_servico = "113" , hotel.classificao = "" ,
			hotel.id_cidade = "5" , hotel.id_img = "" ]//Hotel Fantasma

servicos[113] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "3" , servico.psicina = "3" , servico.estacionamento = "3" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "3" , servico.pet_permitidos = "3"]



hoteis[114] = [hotel.nome = "Dom Gambini Parque Hotel" ,hotel.id_tipo = "4" , hotel.endereco = "Estrada Da Moenda, S/Nr | Sítio Do Meio, Mongaguá, Estado de São Paulo 11740-000, Brasil" , hotel.telefone = "(13)3424-3000" , 
			hotel.website = "" , hotel.email = "hotel@domgambini.com.br" , hotel.id_servico = "114" , hotel.classificao = "" ,
			hotel.id_cidade = "5" , hotel.id_img = "" ]

servicos[114] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "3" , servico.psicina = "1" , servico.estacionamento = "3" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "1" , servico.pet_permitidos = "3"]



hoteis[115] = [hotel.nome = "Hotel Basílio" ,hotel.id_tipo = "1" , hotel.endereco = "Av. Tiradentes, nº 8.501, Agenor de Campos - Mongaguá - SP" , hotel.telefone = "(13)3446-1207" , 
			hotel.website = "https://www.hotelbasilio.com.br" , hotel.email = "contatohotelbasilio@gmail.com" , hotel.id_servico = "115" , hotel.classificao = "" ,
			hotel.id_cidade = "5" , hotel.id_img = "" ]

servicos[115] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "1" , servico.psicina = "" , servico.estacionamento = "1" ,
			servico.academia = "2" , servico.spa = "2" , servico.bar_no_hotel = "3" , servico.restaurante = "1" , servico.pet_permitidos = "2"] 



hoteis[116] = [hotel.nome = "Hotel Beira Mar" ,hotel.id_tipo = "" , hotel.endereco = "Av. Gov. Mário Covas Júnior, 5100 - Vila Atlântica, Mongaguá - SP, 11730-000" , hotel.telefone = "(13)3448-5844" , 
			hotel.website = "" , hotel.email = "" , hotel.id_servico = "116" , hotel.classificao = "" ,
			hotel.id_cidade = "5" , hotel.id_img = "" ]

servicos[116] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "3" , servico.psicina = "3" , servico.estacionamento = "3" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "1" , servico.pet_permitidos = "1"]



hoteis[117] = [hotel.nome = "Hotel Gaivota" ,hotel.id_tipo = "1" , hotel.endereco = "Rua Padre José De Anchieta, 750" , hotel.telefone = "(13)3448-1534" , 
			hotel.website = "" , hotel.email = "" , hotel.id_servico = "117" , hotel.classificao = "" ,
			hotel.id_cidade = "5" , hotel.id_img = "" ]

servicos[117] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "3" , servico.psicina = "3" , servico.estacionamento = "3" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "3" , servico.pet_permitidos = "3"]



hoteis[118] = [hotel.nome = "Hotel Irah Mar" ,hotel.id_tipo = "1" , hotel.endereco = "Avenida do Mar 6020 | Vl Oceanopolis, Mongaguá, Estado de São Paulo 11730-000, Brasil" , hotel.telefone = "(13)3448-5438" , 
			hotel.website = "" , hotel.email = "irahmarhotel@terra.com.br" , hotel.id_servico = "118" , hotel.classificao = "" ,
			hotel.id_cidade = "5" , hotel.id_img = "" ]

servicos[118] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "3" , servico.psicina = "3" , servico.estacionamento = "3" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "3" , servico.pet_permitidos = "3"] 



hoteis[119] = [hotel.nome = "Lider Hotel" ,hotel.id_tipo = "1" , hotel.endereco = "	RUA PORTO ALEGRE, 149, 	VILA SÃO PAULO, MONGAGUÁ / SP" , hotel.telefone = "(13)3448-1467" , 
			hotel.website = "" , hotel.email = "" , hotel.id_servico = "119" , hotel.classificao = "" ,
			hotel.id_cidade = "5" , hotel.id_img = "" ]

servicos[119] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "3" , servico.psicina = "3" , servico.estacionamento = "3" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "3" , servico.pet_permitidos = "3"]



hoteis[120] = [hotel.nome = "Pousada dos Girassóis" ,hotel.id_tipo = "2" , hotel.endereco = "Rua Equador 70, Itanhaém, São Paulo - 11740-000, Brasil" , hotel.telefone = "(13)3446-1919" , 
			hotel.website = "pousadagirassois.com.br" , hotel.email = "" , hotel.id_servico = "120" , hotel.classificao = "" ,
			hotel.id_cidade = "4" , hotel.id_img = "" ]

servicos[120] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "3" , servico.psicina = "3" , servico.estacionamento = "3" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "3" , servico.pet_permitidos = "3"] 



hoteis[121] = [hotel.nome = "Pousada Na Ativa" ,hotel.id_tipo = "2" , hotel.endereco = "Avenida São Paulo, 10, .200, Flórida Mirim, Mongaguá - SP, CEP: 11730-000 " , hotel.telefone = "(13)3506-3486" , 
			hotel.website = "" , hotel.email = "" , hotel.id_servico = "121" , hotel.classificao = "" ,
			hotel.id_cidade = "5" , hotel.id_img = "" ]

servicos[121] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "3" , servico.psicina = "3" , servico.estacionamento = "3" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "3" , servico.pet_permitidos = "3"]



hoteis[122] = [hotel.nome = "Pousada Paraíso Oasis" ,hotel.id_tipo = "2" , hotel.endereco = "Avenida Dom Pedro I 2295 | Balneário Agenor de Campos, Mongaguá, Estado de São Paulo 11730-000, Brasil" , hotel.telefone = "(13)3446-1035" , 
			hotel.website = "" , hotel.email = "" , hotel.id_servico = "122" , hotel.classificao = "" ,
			hotel.id_cidade = "5" , hotel.id_img = "" ]

servicos[122] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "1" , servico.psicina = "1" , servico.estacionamento = "1" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "1" , servico.pet_permitidos = "3"]



hoteis[123] = [hotel.nome = "Pousada Plataforma" ,hotel.id_tipo = "2" , hotel.endereco = "Av. Gov. Mário Covas Júnior, 10240 - Balneário Agenor de Campos, Mongaguá - SP, 11730-000" , hotel.telefone = "(13)3446-1844" , 
			hotel.website = "http://www.pousadaplataforma.com.br/" , hotel.email = "" , hotel.id_servico = "123" , hotel.classificao = "" ,
			hotel.id_cidade = "5" , hotel.id_img = "" ]

servicos[123] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "1" , servico.psicina = "1" , servico.estacionamento = "1" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "1" , servico.pet_permitidos = "3"] 



hoteis[124] = [hotel.nome = "2" ,hotel.id_tipo = "POUSADA VERA CRUZ" , hotel.endereco = "Rua Bruna Tamagnini de Souza 40 | Vera Cruz, Mongaguá, Estado de São Paulo 11730-000, Brasil" , hotel.telefone = "(13)3448-5238" , 
			hotel.website = "" , hotel.email = "" , hotel.id_servico = "124" , hotel.classificao = "" ,
			hotel.id_cidade = "5" , hotel.id_img = "" ]

servicos[124] = [servico.wifi_quartos = "3" , servico.wifi_lobby = "3" , servico.psicina = "3" , servico.estacionamento = "3" ,
			servico.academia = "3" , servico.spa = "3" , servico.bar_no_hotel = "3" , servico.restaurante = "3" , servico.pet_permitidos = "3"] 