# CEFAEMPRESA-ERP
CEFAEMPRESA es un ERP (gestor de recursos empresariales) diseñado para gestionar la SENA Empresa de el centro de formación agroindustrial la angostura SENA


# Creacion de modulo

Para poder crear un modulo en el ERP necesitas ejecutar el siguente comando dentro de la carpeta del proyecto,
esto se logra gracias a al libreria de https://github.com/nWidart/laravel-modules  "nwidart/laravel-modules": "^11.0|^12.0".

``` bash
php artisan module:make nombre_modulo
```

# Implementar filament dentro del modulo creado

En el ERP se trabaja con filament 4 por lo que se necesita implementar filament dentro de los modulso gracias a la libreria https://github.com/savannabits/filament-modules/blob/main/README.md  "name": "coolsam/modules","version": "v5.0.7"

``` bash
php artisan module:filament:install nombre_modulo
```

# Crear un panel dentro del modulo con filament

Para crear un panel de filament en el modulo necesitas ejecutar el siguente comando una ves allas instalado coorrectamen filament en el modulo.


``` bash
php artisan module:filament:make-panel 
```

Cunado ejecutas el comando te dan una serie de preguntas, para definir en que modulo vas a guardar el panel y 
que nombre tendra la navegación del panel

## Por el momento la libreria de modulos filament no registra los paneles (solucion)

Dentro de la carpeta /bootstrap/ en el archivo providers.php en el return agrega los nuevos paneles con sus dirreciones ejem:

``` bash
<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,


    // paneles de modulos filament
    Modules\Blog\Providers\Filament\TestPanelProvider::class,
    Modules\Blog\Providers\Filament\Panel2PanelProvider::class,
];
```

# Crear un resource 

Para ejecutar este comando deves de tener almenos un model dentro del modulo en el que quieres trabajar este resource.

comando para crear model y migracion dentro de un modulo:

 
``` bash
php artisan module:make-model nombre_modelo nombre_modulo -m
```

comando para crear el resource:

``` bash
php artisan module:filament:resource
```


Este comando te dara una serie de preguntas para que el resource quede bien ubicado.

1 - Selecciona el modulo

2 - Selecciona el model

3 - Selecciona el columna de la tabla que quieres utilizar como nombre principal

4 - Selecciona el panel









