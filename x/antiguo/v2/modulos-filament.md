# Modulos con filament

Gracias a la libreria **[Filaament v4](https://github.com/filamentphp/filament)** Podemos utilizar lo que es filament, puedes encontrar mas informacion sobre eso en el documento de filament, en este caso como uamos laravel-modules y necesitamos implementar filament en los modulos utilizamos un pligin de filament el cual es **[Filament en Módulos (coolsam/modules) v5](https://github.com/savannabits/filament-modules/blob/main/README.md)**.


Esta libreria nos permite poder tener una estructura dentro de los modulos capas de soportar filament, igualmente nos proporciona nuevos comandos que nos ayudarian realizar procesos mucho mas facilmente.

## Crear un Modulos con filament

Este comando te permite instalar filament dentro del modulo, en caso de que no tengas un modulo con ese nombre te lo va a crear.

te ara una serie de preguntas, las cuales es mejor darle yes a todo.

!Importante que el nombre de tu modulo no este totalmente en mayusculas ya que la libreria separa con "-" cunado encunetra una mayuscula entre 2 letras si escribes ABCD te dara algo como A-B-C-D haciendo ilegible algunas acciones!

```bash
php artisan module:filament:install <nombre-modulo>
```

la estructura que te va a crear es la siguente 
```bash
Modules/
└── NombreModulo/
    ├── Config/
    │   └── config.php
    ├── Database/
    │   ├── Migrations/
    │   └── Seeders/
    │       └── NombreModuloDatabaseSeeder.php
    ├── app/
    │   ├──Filament/
    │   ├── NombrePanel/
    │   ├── Clusters/
    │   │   └── ClusterPanel.php
    │   └── nombrePanelPlugin/
    ├── Http/
    │   ├── Controllers/
    │   ├── Middleware/
    │   └── routes.php
    ├── Models/
    │   └── Nombre.php
    ├── Providers/
    │   ├──Filament/
    │   │   └── PanelProvaiders 
    │   ├── NombreModuloServiceProvider.php
    │   └── RouteServiceProvider.php
    ├── Resources/
    │   └── views/
    │       └── welcome.blade.php
    ├── composer.json
    └── module.json
```

