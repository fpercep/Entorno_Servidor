-- 1. Crear la base de datos (si no existe) y seleccionarla
CREATE
DATABASE IF NOT EXISTS gestion_peliculas CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE
gestion_peliculas;

-- 2. Crear la tabla 'directores' primero (porque 'peliculas' depende de ella)
CREATE TABLE IF NOT EXISTS directores
(
    id
    INT
    AUTO_INCREMENT
    PRIMARY
    KEY,
    nombre
    VARCHAR
(
    100
) NOT NULL
    ) ENGINE=InnoDB;

-- 3. Crear la tabla 'peliculas' con la relación (Foreign Key)
CREATE TABLE IF NOT EXISTS peliculas
(
    id
    INT
    AUTO_INCREMENT
    PRIMARY
    KEY,
    titulo
    VARCHAR
(
    255
) NOT NULL,
    director_id INT NOT NULL,
    CONSTRAINT fk_director
    FOREIGN KEY
(
    director_id
)
    REFERENCES directores
(
    id
)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    ) ENGINE=InnoDB;

-- 4. Insertar datos de prueba (Seeders) para que la app no esté vacía al empezar
INSERT INTO directores (nombre)
VALUES ('Christopher Nolan'),
       ('Steven Spielberg'),
       ('Quentin Tarantino'),
       ('Sofia Coppola');

INSERT INTO peliculas (titulo, director_id)
VALUES ('Inception', 1),
       ('Interstellar', 1),
       ('Jurassic Park', 2),
       ('Pulp Fiction', 3),
       ('Lost in Translation', 4);