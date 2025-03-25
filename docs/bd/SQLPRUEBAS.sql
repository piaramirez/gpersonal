
#INSERT INTO mt_usuarios (mtUsuarioID, mtUsuarioNombre, mtUsuarioApellido, mtUsuarioEmail, mtUsuarioPass, mtUsuarioImg, mtUsuarioTipo) 
#VALUES (1, 'Antonio', 'Ramírez', 'pia@example.com', '123456', 'us.jpeg', 'Trabajador');
#INSERT INTO mtroles (mtRolesId, mtRolesNombre) VALUES(1, "ADMINISTRADOR");
#INSERT INTO mtroles (mtRolesId, mtRolesNombre) VALUES(2, "SOPORTE TÉCNICO");
#INSERT INTO mtroles (mtRolesId, mtRolesNombre) VALUES(3, "USUARIO");
#INSERT INTO  mtusuariosroles (mtUsuariosRolesID,mtUsuarioID,mtRolesId) VALUES(1, 1,2);
SELECT u.mtUsuarioID, u.mtUsuarioNombre, u.mtUsuarioApellido, u.mtUsuarioEmail, u.mtUsuarioImg, u.mtUsuarioTipo, r.mtRolesNombre AS rol 
FROM mt_usuarios u
LEFT JOIN mtroles r ON u.mtUsuarioTipo = r.mtRolesId
WHERE u.mtUsuarioEmail = "pia@example.com" AND u.mtUsuarioPass = "123456" LIMIT 1