# Crear un modulo en CEFAEMPRESA

Los modulos se utilizan para separar logicas de negocios complejas las cuales pueden quedar algo confusas cuando se juntan muchas en algunas pocas carpetas, los modulos te permitiran administrar esto con mayor eficiencia y ademas implementado con filament 4

## crear un modulo

crea un modulo sin filament
```bash
php artisan module:make name_module
```

## Instalar filament en el modulo

instalar filament en el modulo , y en caso de no tener creado el modulo lo crea, lo correcto es darle "yes" a todas las preguntas que te hagan.


```bash
php artisan module:filament:install nombre_modulo
```

## Crear un panel dentro del modulo con filament

este comando te ara una serie de preguntas para poder saber donde vas a crear el panel,

1 . primero te pregunta el modulo
2 . nombre del panel
3 . te preguntara cual es el nombre que le mostrara a los usaurios en la vista cuando abran el panel

```bash
php artisan module:filament:make-panel 
```

para saber cual es la ruta a la que deben de ingresar deben de ir al provaider del painer para mirar el metodo path(), dentro de este metodo se encontrar la url que te permitira ingresar, puedes cambiar el patch si lo ves necesario

!No todas las letras del nombre del modulo en mayuscula o puede resultar en algo como esto ! = 's-e-n-a-e-m-p-r-e-s-a-s-e-n-a-e-m-p-r-e-s-a'


```bash
  return $panel
            ->id('s-e-n-a-e-m-p-r-e-s-a-s-e-n-a-e-m-p-r-e-s-a')
            ->path('SENAEMPRESA/SENAEMPRESA')
            ->brandName($this->getNavigationLabel())
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: module("SENAEMPRESA", true)->appPath("Filament{$separator}SENAEMPRESASENAEMPRESA{$separator}Resources"), for: module("SENAEMPRESA", true)->appNamespace('Filament\SENAEMPRESASENAEMPRESA\Resources'))
            ->discoverPages(in:module("SENAEMPRESA", true)->appPath("Filament{$separator}SENAEMPRESASENAEMPRESA{$separator}Pages"), for: module("SENAEMPRESA", true)->appNamespace('Filament\SENAEMPRESASENAEMPRESA\Pages'))
            ->pages([
                Dashboard::class,
            ])
```



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

Tambien tomar en cuneta que cuando se cree el panel deben de agregar un emtodo ->login() en el panel con tal de que se puedan logear si no estan logeados

``` bash
  return $panel
            ->id('senaempresa-sena-empresa')
            ->path('senaempresa/sena-empresa')
            ->login()
```

otro dato adicional es que pueden eliminar el la nevegacion hacia el panel de por defecto, para evitar confucion y que el usaurio se valla del panel en el que se encontraba



``` bash
->navigationItems([
                // Add a backlink to the default panel
                \Filament\Navigation\NavigationItem::make()
                    ->label(__('Back Home'))
                    ->sort(-1000)
                    ->icon(\Filament\Support\Icons\Heroicon::OutlinedHomeModern)
                    ->url(filament()->getDefaultPanel()->getUrl()),
            ])
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









