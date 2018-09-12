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

/**

insert into hoteis values
(1,'Caiçara Hotel', 1, 'Praça dos Expedicionários, 7, Santos, Estado de São Paulo 11065-500,
 Brasil',' (13) 3284-6798',' caicarahotel.com.br',
 ' reserva@caicarahotel.com.br', 1,'0', 8, 1 );

 */

let id ;
let cidade = 1;
let cont = 0;
let classificao ;


for (var i = 1; i <=900 ; i++) {
	classificao = Math.floor(Math.random() * 5);
	classificao++;
	id = i;
	cont++;
	if(cont == 100){
		cidade++;
		cont ==0;
	}
	let body = document.querySelector("body");
	body.innerHTML += " <br>" + "insert into hoteis values('"+id+"','hotel - "+id+"','1','R. Maria Cristina, 50 - Casqueiro, Cubatão - SP, 11533-160','(13) 3346-5300','https://cbt.ifsp.edu.br','cubatao@ifsp.edu.br','"+id+"','"+classificao+"','"+cidade+"','"+id+"');";

	//body.innerHTML += " <br> insert into imagens values ('"+id+"','/img/hoteis/img_1_A.','/img/hoteis/img_1_B.','/img/hoteis/img_1_C.','/img/hoteis/img_1_D.','/img/hoteis/img_1_E.');"
	console.log(body.innerHTML.length);
	//body.innerHTML += " <br> insert into servicos values ('"+id+"','"+random()+"','"+random()+"','"+random()+"','"+random()+"','"+random()+"','"+random()+"','"+random()+"','"+random()+"','"+random()+"');"

	

}





function random(){
	return (Math.floor(Math.random() * 3) + 1);
}