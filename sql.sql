create schema bdcrud;

use bdcrud;

create table vendedores(
	
    id int (11) not null primary key auto_increment, 
	nome varchar(100) not null,
    sobrenome varchar(100) not null,
    email varchar(80) not null,
    cep varchar(20) not null,
    rua varchar(50) not null,
    bairro varchar (50) not null,
    cidade varchar (50) not null,
    estado varchar (30) not null,
    numero varchar (10) not null,
    complemento varchar (10) not null

);

select * from vendedores;