-- Crear la base de datos
CREATE DATABASE aldia;
USE aldia;

-- Tabla de IAs
CREATE TABLE ias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    imagen TEXT,
    url TEXT NOT NULL,
    descripcion TEXT,
    tipo ENUM('Texto', 'Imagen', 'Video', 'Audio', 'Otro') NOT NULL,
    fecha_publicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de Tags
CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) UNIQUE NOT NULL
);

-- Tabla intermedia para la relación IA - Tags
CREATE TABLE ias_tags (
    ia_id INT NOT NULL,
    tag_id INT NOT NULL,
    PRIMARY KEY (ia_id, tag_id),
    FOREIGN KEY (ia_id) REFERENCES ias(id) ON DELETE CASCADE,
    FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE CASCADE
);

-- Crear la base de datos
CREATE DATABASE aldia;
USE aldia;


-- Tabla de IAs
CREATE TABLE ias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    imagen TEXT,
    url TEXT NOT NULL,
    descripcion TEXT,
    tipo ENUM('Texto', 'Imagen', 'Video', 'Audio', 'Otro') NOT NULL,
    fecha_publicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de Tags
CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) UNIQUE NOT NULL
);

-- Tabla intermedia para la relación IA - Tags
CREATE TABLE ias_tags (
    ia_id INT NOT NULL,
    tag_id INT NOT NULL,
    PRIMARY KEY (ia_id, tag_id),
    FOREIGN KEY (ia_id) REFERENCES ias(id) ON DELETE CASCADE,
    FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE CASCADE
);
