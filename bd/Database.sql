#DROP DATABASE carga_academica;

CREATE SCHEMA `carga_academica`  ;
    
USE carga_academica;

#1 =====TABLA ALUMNO=====
CREATE TABLE TAlumno
(
codAlumno varchar (5) primary key not null,
nombreAlumno varchar (25) not null,
apellidosAlumno varchar (50) not null
);
#drop table Talumno

#2 =====TABLA ASIGNATURA=====
create table TAsignatura
(
codAsignatura varchar (7) primary key not null,
nombreAsignatura varchar (50) not null,
creditos int not null
);

#3 =====TABLA DOCENTE=====
create table TDocente
(
codDocente varchar (6) primary key not null,
nombreDocente varchar (25) not null,
apellidosDocente varchar (50) not null,
rangoDocente varchar(1) not null,
contrasena varchar(50) not null
);

#4 =====TABLA SEMESTRE ACADEMINO======
create table TSemestre
(
codSemestre varchar (5) primary key not null,
fecha_Inicio datetime not null,
fecha_Final datetime not null
);
#-------------------------------------------------------------------------------------------------------
#5 =====TABLA ASISTENCIA DE ALMUNOS======
create table TAsistenciaAlumnos
(
codSemestre varchar (5) not null,
codAsistencia_Alumno datetime not null, #la fecha es una clave primaria
codAlumno varchar (5) not null,
estado varchar (1) not null,
observacion varchar (50),
primary key (codSemestre,codAsistencia_Alumno,codAlumno), #clave primaria compuesta
foreign key (codSemestre) references TSemestre(codSemestre),
foreign key (codAlumno) references TAlumno(codAlumno)
);

#6 =====TABLA CURSOS=====
create table TCursos 
(
codCurso varchar (8) primary key not null,
codAsignatura varchar (9) not null,
codDocente varchar (6),
codSemestre varchar (5) not null,
silabo  mediumblob, #para poder subir un pdf
foreign key (codAsignatura) references TAsignatura(codAsignatura),
foreign key (codDocente) references TDocente(codDocente),
foreign key (codSemestre) references TSemestre(codSemestre)
);

#7 =====TABLA ASISTENCIA DOCENTES========
create table TAsistenciaDocentes
(
codSemestre varchar (5) not null,
codAsistencia_Docente datetime  not null, #la fecha es una clave primaria
codDocente varchar (5)  not null,
codCurso varchar (8)  not null,
hora_Entrada datetime not null,
hora_Salida datetime ,
observacion varchar (50),
primary key (codSemestre,codAsistencia_Docente,codDocente,codCurso), #clave primaria compuesta
foreign key (codSemestre) references TSemestre(codSemestre),
foreign key (codDocente) references TDocente(codDocente),
foreign key (codCurso) references TCursos(codCurso)
);