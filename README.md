# ❄️ EnfríaTech - Sitio Web Publicitario con sistema de reservas de servicios.

Este proyecto es un sistema web desarrollado en **Laravel** para la empresa EnfríaTech. Permite a los clientes realizar cotizaciones automatizadas (aproximadas), calcular capacidad de A/C y reservar servicios.

---

## 📁 Estructura General del Proyecto

### Cliente:
- **Registrarse / Iniciar sesión**: los usuarios pueden crear una cuenta con su nombre, correo y contraseña.
- **Editar información personal**: pueden actualizar sus datos o cambiar su contraseña.
- **Reservar citas**: seleccionan un servicio, completan un formulario con dirección, contacto, fecha (con al menos 72h de anticipación) y detalles del equipo.
- **Historial de reservas**: pueden ver el estado de sus reservas (`enviada`, `pendiente_pago`, `confirmada`, `rechazada`). Al ser aceptadas, se habilita el pago. Reciben confirmación por correo.

### Administrador:
- **Inicio de sesión**: acceso con credenciales predefinidas.
- **Gestión de servicios**: agregar, editar, eliminar servicios.
- **Gestión de zonas**: administrar zonas de cobertura.
- **Gestión de productos y categorías**: CRUD completo.
- **Gestión de reservas**: aceptar o rechazar, verificar pagos, generar reportes, crear o editar reservas.

### Funcionalidades sin registro:
- **Cotizador**: estimación de precio según zona y tipo de servicio.
- **Cálculo de capacidad**: recomienda capacidad de A/C según dimensiones de la habitación.

---

### ⚙️ Tecnologías

- PHP 8.x
- Laravel 10
- MySQL
- Blade
- Bootstrap
---

## 🧾 Requisitos

- PHP >= 8.1
- Composer
- MySQL
- Laravel

---


## 🚀 Pasos para Ejecutar el Proyecto

### 1. Clonar el repositorio y entrar en el proyecto
git clone https://github.com/agescobar/enfriatech-web-project.git
cd enfriatech-web-project

### 2. Instalar dependencias de Laravel
composer install

### 3. Crear el archivo de entorno
cp .env.example .env

### 4. Configurar las variables de entorno
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=enfriatech_db
DB_USERNAME=root
DB_PASSWORD= *********

### 5. Crear la base de datos en SQLyog
CREATE DATABASE enfriatech_db;

### 6. Generar la clave de aplicación
php artisan key:generate

### 7. Ejecutar migraciones y seeders
php artisan migrate --seed

### 8. Levantar el servidor y abrir en el navegador
php artisan serve
Abrir en el navegador: http://127.0.0.1:8000

🧪 Credenciales de prueba
Administrador
Email: enfriatechsv@gmail.com
Contraseña: enfriatech-admin
Usuario
Email: pedritomccormick@gmail.com
Contraseña: hellmans123

# 🧊 EnfríaTech
Este proyecto fue desarrollado como parte de la asignatura Desarrollo de Aplicaciones Web de la carrera de Técnico en Ingeniería de Desarrollo de Software de la Escuela Especializada en Ingeniería ITCA-FEPADE.
