# **Instalacion y despliegue del proyecto**

Este documento contiene los pasos necesarios para instalar y desplegar el proyecto para que empieces a trabajar en el.

Asegúrate de tener instaladas las siguientes tecnologías en tu máquina:

- [PHP 8.2+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js 20+ y NPM](https://nodejs.org/)
- [MySQL 8+](https://dev.mysql.com/downloads/mysql/)
- [Git](https://git-scm.com/)

Estos servicios puedes obtenerlos con gestores de servicios como **laragon** , **Xampp**, desde su terminal puedes ejecutar los comandos que veras en este documento.

---

## ( 1 ) **Clonar el repocitorio**

Este comando te creara una carpeta llamada cefaempresa
```bash
git clone https://github.com/Andres020Mi/CEFAEMPRESA-ERP.git
```

Si quisieras descargar una rama en especifico del repo puedes utiliza el siguente comando.
```bash
git clone --branch <rama> https://github.com/Andres020Mi/CEFAEMPRESA-ERP.git
```

Si quieres que el proyecto se descargue con un nombre distinto para evitar conflictos de nombres ya existentes puedes utilizar el siguente comando para nombrar el proyecto como quieras.
```bash
git clone https://github.com/Andres020Mi/CEFAEMPRESA-ERP.git <nombre-carpeta>
```

---

## ( 2 ) **Ingresar al proyecto**

Es importa estar en la raiz del proyecto ya que desde ahi tendras que ejecutar comandos que te permitan utilizar de manera decuada este proyecto.

Desde la terminal puedes ingresar a la carpeta creada utilizando el siguente comando.
```bash
cd CEFAEMPRESA-ERP
```

lo que veras dentro es algo asi 

```bash
CEFAEMPRESA-ERP/
├── app/
│   ├── Console/
│   ├── Exceptions/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Kernel.php
│   ├── Models/
│   └── Providers/
│       ├── AppServiceProvider.php
│       ├── AuthServiceProvider.php
│       ├── BroadcastServiceProvider.php
│       ├── EventServiceProvider.php
│       └── RouteServiceProvider.php
│
├── bootstrap/
│   └── app.php
│
├── config/
│   └── *.php
│
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
│
├── lang/
│   └── en/
│
├── public/
│   ├── index.php
│   └── favicon.ico
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│
├── routes/
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
│
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
│
├── tests/
│   ├── Feature/
│   └── Unit/
│
├── vendor/
│
├── .editorconfig
├── .env.example
├── .gitattributes
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── phpunit.xml
├── vite.config.js
└── README.md

```


en caso de que le coloques un nombre distinto a la carpeta puedes utilizarlo asi.
```bash
cd <nombre-carpeta>
```

---

## ( 3 ) **Instalar de paquetespaquetes de PHP o librerías de Composer y paquetes de Node.js**

Es importante instalar las tecnologias necesarias que necesita el proyecto para funcionar esto se encunetran en los archivos,
composer.json , composer.lock , package-lock.json , package.json.

Puedes instalar todo eso con los siguentes 2 comandos los cuales tienes que ejecutar dentro de la carpeta raiz del proyecto en una terminal co acceso a las tecnologias de **composer** y **npm**.


instalar paquetes de **php**
```bash
composer install
```

instalar paquetes de **node**
```bash
npm install
```

---

## ( 4 ) **Clonación del .env**

Los proyectos necesitan un **.env** En el cual se almacena varibales importantes para que el proyecto funcione, como lo seria la coneccion a la base de datos, **KEY** , configuración de el modo del proyecto.

Este comando lo puedes crear solo si existe el .env.exmaple que debe de estar en la raiz del proyecto, este documento es una base de lo que necesitarias.

lo que aremos es utilizar el .env.exmaple para poder crear un nuevo archivo con su mismo contenido y empezar a trabajar sobre el.

recuerda estar dentro de la raiz del proyecto con una terminal.

```bash
cp .env.exmaple .env
```

---

## ( 5 ) **Crear la llave del proyecto**

Esta llave se encunetra en el .env y se crea para poder utilizarse para sifrar información sensible en el proyecto como seciones o informacion a la que le apligues encriptado.

recuerda estar en la carpeta raiz del proyecto
```bash
php artisan key:generate
```
---

## ( 6 ) **Configuración de la base de datos**
Todo proyecto necesita su base de datos  para funcionar en este caso dejare varios casos que puedes tomar.

### ( 6.1 ) **Con sqlite**
es una base de datos ligera y sin necesidad de descargar mucho, que te puede permitir desplegar tu proyecto mas rapido en **entornos de prueba**.

para poder migrar tu base de datos a este archivo tienes que crearlo ya que el proyecto viene sin el, puedes hacerlo con el siguente comando.

```bash
touch ./database/database.sqlite
```

luego de eso puedes migrar la base de datos con o sin seeders ya que laravel 12 por defecto viene configurado en el .env para trabajar con sqlite.

```bash
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

Para migrar todas las tablas del proyecto
```bash
php artisan migrate
```

Si te interesa trabajar volver a refrescar la base de datos desde 0 puedes utilizar esto.
```bash
php artisan migrate:refresh
```



### ( 6.2 ) **Con mysql**

mysql es un base de datos bastante util cunado lo bas a utilizar en produccion o en tu local si necesitas buen rendimiento cuando la base de datos sea demaciado grande.

tienes que ingresar al .env y descomentar las siguentes linas, lo logras quitando los # que se encuntran a la derecha.

tambien cambiale el sqlite por mysql

```bash

# Antes

DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=

# Despues

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=name__database
DB_USERNAME=root
DB_PASSWORD=


```


Para migrar todas las tablas del proyecto

```bash
php artisan migrate
```

Si te interesa trabajar volver a refrescar la base de datos desde 0 puedes utilizar esto.
```bash
php artisan migrate:refresh
```


---

## **( 7 ) Roles y permisos**

Este proyecto cuenta con un pligin de filament el cual utilizamos para poder utilizar roles y permisos, para que el super administrador funcione correctamente tienes que ejecutar los siguentes comandos.


este comando scaneara cada permiso que se necesita en cada resource y te preguntara en que panel quieres crear una vista para el super administrador para que este administre los roles y permisos desde ahi.

```bash
php artisan shield:generate --all
```


## **( 7 ) seeders "no recomendado"**

Si quieres migrar lo seeders puedes ejecutar el siguente comando estos comadnos migran todos los seeders existentes en el proyecto.

```bash
php artisan db:seed
```


En caso de que quieras migrar y ejecutar seeder de inmediato puedes utilizar
```bash
php artisan migrate --seed
```

En caso de que quieras refrescar y ejecutar seeder de inmediato puedes utilizar
```bash
php artisan migrate:refresh --seed
```
---


## **( 8 ) seeders modulos**

El proyecto cuenta con una libreria de modulos que permite separar seeders en cada modulo de manera independiente, para ejecutarlos tienes que utilizar el siguente comando.

```bash
php artisan module:seed <nombre-modulo>
```

---

## **( 9 ) Despligue**

Por conveniencia el proyecto usa el siguente comando modificado para ejecutar el proyecto en windos:

```bash
composer run dev:windos
```

En caso de estar en linux puedes ejecutarlo de esta manera
```bash
composer run dev
```


