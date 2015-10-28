
create database susi_bd;

use susi_bd;


create table usuario_campus(
	id int primary key auto_increment,
	nome varchar(50) not null unique,
	senha varchar(64) not null,
	contato varchar(100) not null
);

create table material(
	id int primary key auto_increment,
	campus int not null references usuario_campus(id),
	nome varchar(50) not null,
	quantidade int not null,
	validade date not null,
	indicador int references tipo_indicador(id)
);


create table movimentacao(
	id int primary key auto_increment,
	tipo int not null references tipo_movimentacao(id),
	campus int not null references usuario_campus(id),
	momento timestamp not null,
	antes int not null,
	depois int not null
);


create table tipo_movimentacao(
	id int primary key auto_increment,
	nome varchar(50) not null
);

create table tipo_indicador(
	id int primary key auto_increment,
	nome varchar(25)
);



insert into tipo_movimentacao(nome) values ("Consumo");
insert into tipo_movimentacao(nome) values ("Deterioração");
insert into tipo_movimentacao(nome) values ("Perda");
insert into tipo_movimentacao(nome) values ("Aquisição");
insert into tipo_movimentacao(nome) values ("Outra");

insert into tipo_indicador(nome) values ("Excesso");
insert into tipo_indicador(nome) values ("Carência");
