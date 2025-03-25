DROP SCHEMA IF EXISTS `mesatickets`;
CREATE SCHEMA IF NOT EXISTS `mesatickets` 
DEFAULT CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;
USE `mesatickets`;

CREATE TABLE IF NOT EXISTS `mesatickets`.`mt_Usuarios` (
    `mtUsuarioID` INT NOT NULL AUTO_INCREMENT,
    `mtUsuarioNombre` VARCHAR(50) NULL,
    `mtUsuarioApellido` VARCHAR(50) NULL,
    `mtUsuarioEmail` VARCHAR(100) NOT NULL UNIQUE,
    `mtUsuarioPass` VARCHAR(255) NOT NULL, 
    `mtUsuarioImg` VARCHAR(255) NULL, 
    `mtUsuarioTipo` ENUM('Cliente', 'Trabajador'),
    PRIMARY KEY (`mtUsuarioID`)
)
ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS `mesatickets`.`mtRoles`(
	`mtRolesId` INT  AUTO_INCREMENT,
    `mtRolesNombre` VARCHAR(50) UNIQUE NOT NULL,
    PRIMARY KEY(`mtRolesId`)
)
ENGINE = InnoDB; 
CREATE TABLE IF NOT EXISTS  `mesatickets`.`mtUsuariosRoles`(
	`mtUsuariosRolesID` INT AUTO_INCREMENT,
    `mtUsuarioID` INT,
    `mtRolesId` INT,
    PRIMARY KEY(`mtUsuariosRolesID`),
    FOREIGN KEY(`mtUsuarioID`)
    REFERENCES `mesatickets`.`mt_Usuarios`(`mtUsuarioID`),
    FOREIGN KEY(`mtRolesId`)
    REFERENCES `mesatickets`.`mtRoles`(`mtRolesId`)
    
)
ENGINE = InnoDB
DEFAULT CHARSET=utf8mb4 
COLLATE=utf8mb4_unicode_ci;
