DROP DATABASE IF EXISTS 8b_ci4;
CREATE DATABASE 8b_ci4;
USE 8b_ci4;

CREATE TABLE usuarios(
    fecha_creacion date,
    fecha_actualizacion date,
    fecha_eliminacion date,
    id_usuario int not null primary key,
    nombre varchar(50) not null,
    paterno varchar(50) not null,
    materno varchar(50) not null,
    correo varchar(100) not null,
    contraseña varchar(64) not null
);
INSERT INTO usuarioS VALUES (now(),now(),now(),1,"Evelin","Rojas","Garcia","evelin@gmail.com","5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5");
