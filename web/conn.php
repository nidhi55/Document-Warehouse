<?php


$conn=mysqli_connect('localhost',"root","","pr");


$tab="create table if not exists reg_user(
	uid int(255) primary key auto_increment,
	name varchar(256) not null,
	username varchar(256) not null,
	email varchar(256) not null,
	con_no int(10) not null,
	dob date,
	gender varchar(10) not null,
	pwd varchar(256) not null,
	pro_pic varchar(255))";
	
?>