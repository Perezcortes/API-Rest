
<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

---

# 📦 API REST con Laravel 

Este proyecto es una **API RESTful construida con Laravel 10** para gestionar publicaciones y usuarios. Está estructurada siguiendo buenas prácticas de desarrollo backend, incluyendo controladores versionados, recursos API, migraciones, seeders, factories, y pruebas.

> Repositorio GitHub: [https://github.com/Perezcortes/API-Rest](https://github.com/Perezcortes/API-Rest)  
> Autor: [Perezcortes](https://github.com/Perezcortes)  
> Contacto: 9531447499a@gmail.com

---

## 🚀 Funcionalidades

- CRUD completo para Posts
- Controladores versionados (V1)
- Transformación de datos con `PostResource`
- Uso de Eloquent ORM
- Factories, Seeders y Migrations
- Rutas API definidas en `routes/api.php`
- Pruebas con PHPUnit y Postman

---

## 📂 Estructura de carpetas

```
app/
│
├── Http/
│   ├── Controllers/
│   │   └── APIRest/V1/PostController.php
│   └── Resources/V1/PostResource.php
├── Models/
│   ├── Post.php
│   └── User.php

database/
├── factories/
├── migrations/
└── seeders/

routes/
└── api.php
```

---

## ⚡ Instalación

Clona el proyecto:

```bash
git clone https://github.com/Perezcortes/API-Rest.git
cd API-Rest
```

Instala las dependencias con Composer:

```bash
composer install
```

Copia el archivo de entorno y genera la clave:

```bash
cp .env.example .env
php artisan key:generate
```

Configura tu conexión a base de datos en el archivo `.env`.

Ejecuta las migraciones y seeders:

```bash
php artisan migrate --seed
```

Levanta el servidor:

```bash
php artisan serve
```

---

## 🔁 Endpoints disponibles

| Método | Ruta              | Descripción                     |
|--------|-------------------|---------------------------------|
| GET    | /api/posts        | Listar todos los posts          |
| GET    | /api/posts/{id}   | Ver detalle de un post          |
| POST   | /api/posts        | Crear nuevo post                |
| PUT    | /api/posts/{id}   | Actualizar post existente       |
| DELETE | /api/posts/{id}   | Eliminar post                   |

---

## 🔧 Herramientas utilizadas

- PHP 8.x
- Laravel 10
- MySQL
- Composer
- Postman
- PHPUnit

---

## 🧪 Pruebas

Para ejecutar pruebas unitarias y funcionales:

```bash
php artisan test
```

---

## 🤝 Contribuciones

¡Las contribuciones son bienvenidas!

1. Haz un fork del repositorio.
2. Crea una rama (`git checkout -b feature/nueva-funcionalidad`)
3. Realiza tus cambios y haz commit (`git commit -am 'Agrega nueva funcionalidad'`)
4. Sube tu rama (`git push origin feature/nueva-funcionalidad`)
5. Abre un Pull Request.

---

## 🔐 Seguridad

Si encuentras alguna vulnerabilidad, por favor repórtala enviando un correo a [taylor@laravel.com](mailto:taylor@laravel.com).

---

## 📄 Licencia

Este proyecto utiliza la licencia [MIT](https://opensource.org/licenses/MIT).

---
