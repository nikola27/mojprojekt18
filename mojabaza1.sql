drop database if exists mojproblem1;

create database mojproblem1 default character set utf8;



#c:\xampp\mysql\bin\mysql -uedunova -pedunova --default_character_set=utf8 < d:\skriptapp17.sql


use mojproblem1;

create table korisnik(
sifra int not null primary key auto_increment,
ime varchar(20) not null,
prezime varchar(20) not null,
oib char(11) not null,
telefon varchar(20) not null,
adresa varchar(50) not null,
email varchar(50)
);

create table kvar(
sifra int not null primary key auto_increment,
naziv varchar(100) not null,
opis varchar(200) not null,
kategorija varchar(40) not null
);

create table tvrtka(
sifra int not null primary key auto_increment,
naziv varchar(30) not null,
adresa varchar(50) not null,
oib char(11) not null,
telefon varchar(20) not null,
email varchar(50) not null,
kategorija int not null
);

create table korisnikkvar(
korisnik int not null,
kvar int not null
);

create table kvartvrtka(
kvar int not null,
tvrtka int not null
);



alter table korisnikkvar add foreign key (korisnik) references korisnik(sifra);
alter table korisnikkvar add foreign key (kvar) references kvar(sifra);

alter table kvartvrtka add foreign key (kvar) references kvar(sifra);
alter table kvartvrtka add foreign key (tvrtka) references tvrtka(sifra);















