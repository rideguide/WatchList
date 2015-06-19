
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
 	img varchar(64),
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

insert into movies (name, directorId_fk, description, genere_fk, img, type)values ('Interstellar', 1, 'fjkasdfödslkjfa', 2, 'interstellar.jpg', true);
insert into movies (name, directorId_fk, description, genere_fk, img, type)values ('Memento', 1, 'sdf asdf sdfg ba', 2, 'memento.jpg', true);
insert into movies (name, directorId_fk, description, genere_fk, img, type)values ('Inception', 1, 'blablablabalba lbalbalbalbal albal ba', 1, 'inception.jpg', true);
insert into movies (name, directorId_fk, description, genere_fk, img, type)values ('Schindlers Liste', 2, 'fjkasdfödslkjfa', 3, 'schindlersListe.jpg', true);
insert into movies (name, directorId_fk, description, genere_fk, img, type)values ('Catch Me If You Can', 2, 'sdf asdf sdfg ba', 4, 'CatchMeIfYouCan.jpg', true);
insert into movies (name, directorId_fk, description, genere_fk, img, type)values ('Soldat James Ryan', 2, 'blablablabalba lbalbalbalbal albal ba', 1, 'privateRyan.jpg', true);
insert into movies (name, directorId_fk, description, genere_fk, img, type)values ('Gran Torino', 3, 'fjkasdfödslkjfa', 2, 'granTorino.jpg', true);
insert into movies (name, directorId_fk, description, genere_fk, img, type)values ('American Sniper', 3, 'sdf asdf sdfg ba', 2, 'americanSniper.jpg', true);
insert into movies (name, directorId_fk, description, genere_fk, img, type)values ('Million Dollar Baby', 3, 'blablablabalba lbalbalbalbal albal ba', 1, 'MillionDollarBaby.jpg', true);

insert into user (username, password, status) values ('test', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', true);


Insert into watchlist (user_fk, film_fk, rating) values (1, 3, 0);
Insert into watchlist (user_fk, film_fk, rating) values (1, 2, 0);








