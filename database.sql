CREATE TABLE users(
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username varchar(255) UNIQUE NOT NULL,
    email varchar(255) UNIQUE NOT NULL,
    password varchar(255) NOT NULL,
    token varchar(100),
    token_exp date,
    status int(1) NOT NULL DEFAULT 1,
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE students(
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    dni bigint  NOT NULL,
    dniType varchar(3) NOT NULL,
    name varchar(255) NOT NULL,
    lastName varchar(255) NOT NULL,
    gender varchar(1),
    status int(1) NOT NULL DEFAULT 1,	
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP	
);

CREATE TABLE teachers(
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    dni bigint  NOT NULL,
    name varchar(255) NOT NULL,
    course varchar(255) NOT NULL,
    status int(1) NOT NULL DEFAULT 1,
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE classrooms(
    roomCode varchar(5) PRIMARY KEY NOT NULL,
    ability int,
    id_teacher int NOT NULL,
    status int(1) NOT NULL DEFAULT 1,
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_teacher) REFERENCES teachers(id)	
);

CREATE TABLE classroom_student(
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_classroom varchar(5) NOT NULL, 
    id_student int NOT NULL,	
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_classroom) REFERENCES classrooms(roomCode),
    FOREIGN KEY (id_student) REFERENCES students(id)
);

INSERT INTO users(username, email,password)VALUES('admin', 'admin@admin.com', '123456');
INSERT INTO users(username, email,password)VALUES('sebas', 'sebas@gmail.com', '12346');
INSERT INTO users(username, email,password)VALUES('john', 'john@gmail.com', '12346');

INSERT INTO teachers (dni, name, course) VALUES(123456789, "Profesor1", "Matemáticas");
INSERT INTO teachers (dni, name, course) VALUES(987456, "Profesor2", "Español");
INSERT INTO teachers (dni, name, course) VALUES(52369, "Profesor3", "Ingles");

INSERT INTO students (dni, dniType, name, lastName, gender)VALUES(966857, "CC", "estudiante1", "est1", "F");
INSERT INTO students (dni, dniType, name, lastName, gender)VALUES(52633, "TI", "estudiante2", "est2", "M");
INSERT INTO students (dni, dniType, name, lastName, gender)VALUES(7774111, "PS", "estudiante3", "est3", "F");

INSERT INTO classrooms(roomCode, ability, id_teacher)VALUES("301A", 31, 1);
INSERT INTO classrooms(roomCode, ability, id_teacher)VALUES("302B", 10, 2);
INSERT INTO classrooms(roomCode, ability, id_teacher)VALUES("303C", 5, 3);

INSERT INTO classroom_student(id_classroom, id_student)VALUES("301A", 1);
INSERT INTO classroom_student(id_classroom, id_student)VALUES("301A", 2);
INSERT INTO classroom_student(id_classroom, id_student)VALUES("301A", 3);