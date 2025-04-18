# Proyecto de Gestión de Actas

Este proyecto es una aplicación desarrollada con Laravel, Vue 3 e Inertia.js, diseñada para gestionar actas de diferentes bancos o instituciones. El sistema permite crear, visualizar y administrar registros, controlados por roles de usuario.

---

## 🛠 Requisitos

Antes de comenzar, asegurate de tener instalado lo siguiente:

- PHP >= 8.1
- Composer
- Node.js >= 16.x
- NPM >= 8.x
- Laravel >= 10.x
- MySQL o PostgreSQL
- Extensiones PHP: `pdo`, `mbstring`, `openssl`, `bcmath`, `tokenizer`, `xml`, `ctype`, `json`, `curl`

---

## 🚀 Instalación

### 1. Clonar el repositorio

- git clone https://github.com/tu-usuario/tu-repo.git
- cd tu-repo

### 2. Instalar dependencias de backend (Laravel)

- composer install

### 3. Instalar dependencias de frontend (Vue + Vite)

-npm install

### 4. Configurar el archivo .env

- cp .env.example .env

### 5. Generar la clave de la app

-php artisan key:generate

### 6. Migraciones 

-php artisan migrate

### 7. Seeders

- php artisan db:seed

### 8 💻 Levantar el servidor

-php artisan serve

-npm run dev

### 🧪 Usuarios de prueba
- Por defecto, el seeder crea un usuarios con  rol admin. Ejemplo:

- Administrador
- Email: admin@example.com
- Contraseña: password123