CREATE DATABASE barberia;

 use barberia;

CREATE TABLE empleado(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  telefono int(10),
  correo VARCHAR(50),
  domicilio VARCHAR(50),
  fechanacimiento VARCHAR(50),
  antidoping VARCHAR(50)
);

DESCRIBE empleado;