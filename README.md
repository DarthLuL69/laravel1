# Comandos utilizados

## Crear nuevo proyecto de Laravel
composer create-project laravel/laravel laravel1

## Conectar con una base de datos
Editar el archivo .env con los datos de la base de datos laravel1.

## Crear migrations para la tabla alumno
php artisan make:migration create_alumnos_table
php artisan migrate

## Crear un seeder para la tabla alumno
php artisan make:seeder AlumnoSeeder
php artisan db:seed --class=AlumnoSeeder

## Crear un controller AlumnoController
php artisan make:controller AlumnoController

## Crear rutas para trabajar con la tabla alumnos
Editar el archivo routes/api.php y definir las rutas.

## Crear un middleware para validar el ID
php artisan make:middleware ValidateAlumnoId

## Desactivar la verificación de CSRF para las rutas de la API
Editar el archivo app/Http/Middleware/VerifyCsrfToken.php y agregar las rutas de la API a la propiedad $except.

## Usar Query Builder en lugar de modelos
Editar el archivo app/Http/Controllers/AlumnoController.php para usar el Query Builder.



