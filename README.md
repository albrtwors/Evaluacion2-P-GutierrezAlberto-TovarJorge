# Evaluación 1 - Sistema de Gimnasio (Suscripciones)

## Información del Proyecto
- **Universidad:** UNIVERSIDAD POLITÉCNICA TERRITORIAL DEL ESTADO ARAGUA “FEDERICO BRITO FIGUEROA”
- **Carrera:** Informatica
- **Asignatura:** Paradigmas de Programación
- **Profesor:** Elías Vargas
- **Fase:** III - 2025-3

## Integrantes
1. Gutierrez Alberto
2. Tovar Jorge

## Enunciado 10: Música
Crear crud de la tabla Albúm que dependa de la Tabla Género:
Albúm:
- ID
- Nombre_album (album_name en el ejercicio) (string)
- Año_lanzamiento (year_release en el ejercicio) (numeric, 4 digits)
- Discográfica (discographic en el ejercicio) (string)

## Instrucciones de Ejecución

### Requisitos
- PHP 8.2+
- Composer
- SQLite

### Pasos

1-Clonar repositorio:
git clone https://github.com/albrtwors/Evaluacion2-P-GutierrezAlberto-TovarJorge.git

Acceder al repositorio:
cd Evaluacion2-P-GutierrezAlberto-TovarJorge.git

2-Instalar dependencias:
composer install


3-Configurar archivo .env:
 Editar .env y asegurar estas líneas:
 DB_CONNECTION=sqlite
 DB_DATABASE=database/database.sqlite


4-Ejecutar migraciones y seeders (seeders de generos):
php artisan migrate:fresh --seed

5-Iniciar servidor:
php artisan serve

6-Acceder en navegador:
http://127.0.0.1:8000/albums