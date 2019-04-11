drop database if exists gremio; create database gremio default character set utf8 default collate utf8_general_ci;
use gremio;
create table usuarios  (
  id int primary key auto_increment not null,
  nome varchar(40) not null,
  sobrenome varchar(45) not null,
  cidade varchar(45) not null,
  email varchar(50) not null unique,
  matricula varchar(20) not null,
  senha varchar(255) not null
) default charset=utf8; 