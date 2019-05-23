/sql para crear la tabla cursos en base de datos projects.

CREATE TABLE `projects`.`cursos` ( `courseId` VARCHAR(7) NOT NULL , 
 `courseName` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL , 
  `courseDescription` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL , 
   `courseCost` FLOAT(7,2) NOT NULL ,  `couseLevel` VARCHAR(10) NOT NULL ,   
    PRIMARY KEY  (`courseId`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_spanish_ci;
