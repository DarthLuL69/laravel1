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

## Crear un modelo Alumno
php artisan make:model Alumno

## Crear un controller AlumnoController
php artisan make:controller AlumnoController

## Crear rutas para trabajar con la tabla alumnos
Editar el archivo routes/api.php y definir las rutas.

## Crear un middleware para validar el ID
php artisan make:middleware ValidateAlumnoId


