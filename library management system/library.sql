create database library2;
use library2;

create table book
(
bookid int(5) primary key,
subject varchar(30),
title varchar(30),
author varchar(30),
publisher varchar(30),
copyright varchar(20),
edition varchar(20),
pages varchar(20),
isbn varchar(20),
numberofbooks varchar(20),
numberofavailablebooks varchar(20),
numberofborrowedbooks varchar(20),
libraryname varchar(20),
available varchar(20),
shelfno varchar(20)
);

insert into book values(1,'php','Learn PHP','Pankaj','McGrawHill','pankaj','1st','200','93932','100','60','40','YCT','YES','3');


create table borrow
(
bookid int(5) primary key,
memberid int(5),
dayofborrow varchar(20),
dayofreturn varchar(20)
);
insert into borrow values(1,1,'12-6-2014','20-6-2014');

create table member
(
memberid int(5) primary key,
password varchar(20),
name varchar(20),
email varchar(30),
branch varchar(30),
numberofbooks varchar(20),
expired varchar(20)
);
insert into member values(1,'vivek','vivek','vivek@gmail.com','cs','5','12-12-2016');

create table siteuser
(
username varchar(30) primary key,
pwd varchar(50),
dob date,
gender varchar(6),
hintq varchar(255),
hinta varchar(255),
emailadd varchar(50),
smsno varchar(15),
role varchar(20)
);
insert into siteuser values('pankaj','pankaj','1989-12-4','male','Be','php','pankaj43@gmail.com','3','member');
insert into siteuser values('admin','admin','1990-12-5','male','Be','php','admin@gmail.com','4','admin');