# CEFAEMPRESA-ERP
CEFAEMPRESA es un ERP (gestor de recursos empresariales) diseñado para gestionar la SENA Empresa de el centro de formación agroindustrial la angostura SENA


# Creacion de modulo

Para poder crear un modulo en el ERP necesitas ejecutar el siguente comando dentro de la carpeta del proyecto,
esto se logra gracias a al libreria de https://github.com/nWidart/laravel-modules  "nwidart/laravel-modules": "^11.0|^12.0".

-> php artisan module:make nombre_modulo


# Implementar filament dentro del modulo creado

En el ERP se trabaja con filament 4 por lo que se necesita implementar filament dentro de los modulso gracias a la libreria https://github.com/savannabits/filament-modules/blob/main/README.md  "name": "coolsam/modules","version": "v5.0.7"

-> php artisan module:filament:install nombre_modulo

# Crear un panel dentro del modulo con filament

Para crear un panel de filament en el modulo necesitas ejecutar el siguente comando una ves allas instalado coorrectamen filament en el modulo.

-> php artisan module:filament:make-panel 