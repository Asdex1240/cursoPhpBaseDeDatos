/*  Teoria de base de datos 
    Structure Query Languaje = Lenguaje Estructurado de consulta
    Base de datos = coleccion de datos que están organizados
    Gestores o manejadores de bases de datos son los programas que nos permite
    administrar los datoa

    Ejemplos de gestores de BD: Microsoft Access, Microsoft SQL Server, ORACLE, Informix, DBase, SQL Lite, PostSQL, MySQL

    Una sentencia SQL, es una linea de codigo para trabajar con nuetra base de datos  
    Existen 2 tipos de sentencias SQL, 
    1) Secuencias Estructurales: Son las que nos permitirán crear, modificar o eliminar objetos, usuarios
    y propiedades de nuestra base de datos.

    2) Sentencias de Datos: Son las que nos permitirás insertar, eliminar, modificar y buscar informacion en nustra BD.
    En MySQL, existen dos tipos de Engine para tabla:
    1) MyISAM = tablas planas como si fuese trabajar los datos como excel
    
    2) InnoDB = Tablas de relacionales 


*/
CREATE DATABASE mis_contactos;

USE mis_contactos;

CREATE TABLE contactos(
    email VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL, 
    sexo CHAR(1),
    nacimiento DATE,
    telefono VARCHAR(13),
    pais VARCHAR(50) NOT NULL,
    imagen VARCHAR(50), 
    PRIMARY KEY(email),
    FULLTEXT KEY buscador(email, nombre, sexo, telefono, pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE pais(
    id_pais INT NOT NULL AUTO_INCREMENT,
    pais VARCHAR(50) NOT NULL,
    PRIMARY KEY(id_pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pais(id_pais, pais) VALUES
(1,"México"),
(2, "Colombia"),
(3, "Guatemala"),
(4, "España"),
(5, "Brasil"),
(6, "Uruguay"),
(7,"Perú"),
(8, "Argentina"),
(9, "Chile"),
(10,"Paraguay"),
(11, "Honduras"),
(12,"El Salvador"),
(13, "Nicaragua"),
(14, "Costa Rica"),
(15, "Panamá"),
(16, "Venezuela"),
(17,"Ecuador"),
(18, "Bolivia"),
(19,"Canadá"),
(20,"Estados Unidos"),
(21, "Groenlandia"),
(22, "Republica Dominicana"),
(23, "Haití"),
(24, "Cuba"),
(25, "Belice"),
(26, "Inglaterra"),
(27, "Francia"),
(28, "Alemania"),
(29, "Italia"),
(30, "Japón"),
(31, "China"),
(32, "Egipto"),
(33, "Sudafrica"),
(34, "Australia"),
(35, "Nueva Zelanda");