DROP DATABASE carga_academica;

CREATE DATABASE carga_academica;

USE carga_academica;

#1 =====TABLA ALUMNO=====;
CREATE TABLE TAlumno
(
codAlumno varchar (5) primary key,
nombreAlumno varchar (25) not null,
apellidosAlumno varchar (50) not null,
codCarreraProfesional varchar (50) not null,
correoInstitucional varchar (144) not null
);


#2 =====TABLA ASIGNATURA=====
create table TAsignatura
(
codAsignatura varchar (10) primary key,
codCarreraProfesional varchar (144) not null,
nombre varchar (144) not null,
categoria varchar (50) not null,
creditos int not null
);


#3 =====TABLA DOCENTE=====
create table TDocente
(
codDocente varchar (6) primary key,
nombreCompleto varchar (100) not null,
categoria varchar (50) not null,
regimen varchar(1) not null,
telefono varchar(50),
correoInstitucional varchar(144) not null,
rango varchar(1) not null,
contrasena varchar(50) not null
);
#3 =====TABLA SEMESTRE=====
create table TSemestre
(
codSemestre varchar (6) primary key not null,
NombreSemestre varchar (25) not null,
categoria varchar (50) not null
);
#4 ======= TABLA MATRICULA ======
create table TMatricula(
    codSemestre varchar(144) not null,
    codAsignatura varchar(144) not null,
    codCarreraProfesional varchar(144) not null,
    codAlumno varchar(50) not null,
    primary key (codAsignatura,codCarreraProfesional,codAlumno) #clave primaria compuesta
);

#5 ======= TABLA MATRICULA ======
create table TCatalogo(
    codSemestre varchar(144) not null,
    codAsignatura varchar(144) not null,
    codCarreraProfesional varchar(144) not null,
    codDocente varchar(100) not null,
    grupo varchar(50) not null,
    silabo varchar(50) not null,
    aula varchar(50) not null,
    dia varchar(50) not null,
    horaInico varchar(50) not null,
    horaFinal varchar(50) not null,
    tipo varchar(50) not null,
    limiteAforo varchar(50) not null,
    primary key (codAsignatura,dia,codCarreraProfesional,codDocente) #clave primaria compuesta
);

#-------------------------------------------------------------------------------------------------------
#6 =====TABLA ASISTENCIA DE ALMUNOS======
create table TAsistenciaAlumnos
(
fechaAsistencia datetime not null, #la fecha es una clave primaria
codAlumno varchar (8) not null,
codAsignatura varchar (144) not null,
estado varchar (1) not null,
observacion varchar (50),
primary key (fechaAsistencia,codAlumno,codAsignatura) #clave primaria compuesta
);


#7 =====TABLA ASISTENCIA DOCENTES========
create table TAsistenciaDocentes
(
fechaAsistencia varchar(100), #la fecha es una clave primaria
codDocente varchar (100)  not null,
codAsignatura varchar (8)  not null,

observacion varchar (50),
primary key (fechaAsistencia,codDocente,codAsignatura) #clave primaria compuesta
);

create table TUsuariosCentroComputo(
    codUsuario varchar (50) primary key,
    contrasena varchar (50) not null,
    rangoUsuario varchar (1) not null
);
INSERT INTO TUsuariosCentroComputo (codUsuario,contrasena,rangoUsuario) VALUES ("101010","123123","2");
INSERT INTO TDocente(codDocente,nombreCompleto,categoria,regimen,telefono,correoInstitucional,rango,contrasena)
        VALUES ("101112","JUAN PEPA PIPA","principal","tiempo completo",null,"101112@unsaac.edu.pe","1","123123");
INSERT INTO TUsuariosCentroComputo (codUsuario,contrasena,rangoUsuario) VALUES ("101112","123123","1");
