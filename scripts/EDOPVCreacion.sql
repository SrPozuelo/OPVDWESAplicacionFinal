/**
 * Autor: Óscar Pozuelo
 * Createdo el 07 de abril del 2026
 * Script de creación de tablas y usuarios.
 */
create database if not exists DBOPVDWESAplicacionFinal;
create table if not exists DBOPVDWESAplicacionFinal.T01_Usuario(
    T01_CodUsuario varchar(10) not null primary key,
    T01_Password varchar(64) not null,
    T01_DescUsuario varchar(255) not null,
    T01_NumConexiones int not null default 0,
    T01_FechaHoraUltimaConexion datetime default null,
    T01_Perfil varchar (100) not null default 'usuario',
    T01_ImagenUsuario BLOB default null
)engine=innodb;
create table if not exists DBOPVDWESAplicacionFinal.T02_Departamento(
    T02_CodDepartamento varchar(3) primary key,
    T02_DescDepartamento varchar(255),
    T02_FechaCreacionDepartamento datetime not null,
    T02_VolumenDeNegocio float null,
    T02_FechaBajaDepartamento datetime null
)engine=innodb;
create user if not exists 'userOPVDWESAplicacionFinal'@'%' identified by '5813Libro-Puro';
-- create user if not exists 'userOPVDWESProyectoTema4'@'%' identified by 'paso';
grant all privileges on *.* to 'userOPVDWESAplicacionFinal'@'%' with grant option;
flush privileges;