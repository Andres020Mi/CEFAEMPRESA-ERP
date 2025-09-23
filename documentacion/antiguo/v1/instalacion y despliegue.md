# 🚀 Instalación  y despliegue del proyecto CEFAEMPRESA

## 📌 Requisitos previos

Asegúrate de tener instaladas las siguientes tecnologías en tu máquina:

- [PHP 8.2+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js 20+ y NPM](https://nodejs.org/)
- [MySQL 8+](https://dev.mysql.com/downloads/mysql/)
- [Git](https://git-scm.com/)



## ⚙️ Instalación del proyecto

1. **Clonar el repositorio**

Esto te agregara el proyecto dentro de una carpeta llamda CEFAEMPRESA-ERP.

```bash
   git clone https://github.com/Andres020Mi/CEFAEMPRESA-ERP.git

```


2. **Ingresar la carpeta del proyecto**

Para poder ejecutar comandos tienes que encontrarte en la hubicacion correcta, en este caso debes de ejecutar lo siguente. 

```bash
   cd CEFAEMPRESA-ERP
```


3. **Instalar dependencias**

El proyecto necesita de ciertas tecnologias las cuales pueden ser instaladas de la siguente forma. 


composer 

```bash
   composer install
```

node 

```bash
   npm install

```

4. **Creacion del enviroment (.env)**

El proyecto necestia este archivo ya que es donde se gaurdara variables de entornos para que todo este conectado.

```bash

   cp .env.example .env

```


5. **Crear la llave peronal del proyecto**

Los proyectos de laravel necesitan de esta llave para su funcionamiento

```bash

   php artisan key:generate

```


6. **( opcional ) crear una base de datos sqlite para hacer pruebas rapidas**

 laravel ya viene configurado para migrar las tablas  a sqlite, solo necesitas crear el archivo sqlite o puedes optar por configurar el .env para mysql 


sqlite

```bash

   touch ./database/database.sqlite

```

mysql 

```bash

    # Antes 

    DB_CONNECTION=sqlite
    # DB_HOST=127.0.0.1
    # DB_PORT=3306
    # DB_DATABASE=laravel
    # DB_USERNAME=root
    # DB_PASSWORD=

    # depues

    DB_CONNECTION=mysql
    # DB_HOST=127.0.0.1
    # DB_PORT=3306
    # DB_DATABASE= nombre_de_base_de_datos
    # DB_USERNAME= root
    # DB_PASSWORD=

```





7. **Migrar tablas con seeders**

Tienes distintas opciones dependiendo de tu caso:

Si necesitas desplegarlo de inmediato el siguente comando creara las tablas necesarias y agregara con seeders la informacion para que el software funcione.

informacion del admin

name: admin
email: admin@gmail.com
password: password

rol: super_admin

```bash

   php artisan migrate --seed

```

En caso de que ya allas migrador

```bash

   php artisan migrate:refresh --seed

   o

   php artisan db:seed 
```

si necesitas configurar a tu medida la informacion del super admin puedes encontrar el seeder en 

database/seeders/UsersSeeder.php


```bash

  // Crear usuario admin si no existe
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'admin',
                'password' => bcrypt('password'),
            ]
        );

        // Crear el rol super-admin si no existe
        $superAdminRole = Role::firstOrCreate(
            ['name' => 'super_admin', 'guard_name' => 'web']
        );

        // Asignar el rol
        if (! $admin->hasRole($superAdminRole)) {
            $admin->assignRole($superAdminRole);
        }

```





7. **Ejecutar proyecto**

el comando para desplegarlo el proyecto en windos es


```bash

  composer run dev:windos

```


el comando para desplegarlo el proyecto en linux es


```bash

  composer run dev
   
``