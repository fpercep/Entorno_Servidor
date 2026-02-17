-- 1. Creación de la base de datos (opcional, ajusta el nombre si prefieres otro)
CREATE
DATABASE IF NOT EXISTS gestion_tareas;
USE
gestion_tareas;

-- 2. Creación de la tabla 'categorias'
-- Debe crearse primero porque 'tareas' depende de ella.
CREATE TABLE categorias
(
    id     INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

-- 3. Creación de la tabla 'tareas'
-- 'completada' se define como TINYINT (0 = No, 1 = Sí) con valor por defecto 0.
CREATE TABLE tareas
(
    id           INT AUTO_INCREMENT PRIMARY KEY,
    titulo       VARCHAR(255) NOT NULL,
    completada   TINYINT(1) DEFAULT 0,
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES categorias (id) ON DELETE CASCADE
);

-- 4. Inserción de datos de prueba (Seed data)
-- Para que puedas probar la funcionalidad de "Listar" inmediatamente.

-- Categorías
INSERT INTO categorias (nombre)
VALUES ('Trabajo'),
       ('Personal'),
       ('Estudios');

-- Tareas
INSERT INTO tareas (titulo, completada, categoria_id)
VALUES ('Enviar reporte mensual', 1, 1),       -- Tarea completada de Trabajo
       ('Comprar comida para el perro', 0, 2), -- Tarea pendiente Personal
       ('Terminar ejercicio de PHP', 0, 3); -- Tarea pendiente de Estudios