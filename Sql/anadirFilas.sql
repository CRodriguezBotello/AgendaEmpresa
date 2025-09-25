USE agenda;

INSERT INTO persona (nombre, apellido, codPostal, tfn, genero, edad) VALUES ("Carlos","Rodriguez Botello","06010","690684027","H",21);
INSERT INTO hobby (hobby) VALUES ("Videojuegos");
INSERT INTO hobby (hobby) VALUES ("Conducir");
INSERT INTO hobby (hobby) VALUES ("Rugby");
INSERT INTO hobby (hobby) VALUES ("Anime");
INSERT INTO persona_hobby (idPersona, idHobby) VALUES (1,1);
INSERT INTO persona_hobby (idPersona, idHobby) VALUES (1,2);
INSERT INTO persona_hobby (idPersona, idHobby) VALUES (1,3);
INSERT INTO persona_hobby (idPersona, idHobby) VALUES (1,4);
