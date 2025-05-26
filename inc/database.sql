CREATE DATABASE insta;
USE insta;
CREATE TABLE User(
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    pseudo VARCHAR(200)


);
CREATE TABLE Video (
    id_video INT PRIMARY KEY AUTO_INCREMENT,
    nom_video VARCHAR(400),
    id_user INT,
    id_post INT,
    date_ajout_video DATETIME
    
);
CREATE TABLE Image(
    id_pulieur_image int,
    id_post int,
    nom_img varchar(200),
    date_ajout_image datetime,
    id int primary key auto_increment
);
CREATE TABLE Post(
    id_pulieur_post int,
    contenu text(2000),
    date_ajout_post datetime,
    id int primary key auto_increment
);