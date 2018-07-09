use baixada_hoteis;

insert into hoteis(nome,id_tipo,endereco,telefone,website,email,id_servico,classificao,id_cidade,id_img)
values('Parque Balneário',1,' Avenida Dona Ana Costa, 555 - Gonzaga','11060-003','http://parquebalneario.com.br/','',1,9,1,0);

select * from hoteis;

select hoteis.id,nome,tipo,endereco,telefone,website,email,id_servico,classificao,cidade,id_img from hoteis  
join tipos ON id_tipo = tipos.id 
join cidades ON id_cidade =cidades.id where cidade='santos';



insert into tipos(tipo) values ('hotel');
insert into tipos(tipo) values ('pousada');

select * from tipos;

#

insert into cidades(cidade) values ('santos');
insert into cidades(cidade) values ('sao vicente');
insert into cidades(cidade) values ('são paulo');

select * from cidades;

#

insert into servicos (wifi_quartos,wifi_lobby,psicina,estacionamento,academia,spa,bar_no_hotel,restaurante,pet_permitidos)
values (1,1,1,1,1,2,1,1,1);

select * from servicos;

#

insert into respostas (resposta) values ('sim');
insert into respostas (resposta) values ('não');
insert into respostas (resposta) values ('oculto');

select * from respostas;

