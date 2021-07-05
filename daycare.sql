CREATE DATABASE daycare;

USE daycare;

CREATE TABLE tipos_de_mascota(
  id_tipo INT NOT NULL AUTO_INCREMENT,
  nombre_tipo VARCHAR(20) NOT NULL,
  PRIMARY KEY (id_tipo)
);

CREATE TABLE mascotas(
  id_mascota INT NOT NULL AUTO_INCREMENT,
  nombre_mascota VARCHAR(30) NOT NULL,
  tipo_de_mascota INT NOT NULL,
  raza VARCHAR(30) NOT NULL,
  sexo CHAR(1) NOT NULL,
  nombre_del_cliente VARCHAR(40) NOT NULL,
  nacimiento DATE NOT NULL,
  PRIMARY KEY (id_mascota),
  FOREIGN KEY (tipo_de_mascota) REFERENCES tipos_de_mascota(id_tipo)
  ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO tipos_de_mascota(nombre_tipo) VALUES
('Perro'), ('Gato'), ('Tortuga'),('Ave'),('Conejo'), ('Lagartija'),('Hamster'), ('Pez');

INSERT INTO mascotas(nombre_mascota,tipo_de_mascota,raza,sexo,nombre_del_cliente,nacimiento) VALUES
('Manía',1,'Labrador','H','Richard','2015-10-25');