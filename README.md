# Proyecto de Gestión de Eventos - Backend (Laravel)

## Descripción

Este es el backend del proyecto de gestión de eventos, desarrollado con **Laravel 11**. Proporciona la lógica de autenticación, registro y administración de usuarios, asegurando una integración fluida con la interfaz en **React**. El sistema está diseñado para gestionar eventos sin ánimo de lucro y está inspirado en el diseño de Reddit.

## Integrantes

- **Santiago**
- **Ruzkallah**
- **Jeray**

## Características Principales

- **Autenticación de usuarios:** Manejo de login, registro y redirección desde React.
- **Administración de usuarios:** Solo accesible para administradores.
- **Base de datos en Laravel:** Toda la lógica de datos reside en Laravel.
- **Carga de imágenes en registro:** Opcional para los usuarios.
- **Estructura visual coherente con React:** Para una transición fluida entre frontend y backend.
- **Uso de Orion y Sanctum:** Para la gestión de API y autenticación segura.
- **Generación de CRUD:** Utilizando [Laravel CRUD Generator](https://github.com/awais-vteams/laravel-crud-generator) para agilizar el desarrollo.

## Tecnologías Utilizadas

- **Laravel 11** - Framework PHP para el backend.
- **MySQL** - Base de datos relacional.
- **Blade** - Motor de plantillas de Laravel.
- **Tailwind CSS** - Estilización del frontend de Laravel.
- **Alpine.js** - Para la interactividad en la UI del backend.
- **Sanctum** - Autenticación basada en tokens.
- **Orion** - Creación de APIs basada en JSON:API.
- **Laravel CRUD Generator** - Generación de CRUD automática.

## Instalación

1. Clonar el repositorio:
   ```sh
   git clone https://github.com/usuario/proyecto-laravel.git
   cd proyecto-laravel
   ```

2. Instalar dependencias de Composer:
   ```sh
   composer install
   ```

3. Configurar el archivo `.env`:
   ```sh
   cp .env.example .env
   ```
   Editar `.env` con las credenciales de la base de datos.

4. Generar la clave de aplicación:
   ```sh
   php artisan key:generate
   ```

5. Migrar la base de datos:
   ```sh
   php artisan migrate --seed
   ```

6. Iniciar el servidor:
   ```sh
   php artisan serve
   ```

## Endpoints Importantes

### Autenticación y Usuarios
| Método | Ruta                | Descripción |
|--------|---------------------|-------------|
| POST   | `/register`         | Registro de usuario |
| POST   | `/login`            | Inicio de sesión |
| GET    | `/users`            | Listar usuarios (solo admin) |
| POST   | `/logout`           | Cerrar sesión |

### Eventos
| Método | Ruta                | Descripción |
|--------|---------------------|-------------|
| GET    | `/events`           | Listar eventos |
| POST   | `/events`           | Crear evento (requiere autenticación) |
| GET    | `/events/{id}`      | Obtener detalles de un evento |
| PUT    | `/events/{id}`      | Actualizar un evento (requiere autenticación) |
| DELETE | `/events/{id}`      | Eliminar un evento (requiere permisos de admin) |

### Asociaciones
| Método | Ruta                | Descripción |
|--------|---------------------|-------------|
| GET    | `/associations`     | Listar asociaciones |
| POST   | `/associations`     | Crear asociación |
| GET    | `/associations/{id}` | Obtener detalles de una asociación |
| PUT    | `/associations/{id}` | Actualizar una asociación |
| DELETE | `/associations/{id}` | Eliminar una asociación |

### Suscripciones
| Método | Ruta                | Descripción |
|--------|---------------------|-------------|
| GET    | `/subscriptions`    | Listar suscripciones del usuario |
| POST   | `/subscriptions`    | Suscribirse a una asociación |
| DELETE | `/subscriptions/{id}` | Cancelar suscripción |

### Recursos y Políticas
| Método | Ruta                | Descripción |
|--------|---------------------|-------------|
| GET    | `/about`            | Información sobre la plataforma |
| GET    | `/rules`            | Reglas de la comunidad |
| GET    | `/privacy`          | Políticas de privacidad |

## Consideraciones

- La autenticación y gestión de usuarios están completamente en Laravel, por lo que React redirige al dominio del backend para estas funciones.
- El backend mantiene la estética de React para una experiencia uniforme.
- Se usó **Orion** para facilitar la creación de APIs siguiendo el estándar JSON:API.
- Se usó **Sanctum** para autenticación basada en tokens.
- Se usó **Laravel CRUD Generator** para acelerar el desarrollo de funcionalidades CRUD.

## Contribuciones

Si deseas contribuir, por favor contacta a uno de los integrantes del equipo o realiza un pull request con tus cambios.

## Licencia

Este proyecto es de código abierto bajo la licencia **MIT**.

