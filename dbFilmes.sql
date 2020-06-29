
create database dbFilmes;

use dbFilmes;

create table tbFilmes(
nome varchar(100) ,
genero varchar(100) ,
sinopse varchar(100));

INSERT INTO tbFilmes (nome, genero, sinopse) VALUES 
('Velozes e Furiosos ', 'acao', 'Filme de corrida'),
('Velozes e Furiosos 2', 'acao', 'Filme de corrida');

select * from tbFilmes;