use baixada_hoteis;

#select nome,telefone,endereco,email,cidade from hoteis where cidade = (select cidade from hoteis 
#join cidades ON id_cidade = cidades.id); 

#select cidade from hoteis join cidades ON id_cidade = cidades.id where cidade = 'Santos';

#select hoteis.id,cidade from hoteis join cidades ON id_cidade = cidades.id where cidades.id = 8;

#select cidade from hoteis join cidades ON id_cidade = cidades.id ;
 

#select hoteis.id,nome,tipo,endereco,telefone,website,email,id_servico,classificao,cidade,id_img from hoteis  
#join tipos ON id_tipo = tipos.id 
#join cidades ON id_cidade = cidades.id 
#where tipo = 'Hotel';

#select * from cidades where cidade = 'Bertioga' ;

#

insert into tipos(tipo) values ('hotel');
insert into tipos(tipo) values ('pousada');

select * from tipos;

#

insert into cidades(cidade) values (' Bertioga '); 
insert into cidades(cidade) values (' Cubatão '); 
insert into cidades(cidade) values (' Guarujá '); 
insert into cidades(cidade) values (' Itanhaém '); 
insert into cidades(cidade) values (' Mongaguá '); 
insert into cidades(cidade) values (' Peruíbe '); 
insert into cidades(cidade) values (' Praia Grande '); 
insert into cidades(cidade) values (' Santos '); 
insert into cidades(cidade) values (' São Vicente ');

select * from cidades where id = 1;
select * from cidades where cidade = 'Bertioga';

#

select * from servicos;

#

insert into respostas (resposta) values ('sim');
insert into respostas (resposta) values ('não');
insert into respostas (resposta) values ('oculto');

select * from respostas where resposta = 'sim';

