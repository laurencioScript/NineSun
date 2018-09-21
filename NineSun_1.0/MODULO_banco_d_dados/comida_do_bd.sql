use baixada_hoteis;
/*


select id,nome from hoteis where nome like 'h%';

select hoteis.id,nome,tipo,endereco,telefone,website,email,id_servico,classificao,cidade,id_img from hoteis  
join tipos ON id_tipo = tipos.id 
join cidades ON id_cidade =cidades.id ;






SELECT nome FROM hoteis WHERE nome LIKE 's%'  
UNION
SELECT cidade FROM hoteis join cidades ON id_cidade =cidades.id  WHERE cidade Like 's%' limit 5 ;

select * from hoteis;

SELECT nome,endereco,telefone,website,classificao,cidade FROM hoteis join cidades ON id_cidade = cidades.id join servicos ON id_servico = servicos.id 
WHERE cidade IN ('Bertioga');


select nome,endereco,telefone,website,classificao,cidade from hoteis  
join cidades ON id_cidade = cidades.id 
join servicos ON id_servico = servicos.id  where wifi_nos_quartos = 1;
*/


SELECT nome,endereco,telefone,website,classificao,cidade FROM hoteis join cidades ON id_cidade = cidades.id join servicos ON id_servico = servicos.id 
WHERE classificao = '2';

insert into tipos(tipo) values ('hotel');
insert into tipos(tipo) values ('pousada');


insert into cidades(cidade) values ('Bertioga'); 
insert into cidades(cidade) values ('Cubatão'); 
insert into cidades(cidade) values ('Guarujá'); 
insert into cidades(cidade) values ('Itanhaém'); 
insert into cidades(cidade) values ('Mongaguá'); 
insert into cidades(cidade) values ('Peruíbe'); 
insert into cidades(cidade) values ('Praia Grande'); 
insert into cidades(cidade) values ('Santos'); 
insert into cidades(cidade) values ('São Vicente');

select * from cidades;
select * from cidades where cidade = ' Santos ';
#



select * from servicos;

#

insert into respostas (resposta) values ('sim');
insert into respostas (resposta) values ('não');
insert into respostas (resposta) values ('oculto');

select * from respostas;

