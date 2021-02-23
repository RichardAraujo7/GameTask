create database BancoTCC;

use BancoTCC;


create table Jogador (
     codJogador int identity not null primary key,
	 nomeJogador varchar(50) not null,
	 nickJogador varchar(16) unique not null,
	 dataNascJogador date not null,
	 emailJogador varchar(254)unique not null,
	 senhaJogador varchar(16)  not null,
	 cidadeJogador varchar(15) not null,
	 estadoJogador char(2) not null,
	 likesJogador int,
	 descJogador varchar(500),
	 bloqJogador bit not null,
	 FotodePerfil varchar (500),
	 FotodeCapa varchar (500),
	 nSeguidores int,
	 nSeguindo int

	 );

create table Times (
     codTime int identity not null primary key,
	 nomeTime varchar(20)unique not null,
	 emailTime varchar(254) unique not null,
	 senhaTime varchar(16) not null,
	 FotodePerfilTime varchar (500),
	 FotodeCapaTime varchar (500),
	 nomeDono varchar (60) not null,
	 likesTime int,
	 estadoDono char(2),
	 cidadeDono varchar (60),
	 dataNascDono date ,
	 bloqTimes bit not null,
	 nSeguidoresTime int,
	 nSeguindoTime int
	
	 );


create table Jogo (
     codJogo int identity not null primary key,
	 nomeJogo varchar(30) not null,
	 codJogador int constraint fk_codJogador not null,
	 codTime int constraint fk_codTime not null,
	 );

create table Administrador (
    codAdm int identity not null primary key,
	nomeAdm varchar(16) unique not null,
	senhaAdm varchar(16) not null,
	tipouser varchar(20) not null
	);



create table Post (
    codPost int identity not null primary key,
    txtPost varchar(280),
    vidPost varchar(300),
    imgPost varchar(300),
    dataPost smalldatetime not null,
    bloqPost bit not null,
    codJogador int,
    codTime int,
    );

CREATE TABLE esqueciMinhaSenha(
codMinhaSenha int identity not null primary key,
email varchar (200) UNIQUE not null,
codigo int  
)



SELECT emailJogador
FROM Jogador
INNER JOIN esqueciMinhaSenha ON Jogador.emailJogador = esqueciMinhaSenha.email;



SELECT *FROM esqueciMinhaSenha



create table Msg_Jogador (
    codMsgJogador int identity not null primary key,
	codJogador int not null,
	codDestinario int not null,
	codMsg int not null,
	txtMsg varchar 

	 /*foreign key(codMsg) references Mensagem(codMsg),
	 foreign key(codJogador) references Jogador(codJogador)*/
	 );




create table Msg_Time (
    codMsgTime int identity not null primary key,
	codTime int not null,
	codMsg int not null,

	/*foreign key(codTime) references Times(codTime),
	foreign key(codMsg) references Mensagem(codMsg)*/
	);

	create table Mensagem (
    codMsg int not null primary key,
	codDestinatarioJog int,
	codAutor int not null,
	DataMsg smalldatetime not null,
	txtMsg varchar (500) not null,
	codJoga int not null,
	codTimes int not null,
	codDestinatarioTime int

	);

	SELECT codJogador
FROM Jogador
INNER JOIN Mensagem ON Jogador.codJogador = Mensagem.codJoga;
    


select * from Times


CREATE TABLE seguidores(
codSeguidores int identity not null primary key,
Seguidores varchar(200),
Seguindo varchar(200),
);


	
---------------------------------------------------Procedures------------------------------------------------------------------------------------------
create procedure buscarjogadorpornome
@nomeJogador varchar(50)
as
select codJogador as 'Código Jogador' , nomeJogador as 'Nome do Jogador',
dataNascJogador as 'Data de Nascimento',nickJogador as 'Nick',emailJogador as 'E-mail do Jogador',
cidadeJogador as 'Cidade', estadoJogador as 'Estado',likesJogador as 'Likes',descJogador as 'Descrição',
nSeguidores as 'Seguidores',nSeguindo as 'Seguindo',bloqJogador as 'Bloquear'
from Jogador
where nomeJogador like @nomeJogador + '%'


	

create procedure buscatimespornome
@nomeTime varchar(20)
as
select codTime as 'Código Time',nomeTime as 'Nome Time' ,emailTime as 'E-mail Time' , nomeDono as 'Nome Dono', 
dataNascDono as 'Data de Nascimeto do Dono ',estadoDono as 'Estado Dono' ,cidadeDono as 'Cidade Dono',
nSeguidoresTime as 'Seguidores',nSeguindoTime as 'Seguindo',likesTime as 'Likes',bloqTimes as 'Bloquear'
from Times
where nomeTime like @nomeTime + '%'

create procedure buscaradm
@nomeAdm varchar(20)
as
select codAdm as 'Código Administrador',nomeAdm as 'Nome Administrador'
from Administrador
where nomeAdm like @nomeAdm + '%'


create procedure buscarPost
@txtPost varchar(280)
as
select codPost as 'Código do Post' ,txtPost as 'Texto do Post',vidPost as 'Vídeo', 
imgPost as 'Imagem' ,dataPost as'Data' ,codJogador 'Código Jogador' ,codTime as 'Código Time' ,bloqPost as 'Bloquear'
from Post
where txtPost like @txtPost + '%'

create procedure esquecisenha
as
select email as 'E-mail',codigo as 'Código'
from esqueciMinhaSenha


/*deletar pelos codigos deles*/

create procedure deletarJogador
@nickJogador varchar(16)
AS
delete from jogador where nickJogador = @nickJogador;

create  procedure deletarTime
@nomeTime varchar(20)
AS
delete from Times where nomeTime = @nomeTime;


create procedure deletarAdm
@nomeAdm varchar(16)
AS
delete from Administrador where nomeAdm = @nomeAdm;

Create procedure deletarPost
@codPost int
AS
delete from Post where codPost=@codPost

/*inserir Novo Adm-------------------------------------------------- */


create procedure inserirAdm
@nomeAdm varchar(20),
@senhaAdm varchar(16),
@tipoUser varchar(20)
as
insert into Administrador(nomeAdm, senhaAdm,tipoUser)
values (@nomeAdm, @senhaAdm,@tipoUser)



/*Alterar codigo */

create procedure mandarcod
@email varchar (200),
@codigo  int
as
update esqueciMinhaSenha set  codigo=@codigo where email=@email



/*Bloquear Posts -----------------------------------------------------------*/


create procedure bloqPost
@bloqPost bit,
@codPost  int
as
update Post set  bloqPost = @bloqPost where codPost=@codPost

create procedure bloqJogador
@bloqJogador bit,
@codJogador  int
as
update Jogador set  bloqJogador = @bloqJogador where codJogador=@codJogador

create procedure bloqtimes
@bloqTimes bit,
@codTime  int
as
update Times set  bloqTimes = @bloqTimes where codTime=@codTime
	 
	 

create procedure spLogin
@nomeAdm varchar(20),
@senhaAdm varchar(16)
as
select * from administrador where nomeAdm=@nomeAdm and senhaAdm=@senhaAdm






select * from Post;
select * from Jogador;
select * from Times;
select * from Administrador;
select *from esqueciMinhaSenha

declare @codJogador int
declare @descJogador varchar(500)
update Jogador
set descJogador = @descJogador
where codJogador = @codJogador