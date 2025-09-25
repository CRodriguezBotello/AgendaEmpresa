USE primer_contacto;

-- Tabla principal: persona
CREATE TABLE persona (
    IdPersona TINYINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(200) NOT NULL,
    codPostal CHAR(5) NOT NULL,
    tfn CHAR(9) NOT NULL,
    genero CHAR(2) NOT NULL,
    edad TINYINT UNSIGNED NOT NULL
);

-- Tabla principal: hobby
CREATE TABLE hobby (
    IdHobby TINYINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    hobby VARCHAR(100) NOT NULL
);

-- Tabla intermedia: persona_hobby
CREATE TABLE persona_hobby (
    personaHobby TINYINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    idPersona TINYINT UNSIGNED NOT NULL,
    idHobby TINYINT UNSIGNED NOT NULL,
    CONSTRAINT fk_personaHobby FOREIGN KEY (idPersona) REFERENCES persona (IdPersona),
    CONSTRAINT fk_hobbyPersona FOREIGN KEY (idHobby) REFERENCES hobby (IdHobby)
);
