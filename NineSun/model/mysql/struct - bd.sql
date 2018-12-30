create database baixada_hoteis DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
use baixada_hoteis;

create table gods(
id int auto_increment not null,
nome varchar(50) ,
senha varchar(255),
primary key(id)
);

insert into gods (nome,senha) values('thanatos','3a7123aeefb75817b9ad389074643277');
insert into gods (nome,senha) values('nineSuper','c8c605999f3d8352d7bb792cf3fdb25b');
insert into gods (nome,senha) values('rodrigo','6a58d7f194ffed9b51235a0bbba0e660');


#SELECT nome FROM gods WHERE senha = '3a7123aeefb75817b9ad389074643277';

create table hoteis(
id int auto_increment not null,
nome varchar(75) not null,
endereco varchar(140) not null,
telefone varchar(30) not null,
website varchar(100) not null default "",
email varchar(100) not null default "",
classificacao int default 0,
id_cidade int not null,
img_A varchar(50),
img_B varchar(50),
img_C varchar(50),
img_D varchar(50),
img_E varchar(50),
primary key(id),
foreign key(id_cidade) references cidades(id)
);

#INSERT INTO (nome,endereco,telefone,website,email,classificacao,id_cidade,img_A,img_B,img_C,img_D,img_E) VALUES();

create table cidades(
id int auto_increment not null,
cidade varchar(50),
primary key(id));

insert into cidades(cidade) values ('Bertioga'); 
insert into cidades(cidade) values ('Cubatão'); 
insert into cidades(cidade) values ('Guarujá'); 
insert into cidades(cidade) values ('Itanhaém'); 
insert into cidades(cidade) values ('Mongaguá'); 
insert into cidades(cidade) values ('Peruíbe'); 
insert into cidades(cidade) values ('Praia Grande'); 
insert into cidades(cidade) values ('Santos'); 
insert into cidades(cidade) values ('São Vicente');



create table tipos_de_servicos(
id int auto_increment,
tipo varchar(50) not null,
img varchar(50),
primary key(id)
);

#UPDATE tipos_de_servicos SET tipo = 'ar-condicionadoA',img = 'img/acomodidades/arcondicionado.jpg' where id = '1' ;
#DELETE FROM tipos_de_servicos  where id = '';

#INSERT INTO servicos (servico_A,servico_B,servico_C,servico_D,servico_E,servico_F,servico_G,servico_H,servico_I,servico_J,
#servico_K,servico_L,servico_M,servico_N,servico_O) VALUES ('');

/*
SELECT tipo AS servico_A,tipo AS servico_B,tipo AS servico_C,tipo AS servico_D,tipo AS servico_E
		,tipo AS servico_F,tipo AS servico_G,tipo AS servico_H,tipo AS servico_I,tipo AS servico_J
        ,tipo AS servico_K,tipo AS servico_L,tipo AS servico_M,tipo AS servico_N,tipo AS servico_O
        FROM servicos 
	JOIN tipos_de_servicos 
		ON servicos.servico_A = tipos_de_servicos.id;
        
        
SELECT tipo From tipos_de_servicos;        



*/
#UPDATE servicos SET servico_A = '', servico_B = '', servico_C = '', servico_D = '', servico_E = '', servico_F = '', servico_G = '', servico_H = '', 
#servico_I = '', servico_J = '', servico_K = '', servico_L = '', servico_M = '', servico_N = '', servico_O  = '' WHERE id = '' ;  
#SELECT * FROM servicos;
create table servicos(
id int auto_increment not null,
servico_A int default 0,
servico_B int default 0,
servico_C int default 0,
servico_D int default 0,
servico_E int default 0,
servico_F int default 0,
servico_G int default 0,
servico_H int default 0,
servico_I int default 0,
servico_J int default 0,
servico_K int default 0,
servico_L int default 0,
servico_M int default 0,
servico_N int default 0,
servico_O int default 0,
primary key(id),
foreign key(servico_A) references tipos_de_servicos(id),
foreign key(servico_B) references tipos_de_servicos(id),
foreign key(servico_C) references tipos_de_servicos(id),
foreign key(servico_D) references tipos_de_servicos(id),
foreign key(servico_E) references tipos_de_servicos(id),
foreign key(servico_F) references tipos_de_servicos(id),
foreign key(servico_G) references tipos_de_servicos(id),
foreign key(servico_H) references tipos_de_servicos(id),
foreign key(servico_I) references tipos_de_servicos(id),
foreign key(servico_F) references tipos_de_servicos(id),
foreign key(servico_G) references tipos_de_servicos(id),
foreign key(servico_H) references tipos_de_servicos(id),
foreign key(servico_I) references tipos_de_servicos(id),
foreign key(servico_J) references tipos_de_servicos(id),
foreign key(servico_K) references tipos_de_servicos(id),
foreign key(servico_L) references tipos_de_servicos(id),
foreign key(servico_M) references tipos_de_servicos(id),
foreign key(servico_N) references tipos_de_servicos(id),
foreign key(servico_O) references tipos_de_servicos(id)
);

#select * from tipos_de_servicos;
SELECT * FROM servicos;
