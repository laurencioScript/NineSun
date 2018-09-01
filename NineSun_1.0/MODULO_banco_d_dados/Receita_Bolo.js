/*
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
*/


for (var i = 0; i <= 202; i++) {
	var hotel = hoteis[i];
	var servico = servicos[i];
	var body = document.querySelector("body");
	if(hotel){
	body.innerHTML += " <br>" + "insert into hoteis(nome, id_tipo, endereco, telefone, website, email, id_servico, classificao, id_cidade, id_img) values('"+hotel[0]+"', "+hotel[1]+", " +
"'" + hotel[2] + "',' " + hotel[3] + "',' " + hotel[4] + "',' " + hotel[5] + "', " + hotel[6] + ", " + hotel[7] + ", " + hotel[8] + ", " + i + " );"}
	
	/*

	if(servico){
	body.innerHTML += " <br> insert into servicos (wifi_quartos,wifi_lobby,psicina,estacionamento,academia,spa,bar_no_hotel,restaurante,pet_permitidos) values ("+ servico[0] + ","+ servico[1] + ","+ servico[2] + ","+ servico[3] + ","+ servico[4] + ","+ servico[5] + ","+ servico[6] + ","+ servico[7] + ","+ servico[8] + ");"

	}
*/
}

console.log(hoteis.length);

/*
for (var i = 0; i <= 202; i++) {
	var servico = servicos[i];
	var label = document.querySelector("#teste");
	if(servico){
		label.innerHTML += " <br>" + "insert into hoteis(nome, id_tipo, endereco, telefone, website, email, id_servico, classificao, id_cidade, id_img) values('"+hotel[0]+"', "+hotel[1]+", " +
	"'"+hotel[2]+"',' " + hotel[3]+"',' " + hotel[4]+"',' " + hotel[5] + "', " + hotel[6] + ", " + hotel[7]+", " + hotel[8]+", " + hotel[9]+"); <br>";
	}	
}
*/

