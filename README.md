# Actividad 2 - Seguridad Web

Aplicación desarrollada con Laravel que implementa autenticación y control de acceso basado en roles.

## Usuarios y Passwords
Generados con el Seeder

## Roles

Administrador
- CRUD completo de tareas
- Crear usuarios
- Listar usuarios

Editor
- CRUD completo de tareas

Usuario
- Solo visualización de tareas

## Instalación

composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
