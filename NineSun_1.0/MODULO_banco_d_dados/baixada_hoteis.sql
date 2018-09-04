create database baixada_hoteis DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
use baixada_hoteis;

create table hoteis(
id int auto_increment not null,
nome varchar(50) not null,
id_tipo int not null,
endereco varchar(140) not null,
telefone varchar(30) not null,
website varchar(100) not null default "",
email varchar(100) not null default "",
id_servico int not null,
classificao int  default 0,
id_cidade int not null,
id_img int ,
primary key(id),
foreign key(id_tipo) references tipos(id),
foreign key(id_cidade) references cidades(id),
foreign key(id_servico) references servicos(id)
);

create table tipos(
id int auto_increment not null,
tipo varchar(50) not null,
primary key(id)
);

create table cidades(
id int auto_increment not null,
cidade varchar(50),
primary key(id));

create table servicos(
id int auto_increment not null,
wifi_nos_quartos int not null,
wifi_no_lobby int not null,
piscina int not null,
estacionamento int not null,
academia int not null,
spa int not null,
bar_no_hotel int not null,
restaurante int not null,
pet_permitidos int not null,
primary key(id),
foreign key(wifi_nos_quartos) references respostas(id),
foreign key(wifi_no_lobby) references respostas(id),
foreign key(piscina) references respostas(id),
foreign key(estacionamento) references respostas(id),
foreign key(academia) references respostas(id),
foreign key(spa) references respostas(id),
foreign key(bar_no_hotel) references respostas(id),
foreign key(restaurante) references respostas(id),
foreign key(pet_permitidos) references respostas(id));


create table respostas(
id int auto_increment not null,
resposta varchar(50),
primary key(id));