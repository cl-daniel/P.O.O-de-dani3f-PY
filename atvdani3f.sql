create database if not exists banco;
use banco;

create table if not exists Áreas (
id int auto_increment primary key,
nome varchar(100) not null
);

create table if not exists Trabalhadores (
id int auto_increment primary key,
nome varchar(100) not null,
idade int,
área_id int,
foreign key(área_id) references Áreas(id)
);

insert into Áreas (nome) values
('Administrativo'),
('Suporte'),
('Auxiliar');

insert into Trabalhadores (nome, idade, área_id) values
('Lucas', 29, 1),
('Ana', 19, 2),
('Eduardo', 40, 2);

select
	Trabalhadores.nome as Nome_trabalhador,
    Trabalhadores.idade,
    Áreas.nome as Nome_área
    from Trabalhadores
    join Áreas on Trabalhadores.área_id = área.id;
    
    select
    Áreas.nome as área,
    count(Trabalhadores.id) as Total_Trabalhadores
    from Áreas
    left join Trabalhadores on áreas.id = Trabalhadores.área_id
    group by Áreas.nome;
    
    select
		Trabalhadores.nome as Nome_trabalhador
        from Trabalhadores
        join Áreas on Trabalhadores.curso_id = áreas.id
        where áreas.nome = 'informática';
        