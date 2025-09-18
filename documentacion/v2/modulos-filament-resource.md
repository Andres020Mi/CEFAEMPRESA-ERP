# Crear un resource 

Para ejecutar este comando debes de tener almenos un model dentro del modulo en el que quieres trabajar este resource.

## Crear modelo y migración dentro de un módulo

Comando:

```bash
php artisan module:make-model nombre_modelo nombre_modulo -m
```

Esto te creará:

- El modelo `Nombre_modelo` en `Modules/Nombre_modulo/models/NombreModelo.php`
- La migración correspondiente en `Modules/Nombre_modulo/Database/Migrations/...create_xxxxxxx_table.php`

## Ejecutar la migración

Ejecuta la migración con el siguiente comando:

```bash
php artisan module:migrate nombre_modulo
```

## Crear el resource

Comando:

```bash
php artisan module:filament:resource
```

Este comando te dará una serie de preguntas para que el resource quede bien ubicado:

1. Selecciona el módulo
2. Selecciona el modelo
3. Selecciona la columna de la tabla que quieres utilizar como nombre principal
4. Selecciona el panel de Filament en el que quieres generar el resource

## Archivos generados

Después del anterior paso, Filament generará dentro del módulo elegido la estructura donde podrás manipular el resource:

```
Modules/
 ├── NombreModulo/
 │    ├── app/
 │    │   ├── Filament/
 │    │   │   ├── Nombre_moduloNombrePanel/
 │    │   │   │   ├── Resources/
 │    │   │   │   │   ├── Nombre_Resource/
 │    │   │   │   │   │   ├── Pages/
 │    │   │   │   │   │   ├── Schemas/
 │    │   │   │   │   │   ├── Tables/
 │    │   │   │   │   │   └── Nombre_ResourceResource.php
 │    │   ├── Providers/
 │    │   │   ├── Filament/
 │    │   │   │   └── NombrePanelProvider.php
```
