USE primer_contacto;

SELECT p.IdPersona, p.nombre, p.apellido, p.codPostal, p.tfn, p.genero, p.edad, h.hobby1, h.hobby2, h.hobby3, h.hobby4, h.hobby5 FROM persona p
INNER JOIN hobby h ON p.IdPersona = h.IdHobby;