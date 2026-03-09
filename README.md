# MySQLi

Nom del projecte: Desenvolupament d’un CRUD en PHP (MySQLi) en servidor real

Descripció breu: Implementar una aplicació CRUD completa en PHP procedural utilitzant MySQLi, treballant directament sobre el servidor dam.inspedralbes.cat, versionant el codi amb GitHub i aplicant criteris bàsics de qualitat de codi segons l’estàndard PSR-2.

Estructura de la base de dades (sentència CREATE TABLE):

CREATE TABLE videojuegos(
    id bigint unsigned not null  primary key auto_increment,
    nombre varchar(255),
    descripcion varchar(255)
);
