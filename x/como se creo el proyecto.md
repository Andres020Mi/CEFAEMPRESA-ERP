# **Creacion del proyecto**

Este documento te permite saber como fue la creacion del proyecto, para que puedas replicaro si lo necesitas, igualmente 
te proporciona el listado de los requerimientos que necesitas para crear un proyecto de este tipo.

---

## **Tecnologias requeridas**

- php v8.2^ 
- node v22.18.0^ / npm v10.9.3^ 
- composer
- mysql 8.0.0^ / sqlite




si estas en windos puedes utilizar un gestor de servicios como XAMPP o laragon entre otros, pero toma en cuneta que debes de revisar las verciones que te proporcionan.

En caso de que estes en linux te recomendamos usar docker y docker compose para poder gestionar las tecnologias necesarias.

---

## **1. Creacion de un proyecto laravel** 

En la terminal desde donde se puedan acceder a los servicios requeridos, ejecuta el siguente comadno que utilizara el paquete de laravel 12  para create un proyecto inicial en el cual vas a trabajar.

En mi caso necesito que el proyecto se llame CEFAEMPRESA-ERP pero puedes agregar el nombre que quieras.

si quieress cambiar la vercion puedes hacerlo donde dice "12.x" solo coloca la vercion que quieras en lugar del 12, te recomendamos dejar el .x para que instale la ultima vercion estable dentro de las que eligas.


```bash

composer create-project laravel/laravel "CEFAEMPRESA-ERP" "12.x"

```

---

## **2. Instalar la libreria de Filament v4**

- **[Documentacion de filament v4](https://filamentphp.com/docs/4.x/introduction/overview)**

Esta libreria es una muy util para poder crear proyectos con buen rendimiento gracias a sus tecnologias implementadas como alpin.js, livewire , estilos personalizados, buena experiencia de usuario entre muchas otras cosas que ofrece Filament.

Puedes instalar Filament con los siguentes pasos.

### **1. descargar la libreria**

esto te descargara en el vendor todo lo que necesitas de filament

```bash

composer require filament/filament:"^4.0"

```


### **2. instalar en el proyecto los paneles**

esto te permitira usar paneles de filament en el proyecto,


te preguntara cual quieres que sea el ID del panel.

```bash

php artisan filament:install --panels

```



Felicidades ya tienes filament instalado para que lo empieces a utilizar.

---

## **3. Instalación del plugin Roles y Permisos (Filament Shield v4)**

Gracias al plugin de filament  **[Roles y Permisos (Filament Shield v4)](https://github.com/bezhanSalleh/filament-shield)** podemos tener un sistema de roles y permisos automaticos por cada resource que se generen en el proyecto, igualmente esta libreria los analica dentro de los modulos.


Sigue estos pasos para poder instalar y configurar correctamente la libreria.

### **1. instalar la libreria de filament-shield**

esto te instalara en el vendor todo lo que necesitas.

```bash

composer require bezhansalleh/filament-shield

```

### **2. Configurar el model User**

Es necesario que en el model user agregues lo siguente para que este model tenga acceso a nuevas funciones que trae gracias a shield.


te señalo con unas flechas "<---" que es lo que tienes que colocar. 


```bash

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Spatie\Permission\Traits\HasRoles;    <--- Importa lo necesario

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    use HasRoles; <---- Utiliza lo importa en el model

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}


```

### **3. configuración del setup de shield**

Es posible que te cause algunos errores cunado ejecutas este comando, te recomendamos que hagas lo siguente, is es que 
cunado ejecutas el comando todo se queda quieto en lugar de terminar de cargar.

ejecuta el comando

```bash

php artisan shield:setup

```

espera 10 segundos , dale a Ctrl + c para cancelar el proceso y vuelve a ejecutar el comando


```bash

php artisan shield:setup

```

luego te aparecer algo que dice asi , di que no

```bash

 Do you want to configure Shield for multi-tenancy? (yes/no) [no]

```



una ves realizado los procesos tiene que salirte algo asi 



```bash

   INFO  Shield has been successfully setup & configured!

```

espera 10 segundos , dale a Ctrl + c para cancelar el proceso y vuelve a ejecutar el comando

si vuelves a ejecutar el comando, no te debe de salir nada solo la pregunta de tema




## **4. Creacion del panel admin**

ya deberias de tenerlo creado si es que usarte el ID de admin cunado instalaste los panales, pero en caso de no tenerlo
puedes ejecutar este comando


```bash

php artisan make:filament-panel admin

```


## **5. Crear un model y migracion de prueba**


Necesitamos almenos un model y una migracion relacionada al model para poder hacer algunas pruebas de que todo funciona correctamente.

eso puedes crearlo con este comando

```bash

php artisan make:model Tarea -m

```

recuerda configurar el modelo y la migracion de la siguente manera

model

```bash

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = ["nombre","descripcion"];  <---- Agregar esta linea
}


```


migracion

```bash

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre"); <---- Agregar esta linea
            $table->string("descripcion"); <---- Agregar esta linea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};

```

luego tienes que migrar la tabla ejecutando este comando.


```bash

php artisan migrate

```



## **6 crear un resource para el model y migracion de prueba**

para poder administrar la info con crud de filament debes de ejecutar este comando.



```bash

php artisan make:filament-resource Tarea --generate

```

El proceso debe de ser el siguente 


```bash

λ php artisan make:filament-resource Tarea --generate

 The "title attribute" is used to label each record in the UI.

 You can leave this blank if records do not have a title.

  What is the title attribute for this model?
❯ nombre

  Would you like to generate a read-only view page for the resource? (yes/no) [no]
❯ yes

   INFO  Filament resource [App\Filament\Admin\Resources\Tareas\TareaResource] created successfully.

```

## **7. instalar shield en el panel admin**

esto es importante para que este panel pueda mostrar los roles y los permisos que tienen esos roles para administrar los resources


```bash
php artisan shield:install admin
```


Recuerda agregar el ->default() en el provaider del panel creado, que aveses no se agrega , la ruta seria "App\Providers\Filament\AdminPanelProvaider.php".

de paso si no encuntras el login entonces agregarlo tambien.

```bash
  return $panel
            ->id('admin')
            ->path('admin')
            ->default()          <--- Agregar esta linea
            ->login()           <--- Agregar esta linea si no la encuntras
            ->colors([
                'primary' => Color::Amber,
            ])
```

## **8 crear un usuario y darle permisos de super administraor**

Para crear un usaurio en ejecuta el siguente comando

esto te ara una serie de preguntas, te recomendamos que uses las siguentes credenciales para que te sea mas facil recordarlo.

name: admin
email: admin@mail.com
password: password

```bash
php artisan  make:filament-user
```


para darle el rol de super administrador solo ejecuta el siguente comadno.

recuerda que te preguntara el numero del panel asi que solo pon el que tenga el admin, si no as echo mas panales antes del admin el numero sera 0.


```bash
php artisan shield:super-admin
```

resultado 
```bash
   INFO  Success! admin@gmail.com may now log in at .
```

## **9. configurar los comandos para desplegar el proyecto**

si estas trabajando el windos seguro te saldra algun error en caso de ejecutar el comando normal de laravel 12 el cual es "composer run dev", ya que existen algunas cosas de linux que se ejecuta en ese comando, para solucionar esto debes de ir a la zona script dentro del composer.json y pegar lo siguente.


  ```bash
        "dev:windos": [
            "Composer\\Config::disableProcessTimeout",
            "npx concurrently -c \"#93c5fd,#c4b5fd,#fb7185,#fdba74\" \"php artisan serve\" \"php artisan queue:listen --tries=1\"  \"npm run dev\" --names=server,queue,logs,vite --kill-others"
        ],
```

En esta sona 


```bash
  "scripts": {
        "post-autoload-dump": [
            "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
            "@php artisan package:discover --ansi",
            "@php artisan filament:upgrade"
        ],
        "post-update-cmd": [
            "@php artisan vendor:publish --tag=laravel-assets --ansi --force"
        ],
        "post-root-package-install": [
            "@php -r \"file_exists('.env') || copy('.env.example', '.env');\""
        ],
        "post-create-project-cmd": [
            "@php artisan key:generate --ansi",
            "@php -r \"file_exists('database/database.sqlite') || touch('database/database.sqlite');\"",
            "@php artisan migrate --graceful --ansi"
        ],
        "dev": [
            "Composer\\Config::disableProcessTimeout",
            "npx concurrently -c \"#93c5fd,#c4b5fd,#fb7185,#fdba74\" \"php artisan serve\" \"php artisan queue:listen --tries=1\" \"php artisan pail --timeout=0\" \"npm run dev\" --names=server,queue,logs,vite --kill-others"
        ],

        
        "dev:windos": [
            "Composer\\Config::disableProcessTimeout",
            "npx concurrently -c \"#93c5fd,#c4b5fd,#fb7185,#fdba74\" \"php artisan serve\" \"php artisan queue:listen --tries=1\"  \"npm run dev\" --names=server,queue,logs,vite --kill-others"
        ],

        "test": [
            "@php artisan config:clear --ansi",
            "@php artisan test"
        ]
    },
    
```

una ves echo este proceso puedes ejecutar el comando para que instale todo lo necesario en node

```bash
npm install
```

depues de esto puedes desplegar el proyecto.

```bash
composer run dev:windos
```

## **9. explicacion sobre lo roles y permisos a utilizar**

si ingresar a la ruta

```bash
http://127.0.0.1:8000/admin/
```

podras observar como aparece el resource de tareas, y el de adminitrar permisos de roles,
si ingresar desde otro navegaror con otro usario usando el comando de.


```bash
php artisan make:filament-user
```

podras observar que ya no te aparece las opciones de administrar roles y permisos, sin embargo aun puedes observar el modulo de tareas lo cual estaria mal, esto se aregla utilizando el siguente comadno que lo que hace es leer los permisos de los resources y negarle el acceso a quienes no tenga los roles necesarios.

```bash
php artisan shield:generate --all
```

esto comando se tiene que utilizar cada ves que crees un nuevo resource para poder analizar los permisos, recuerda seleccionar el panele del admin.


con esto abremos finalizado todos los procesos para manejar roles y permisso.

## **10. administrar roles de usuarios**

si te interesa manejar que roles tiene cada usuario puede seguir los siguentes procesos.


### **1. crear el resource de usuarios en el panel admin**

creemos un resource en el panel admin que administre los usuarios con el sigunete comando


```bash
php artisan make:filament-resource User --generate
```

el proceso es
```bash
λ php artisan make:filament-resource User

 The "title attribute" is used to label each record in the UI.

 You can leave this blank if records do not have a title.

  What is the title attribute for this model?
❯ name

  Would you like to generate a read-only view page for the resource? (yes/no) [no]
❯ yes

  Should the configuration be generated from the current database columns? (yes/no) [no]
❯ yes

   INFO  Filament resource [App\Filament\Admin\Resources\Users\UserResource] created successfully.

```

recuerda ejecutar de nuevo este comando para poder limitar a otros roles sobre su acceso 

```bash
php artisan shield:generate --all
```

### **2. configurar el resource**

en la ruta App\Filament\Admin\Resources\Users\shema\UserForm.php

debes de agregar lo siguente dentro de components

```bash
     
                Select::make("roles")
                    ->label("Roles")
                    ->multiple()
                    ->relationship("roles", "name")
                    ->preload()
```

quedaria asi 


```bash
   return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),

                TextInput::make('password')
                    ->password()
                    ->required(),


     
                Select::make("roles")
                    ->label("Roles")
                    ->multiple()
                    ->relationship("roles", "name")
                    ->preload()
                    
            ]);
```


una ves echo esto puedes administrar los roles que tienen tus usuarios desde el panel admin siendo super_admin



## **11. instalacion de la libreria de modulos con filament en el proyecto**

Esta libreria es importante ya que es para seprar estructuras complejas en carpetas que se asimilan a lo que es laravel normal, permitiendo que el proyecto este mas organizado. 


te recomendamos darle a "y" cuando te pregunte por permisos.

```bash
composer require coolsam/modules
```

esto te instalara la libreria de laravel modules normal de nwidrt mas el tema de filament con modulos y tambien lo necesario para poder administrarlo con filament gracias a coolsam.


## **12 Crear un modulo con filament**

primero agrega esto a tu  composer.json en donde dice extra necesitas el marge-plugin

```bash
"extra": {
    "laravel": {
        "dont-discover": []
    },
    "merge-plugin": {
        "include": [
            "Modules/*/composer.json"
        ]
    }
},
```
```bash
recuerda agregar esto


      ])
            ->plugins([
                FilamentShieldPlugin::make(),
                ModulesPlugin::make(), <--- esta linea
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
```

luego este comando
```bash
php artisan modules:install
```

este comando normalmente se utiliza para instalar filament en un modulo, pero si no tienes creado el modulo, se te va a crear.

recuerda dale yes a todo.

```bash
php artisan module:filament:install prueba
```


## **13 crear un panel dentro de un modulo**

Con este comando puedes crear un panel dentro de un modulo, te ara una serie de preguntas muy intuitivas las cuales es para seleccionar el modulo en el cual quieres el panel y pues el nombre del panel, recuerda darle yes a todo.


cunado te pregunte sobre la nav del panel es porque quieres saber que nombre le quieres colocar a el texto que aparece arriba a la izquierda en el panel


```bash
php artisan module:filament:panel
```


## **14 configuracion del panel**

Recuerda que los paneles creados dentro de modulo no vienen con un login por lo que debes de agregarselo asi 
```bash
  return $panel
            ->id('prueba-prueba')
            ->path('prueba/prueba')
            ->login()  <--- agregar esta linea
            ->brandName($this->getNavigationLabel())
            ->colors([
                'primary' => Color::Amber,
            ])

```



## **14 la ruta del provaider panel en el privaiders**

es importante que cada panel que crees loa gregues  a los provaiders de laravel, ya que por un error de la libreria de modulos no se agregan de manera automatica.

en ./boostrap/provaiders.php


```bash
<?php


return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,

    # paneles de modulos 
    Modules\Prueba\Providers\Filament\PruebaPanelProvider::class, <--- Agregar esta linea
];

```






## **15 crear un resource en un panel dentro de un modulo**

para esto primero necestas una migracion y un model de prueba dentro dle modulo, esto puedes tenerlo con el siguente comando.


```bash
php artisan module:make-model producto Prueba -m
```


reuerda configurar de esta manera

migracion
```bash
  Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre"); <--- Agregar esta linea
            $table->string("descripcion"); <--- Agregar esta linea
            $table->timestamps();
        });
```


model
```bash
 <?php

namespace Modules\Prueba\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Prueba\Database\Factories\ProductoFactory;

class producto extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [  "nombre", "descripcion" ]; <--- Agregar esta linea

    // protected static function newFactory(): ProductoFactory
    // {
    //     // return ProductoFactory::new();
    // }
}

```

el siguente comadno es para migrar la tabla



```bash
php artisan module:migrate Prueba
```


una ves realizado estos procesos puedes ejecutar para generar el resource


```bash
php artisan module:filament:resource 
```



este comando te ara una serie de preguntas para ayudarte a seleccionar en que moduloe en que paneles y con que model quieres trabajar.



```bash
C:\laragon\www\CEFAEMPRESA-ERP(main -> origin)
λ php artisan module:migrate Prueba
  Running Migration Prueba Module ..................................................................................................................

   INFO  Running migrations.

  2025_09_22_083959_create_productos_table ............................................................................................ 95.72ms DONE


C:\laragon\www\CEFAEMPRESA-ERP(main -> origin)
λ php artisan module:filament:resource

  Please select the module to create the resource in:
  Prueba .................................................................................................................................... prueba
  Xd ............................................................................................................................................ xd
  Xdx .......................................................................................................................................... xdx
❯ prueba
prueba

  Please select the model within this module for the resource:
  Modules\Prueba\Models\Producto ................................................................................................................. 0
❯ 0
0


 [INFO] Using model namespace: Modules\Prueba\Models



 [INFO] Using model name: Producto


  Please select the Filament panel to create the resource in: [admin]
  admin .......................................................................................................................................... 0
  prueba-prueba .................................................................................................................................. 1
❯ 1
1

 The "title attribute" is used to label each record in the UI.

 You can leave this blank if records do not have a title.

  What is the title attribute for this model?
❯ nombre

  Would you like to generate a read-only view page for the resource? (yes/no) [no]
❯ yes

  Should the configuration be generated from the current database columns? (yes/no) [no]
❯ yes

   INFO  Filament resource [Modules\Prueba\Filament\PruebaPrueba\Resources\Productos\ProductoResource] created successfully.


C:\laragon\www\CEFAEMPRESA-ERP(main -> origin)
λ

```



