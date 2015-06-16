drop database if exists movieDb;
create database movieDb;

use movieDb;

create table movies 
(
	id_pk int NOT NULL AUTO_INCREMENT,
 	name varchar(801),
 	directorId_fk int,
 	description text,
 	genere_fk int,
 	type boolean,
 	primary key (id_pk)
 );

create table episodes 
(
	id_pk int NOT NULL AUTO_INCREMENT,
 	serieId_fk int,
 	serieNr int,
 	episodeNr int,
 	name varchar(801),
 	primary key (id_pk)
 );

create table user 
(
	id_pk int NOT NULL AUTO_INCREMENT,
 	username varchar(801),
 	password varchar(64),
 	status boolean,
 	primary key (id_pk)
 );

create table genere 
(
	id_pk int NOT NULL AUTO_INCREMENT,
 	name varchar(801),
 	primary key (id_pk)
 );

create table watchlist 
(
	id_pk int NOT NULL AUTO_INCREMENT,
 	user_fk int,
 	film_fk int,
 	rating int,
 	primary key (id_pk)
 );

create table director 
(
	id_pk int NOT NULL AUTO_INCREMENT,
 	name varchar(801),
 	primary key (id_pk)
 );

insert into genere (name) values ('Action');
insert into genere (name) values ('Thriller');
insert into genere (name) values ('Drama');
insert into genere (name) values ("Comedy");

insert into director (name) values ('Christopher Nolan');
insert into director (name) values ('Stephen Spielberg');
insert into director (name) values ('Clint Eastwood');

insert into movies (name, directorId_fk, description, genere_fk, type)values ('Inception', 0, 'blablablabalba lbalbalbalbal albal ba', 1, true);
