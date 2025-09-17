# ERP-CEFAEMPRESA

Bienvenido al repositorio de **ERP-CEFAEMPRESA**, un sistema de **Enterprise Resource Planning (Planificación de Recursos Empresariales)** desarrollado para apoyar a **SENA Empresa**, ubicada en el Centro de Formación Agroindustrial.  

Este proyecto busca **automatizar y digitalizar los procesos internos** de la organización, optimizando la gestión y mejorando la eficiencia en sus operaciones diarias.  

---

## 🚀 Tecnologías utilizadas

El proyecto está construido como un **monolito escalable** en **Laravel v12**, gracias a la integración de las siguientes herramientas y paquetes:

1. **[Filament v4](https://github.com/filamentphp/filament)** – Panel administrativo moderno y altamente personalizable.  
2. **[Laravel Modules v12](https://github.com/nWidart/laravel-modules)** – Arquitectura modular para organizar y escalar el proyecto.  
3. **[Filament en Módulos (coolsam/modules) v5](https://github.com/savannabits/filament-modules/blob/main/README.md)** – Integración de Filament con módulos para mayor flexibilidad.  
4. **[Roles y Permisos (Filament Shield v4)](https://github.com/bezhanSalleh/filament-shield)** – Gestión avanzada de accesos basada en roles y permisos.  

---

## 🎯 Objetivo

El propósito principal de este ERP es **brindar una solución integral para la gestión de recursos empresariales en SENA Empresa**, contribuyendo a:  

- Automatización de procesos internos.  
- Digitalización de la información.  
- Escalabilidad y adaptabilidad a nuevas necesidades.  
- Organización modular que facilita la mantenibilidad y evolución del sistema.  

---

## 📌 Estado del proyecto

Este proyecto se encuentra en constante desarrollo y mejora. Cualquier aporte, sugerencia o retroalimentación es bienvenida para fortalecer el sistema y su impacto en la organización.  

---

## 🤝 Documentación

Estos links proporcionan de manera detallada todo lo que necesitas saber para manipular el proyecto

1. **[Instalación del proyecto](https://github.com/filamentphp/filament)**
2. **[Crear un modulo dentro del proyecto](https://github.com/filamentphp/filament)**
3. **[Implementación de filament dentro de un modulo](https://github.com/filamentphp/filament)**
4. **[Creación de panneles en un modulo con filament](https://github.com/filamentphp/filament)**
5. **[Creación de resources dentro de un panel que se encunetre en un modulo](https://github.com/filamentphp/filament)**


## 🤝 Instalación rapida para profecionales

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