CREATE DATABASE enfriatech_db;
USE enfriatech_db;

-- Tabla usuarios
CREATE TABLE usuarios (
    usuario_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    clave VARCHAR(255) NOT NULL,
    rol ENUM('cliente', 'admin') DEFAULT 'cliente'
);

-- Tabla categorias
CREATE TABLE categorias (
    cat_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

-- Tabla productos
CREATE TABLE productos (
    prod_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    marca VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    id_cat INT,
    FOREIGN KEY (id_cat) REFERENCES categorias(cat_id)
);

-- Tabla servicios
CREATE TABLE servicios (
    serv_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    duracion INT NOT NULL
);

-- Tabla zonas
CREATE TABLE zonas (
    zona_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    cargo DECIMAL(10,2) NOT NULL
);

-- Tabla reservas
CREATE TABLE reservas (
    res_id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    serv_id INT,
    zona_id INT,
    horario DATETIME NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    contacto VARCHAR(100) NOT NULL,
    detalle TEXT,
    estado ENUM('enviada', 'pendiente_pago', 'confirmada', 'rechazada') DEFAULT 'enviada',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(usuario_id),
    FOREIGN KEY (serv_id) REFERENCES servicios(serv_id),
    FOREIGN KEY (zona_id) REFERENCES zonas(zona_id)
);
