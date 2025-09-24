# Creacion y configuracion de paneles filament en modulos

Es importante tener en cuneta que ya deves de tener creado algun modulo que tenga instalado filament dentro.

## Crear el panel

este comando te ara una serie de preguntas para poder crear tu panel.



1 . seleccione el modulo en el que quieres crear el panel

2 . id o nombre del panal

3 . navegtion el nombre que les mostraras a los usaurios arriba a la izquierda de tu dasboard del panel

el resltado que te dara sera algo parecidoo a : INFO Filament panel [C:\laragon\www\CEFAEMPRESA-ERP\Modules/Blog/app/\/Providers/Filament/PruebaxPanelProvider.php] created successfully.

```bash
php artisan module:filament:panel
```

## agregar el provaider del panel

La libreria tiene algunos conflictos para registrar los provaiders de los paneles por lo que debes de registrarlo a mano.

Tienes que colocar en la carpeta ./boostrap/provaiders.php la direccion de el privaider del panel en este caso se colocaria asi

```bash
 <?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\Admin2PanelProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,


    // paneles de filament en modulos
    Modules\Blog\Providers\Filament\PruebaxPanelProvider::class,


];
```

## agregar el login al panel

El panel se crea y de ves en cuando puede surgir error porque el panel no se le agrega el metodo login para permitir que los usaurios que ingresen por la url directamente al panel puedan logearse, esto causa errores.

La manera de solucionarlo es la siguente.

```bash
return $panel
            ->id('blog-pruebax')
            ->path('blog/pruebax')
            ->login() # <--- Agregar esta linea
```

