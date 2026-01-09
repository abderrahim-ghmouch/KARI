-- Active: 1764859452169@@127.0.0.1@3306@KARI

select *from USERS;


create table Rental(

rental_id INT PRIMARY KEY  ,

title text ,

rental_description text,

addrees varchar(255),

city varchar(100),

pricepernight int,

capacity varchar(50),

image_name varchar(255),


)

